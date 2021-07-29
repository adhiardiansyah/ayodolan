<?php

namespace App\Controllers;

use \App\Models\UsersModel;

class Profil extends BaseController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function index()
    {
        $data['title'] = 'Profil Akun';

        return view('profil/index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Profil',
            'validation' => \Config\Services::validation(),
            'user' => $this->usersModel->getUser()
        ];
        return view('profil/edit', $data);
    }

    public function update()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'E-Mail harus diisi',
                    'valid_email' => 'E-Mail tidak valid'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi'
                ]
            ],
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap harus diisi'
                ]
            ],
            'user_image' => [
                'rules' => 'max_size[user_image,1024]|is_image[user_image]|mime_in[user_image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar. Maksimal 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/wisata/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('/profil/edit/' . user_id())->withInput();
        }

        $fileSampul = $this->request->getFile('user_image');

        // cek gambar, apakah tetap gambar lama
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('user_imageLama');
        } else {
            // generate nama sampul random
            // $namaSampul = $fileSampul->getRandomName();
            // ambil nama file
            $namaSampul = $fileSampul->getName();
            // pindahkan file ke folder img
            $fileSampul->move('img', $namaSampul);
            // hapus file lama tapi jangan hapus file default
            if ($this->request->getVar('user_imageLama') != 'default.svg') {
                unlink('img/' . $this->request->getVar('user_imageLama'));
            }
        }

        $this->usersModel->save([
            'id' => user_id(),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'user_image' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/profil');
    }
}
