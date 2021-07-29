<?php

namespace App\Controllers;

use \App\Models\PemesananModel;
use TCPDF;

class Pembayaran extends BaseController
{
    protected $pemesananModel;
    public function __construct()
    {
        $this->pemesananModel = new PemesananModel();
    }

    public function edit($id_pemesanan)
    {
        $data = [
            'title' => 'Bayar Pemesanan',
            'validation' => \Config\Services::validation(),
            'pemesanan' => $this->pemesananModel->getPemesanan($id_pemesanan)
        ];
        return view('pembayaran/edit', $data);
    }

    public function update($id_pemesanan)
    {
        if (!$this->validate([
            'bukti_bayar' => [
                'rules' => 'max_size[bukti_bayar,1024]|is_image[bukti_bayar]|mime_in[bukti_bayar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar. Maksimal 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            return redirect()->to('/pembayaran/edit/' . $this->request->getVar('id_pemesanan'))->withInput();
        }

        $fileBayar = $this->request->getFile('bukti_bayar');

        // cek gambar, apakah tetap gambar lama
        if ($fileBayar->getError() == 4) {
            $namaBayar = $this->request->getVar('bukti_bayarLama');
        } else {
            // generate nama bukti_bayar random
            // $namaBayar = $fileBayar->getRandomName();
            // ambil nama file
            $namaBayar = $fileBayar->getName();
            // pindahkan file ke folder img
            $fileBayar->move('img/bukti_bayar', $namaBayar);
            // hapus file lama
            if ($this->request->getVar('bukti_bayarLama') != 'default.jpg') {
                unlink('img/bukti_bayar/' . $this->request->getVar('bukti_bayarLama'));
            }
        }

        $this->pemesananModel->save([
            'id_pemesanan' => $id_pemesanan,
            'bukti_bayar' => $namaBayar
        ]);

        session()->setFlashdata('pesan', 'Bukti pembayaran berhasil diupload.');

        return redirect()->to('/pemesanan/riwayat');
    }

    public function cetak($id_pemesanan)
    {
        $data = [
            'pemesanan' => $this->pemesananModel->getPemesananCetak($id_pemesanan)
        ];
        $html = view('pembayaran/cetak', $data);

        // create new PDF document
        $pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('Kuitansi');
        $pdf->SetSubject('Kuitansi');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        $this->response->setContentType('application/pdf');
        //Close and output PDF document
        $pdf->Output('kuitansi.pdf', 'I');
    }
}
