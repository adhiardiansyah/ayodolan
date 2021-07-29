<?php

namespace App\Controllers;

use \App\Models\WisataModel;

class Wisata extends BaseController
{
    protected $wisataModel;
    public function __construct()
    {
        $this->wisataModel = new WisataModel();
    }

    public function index()
    {
        // $wisata = $this->wisataModel->findAll();

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
            'wisata' => $orang->paginate(3, 'wisata'),
            'pager' => $this->wisataModel->pager,
            'currentPage' => $currentPage
        ];

        return view('wisata/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Paket Wisata',
            'wisata' => $this->wisataModel->getWisata($slug)
        ];

        if (empty($data['wisata'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Paket wisata ' . $slug . ' tidak ditemukan');
        }

        return view('wisata/detail', $data);
    }
}
