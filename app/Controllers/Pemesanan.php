<?php

namespace App\Controllers;

use \App\Models\WisataModel;
use \App\Models\PemesananModel;

class Pemesanan extends BaseController
{
    protected $db;
    protected $wisataModel;
    protected $pemesananModel;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->wisataModel = new WisataModel();
        $this->pemesananModel = new PemesananModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Booking Paket Wisata',
            'wisata' => $this->wisataModel->getWisata(),
            'validation' => \Config\Services::validation()
        ];
        return view('pemesanan/index', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'tgl_berangkat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Berangkat harus diisi'
                ]
            ],
            'jumlah_orang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah Orang harus diisi'
                ]
            ]

        ])) {
            return redirect()->to('/pemesanan')->withInput();
        }

        $this->pemesananModel->save([
            'paket' => $this->request->getVar('paket'),
            'id_user' => user_id(),
            'tgl_berangkat' => $this->request->getVar('tgl_berangkat'),
            'jumlah_orang' => $this->request->getVar('jumlah_orang'),
            'status_pemesanan' => $this->request->getVar('status_pemesanan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/pemesanan/riwayat');
    }

    public function riwayat()
    {
        $datakosong = [
            'title' => 'Riwayat Pemesanan'
        ];

        // $builder = $this->db->table('pemesanan');
        // $builder->select('id_pemesanan, pemesanan.paket as paket, tgl_berangkat, jumlah_orang, status_pemesanan, bukti_bayar, harga');
        // $builder->orderBy('id_pemesanan', 'ASC');
        // $builder->join('wisata', 'wisata.paket = pemesanan.paket');
        // $builder->where('pemesanan.id_user', user_id());
        // $query = $builder->get();

        $currentPage = $this->request->getVar('page_pemesanan') ? $this->request->getVar('page_pemesanan') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->pemesananModel->search($keyword);
        } else {
            $orang = $this->pemesananModel;
        }

        $data = [
            'title' => 'Riwayat Pemesanan',
            'pemesanan' => $orang->orderBy('id_pemesanan', 'ASC')->join('wisata', 'wisata.paket = pemesanan.paket')->where('pemesanan.id_user', user_id())->paginate(2, 'pemesanan'),
            'pager' => $this->pemesananModel->pager,
            'currentPage' => $currentPage
        ];

        // $data['title'] = 'Riwayat Pemesanan';
        // $data['pemesanan'] = $query->getResult();

        $this->pemesananModel->where(['id_user' => user_id()]);
        $num_rows = $this->pemesananModel->countAllResults('pemesanan');
        if ($num_rows == 0) {
            return view('pemesanan/riwayatkosong', $datakosong);
        } else {
            return view('pemesanan/riwayat', $data);
        }
    }

    public function hapus($id_pemesanan)
    {
        $this->pemesananModel->delete($id_pemesanan);
        if ($this->request->getVar('bukti_bayarLama') != 'default.jpg') {
            unlink('img/bukti_bayar/' . $this->request->getVar('bukti_bayarLama'));
        }
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/pemesanan/riwayat');
    }

    public function edit($id_pemesanan)
    {
        $data = [
            'title' => 'Edit Pemesanan',
            'validation' => \Config\Services::validation(),
            'wisata' => $this->wisataModel->getWisata(),
            'pemesanan' => $this->pemesananModel->getPemesanan($id_pemesanan)
        ];
        return view('pemesanan/edit', $data);
    }

    public function update($id_pemesanan)
    {
        if (!$this->validate([
            'tgl_berangkat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Berangkat harus diisi'
                ]
            ],
            'jumlah_orang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumlah Orang harus diisi'
                ]
            ]

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/wisata/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('/pemesanan/edit/' . $this->request->getVar('id_pemesanan'))->withInput();
        }

        $this->pemesananModel->save([
            'id_pemesanan' => $id_pemesanan,
            'paket' => $this->request->getVar('paket'),
            'tgl_berangkat' => $this->request->getVar('tgl_berangkat'),
            'jumlah_orang' => $this->request->getVar('jumlah_orang')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/pemesanan/riwayat');
    }
}
