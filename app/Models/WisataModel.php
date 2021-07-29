<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'id_paket';
    protected $allowedFields = ['id_paket', 'paket', 'slug', 'destinasi', 'fasilitas', 'harga', 'sampul'];

    public function getWisata($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('wisata')->like('paket', $keyword);
    }
}
