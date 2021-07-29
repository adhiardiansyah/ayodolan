<?php

namespace App\Controllers;

use \App\Models\WisataModel;
use \App\Models\PemesananModel;
use \App\Models\UsersModel;
use \App\Models\RoleModel;

class Admin extends BaseController
{
    protected $db;
    protected $wisataModel;
    protected $pemesananModel;
    protected $usersModel;
    protected $roleModel;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->wisataModel = new WisataModel();
        $this->pemesananModel = new PemesananModel();
        $this->usersModel = new UsersModel();
        $this->roleModel = new RoleModel();
    }

    public function index()
    {
        // $data['title'] = 'Dashboard Admin';

        // $builder = $this->db->table('pemesanan');
        // $builder->select('id_pemesanan, id_user, pemesanan.paket as paket, tgl_berangkat, jumlah_orang, status_pemesanan, bukti_bayar, username, harga');
        // $builder->orderBy('id_pemesanan', 'ASC');
        // $builder->join('users', 'users.id = id_user');
        // $builder->join('wisata', 'wisata.paket = pemesanan.paket');
        // $query = $builder->get();

        // $data['dashboard'] = $query->getResult();

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->pemesananModel->search2($keyword);
        } else {
            $orang = $this->pemesananModel;
        }

        $data = [
            'title' => 'Dashboard Admin',
            'dashboard' => $orang->orderBy('id_pemesanan', 'ASC')->join('users', 'users.id = id_user')->join('wisata', 'wisata.paket = pemesanan.paket')->paginate(2, 'pemesanan'),
            'pager' => $this->pemesananModel->pager
        ];

        return view('admin/index', $data);
    }

    public function hapuspesan($id_pemesanan)
    {
        $this->pemesananModel->delete($id_pemesanan);
        if ($this->request->getVar('bukti_bayarLama') != 'default.jpg') {
            unlink('img/bukti_bayar/' . $this->request->getVar('bukti_bayarLama'));
        }
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin');
    }

    public function editpesan($id_pemesanan)
    {
        $data = [
            'title' => 'Edit Pemesanan',
            'validation' => \Config\Services::validation(),
            'wisata' => $this->wisataModel->getWisata(),
            'pemesanan' => $this->pemesananModel->getPemesanan($id_pemesanan)
        ];
        return view('admin/editpesan', $data);
    }

    public function updatepesan($id_pemesanan)
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
            return redirect()->to('/admin/editpesan/' . $this->request->getVar('id_pemesanan'))->withInput();
        }

        $this->pemesananModel->save([
            'id_pemesanan' => $id_pemesanan,
            'paket' => $this->request->getVar('paket'),
            'tgl_berangkat' => $this->request->getVar('tgl_berangkat'),
            'jumlah_orang' => $this->request->getVar('jumlah_orang'),
            'status_pemesanan' => $this->request->getVar('status_pemesanan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin');
    }

    public function akun()
    {
        // $data['title'] = 'Daftar Akun';
        // // $akun = new \Myth\Auth\Models\UserModel();
        // // $data['akun'] = $akun->findAll();

        // $builder = $this->db->table('users');
        // $builder->select('users.id as userid, username, email, name');
        // $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        // $query = $builder->get();

        // $data['akun'] = $query->getResult();

        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->usersModel->search($keyword);
        } else {
            $orang = $this->usersModel;
        }

        $data = [
            'title' => 'Daftar Akun',
            'akun' => $orang->select('users.id as userid, username, email, name')->join('auth_groups_users', 'auth_groups_users.user_id = users.id')->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')->paginate(5, 'users'),
            'pager' => $this->usersModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/akun', $data);
    }

    public function detailakun($id = 0)
    {
        $data['title'] = 'Detail Akun';

        $builder = $this->db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();

        $data['detail'] = $query->getRow();

        if (empty($data['detail'])) {
            return redirect()->to(base_url('admin/akun'));
        }

        return view('admin/detailakun', $data);
    }

    public function hapusakun($id)
    {
        $this->usersModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/akun');
    }

    public function ubahroleakun($id)
    {
        $this->roleModel->save([
            'user_id' => $id,
            'group_id' => $this->request->getVar('group_id')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin/akun/' . $id);
    }

    public function wisata()
    {
        $currentPage = $this->request->getVar('page_wisata') ? $this->request->getVar('page_wisata') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $this->wisataModel->search($keyword);
        } else {
            $orang = $this->wisataModel;
        }

        $data = [
            'title' => 'Daftar Paket Wisata',
            // 'wisata' => $this->wisataModel->getWisata()
            'wisata' => $orang->paginate(2, 'wisata'),
            'pager' => $this->wisataModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/wisata', $data);
    }

    public function detailwisata($slug)
    {
        $data = [
            'title' => 'Detail Paket Wisata',
            'wisata' => $this->wisataModel->getWisata($slug)
        ];

        if (empty($data['wisata'])) {
            return redirect()->to(base_url('admin/wisata'));
        }

        return view('admin/detailwisata', $data);
    }

    public function editwisata($slug)
    {
        $data = [
            'title' => 'Edit Paket Wisata',
            'validation' => \Config\Services::validation(),
            'wisata' => $this->wisataModel->getWisata($slug)
        ];
        return view('admin/editwisata', $data);
    }

    public function updatewisata($id_paket)
    {
        // cek judul
        $wisataLama = $this->wisataModel->getWisata($this->request->getVar('slug'));
        if ($wisataLama['paket'] == $this->request->getVar('paket')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[wisata.paket]';
        }

        if (!$this->validate([
            'paket' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Paket harus diisi',
                    'is_unique' => 'Paket sudah ada'
                ]
            ],
            'destinasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Destinasi harus diisi'
                ]
            ],
            'fasilitas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fasilitas harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga harus diisi'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar. Maksimal 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            return redirect()->to('/admin/editwisata/' . $this->request->getVar('slug'))->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');

        // cek gambar, apakah tetap gambar lama
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            // generate nama sampul random
            // $namaSampul = $fileSampul->getRandomName();
            // ambil nama file
            $namaSampul = $fileSampul->getName();
            // pindahkan file ke folder img
            $fileSampul->move('img', $namaSampul);
            // hapus file lama tapi jangan hapus file default
            if ($this->request->getVar('sampulLama') != 'default.jpg') {
                unlink('img/' . $this->request->getVar('sampulLama'));
            }
        }

        $slug = url_title($this->request->getVar('paket'), '-', true);
        $this->wisataModel->save([
            'id_paket' => $id_paket,
            'paket' => $this->request->getVar('paket'),
            'slug' => $slug,
            'destinasi' => $this->request->getVar('destinasi'),
            'fasilitas' => $this->request->getVar('fasilitas'),
            'harga' => $this->request->getVar('harga'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin/wisata/' . $slug);
    }

    public function tambahwisata()
    {
        $data = [
            'title' => 'Tambah Paket Wisata',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/tambahwisata', $data);
    }

    public function savewisata()
    {
        //validasi input
        if (!$this->validate([
            'paket' => [
                'rules' => 'required|is_unique[wisata.paket]',
                'errors' => [
                    'required' => 'Paket harus diisi',
                    'is_unique' => 'Paket sudah ada'
                ]
            ],
            'destinasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Destinasi harus diisi'
                ]
            ],
            'fasilitas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fasilitas harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga harus diisi'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar. Maksimal 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/tambahwisata')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/tambahwisata')->withInput();
        }

        // ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        // apakah tidak ada gambar yang diupload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.jpg';
        } else {
            // generate nama sampul random
            // $namaSampul = $fileSampul->getRandomName();
            // ambil nama file
            $namaSampul = $fileSampul->getName();
            // pindahkan file ke folder img
            $fileSampul->move('img', $namaSampul);
        }

        $slug = url_title($this->request->getVar('paket'), '-', true);
        $this->wisataModel->save([
            'paket' => $this->request->getVar('paket'),
            'slug' => $slug,
            'destinasi' => $this->request->getVar('destinasi'),
            'fasilitas' => $this->request->getVar('fasilitas'),
            'harga' => $this->request->getVar('harga'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/wisata');
    }

    public function hapuswisata($id_paket)
    {
        // cari gambar berdasarkan id
        $wisata = $this->wisataModel->find($id_paket);

        // cek jika file gambarnya default.jpg
        if ($wisata['sampul'] != 'default.jpg') {
            // hapus gambar
            unlink('img/' . $wisata['sampul']);
        }

        $this->wisataModel->delete($id_paket);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/wisata');
    }

    public function profil()
    {
        $data['title'] = 'Profil Akun';

        return view('admin/profil', $data);
    }

    public function editprofil()
    {
        $data = [
            'title' => 'Edit Profil',
            'validation' => \Config\Services::validation(),
            'user' => $this->usersModel->getUser()
        ];
        return view('admin/editprofil', $data);
    }

    public function updateprofil()
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
            return redirect()->to('/admin/editprofil/' . user_id())->withInput();
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

        return redirect()->to('/admin/profil');
    }
}
