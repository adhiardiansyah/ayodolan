<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $allowedFields = ['id_user', 'paket', 'tgl_berangkat', 'jumlah_orang', 'status_pemesanan', 'bukti_bayar'];

    public function getPemesanan($id_pemesanan = false)
    {
        if ($id_pemesanan == false) {
            return $this->findAll();
        }
        return $this->where(['id_pemesanan' => $id_pemesanan])->first();
    }

    public function getPemesananBySession()
    {
        return $this->where(['id_user' => user_id()])->findAll();
    }

    public function search($keyword)
    {
        return $this->table('pemesanan')->like('pemesanan.paket', $keyword)->orLike('tgl_berangkat', $keyword)->orLike('jumlah_orang', $keyword)->orLike('status_pemesanan', $keyword)->orLike('id_pemesanan', $keyword);
    }

    public function search2($keyword)
    {
        return $this->table('pemesanan')->like('pemesanan.paket', $keyword)->orLike('tgl_berangkat', $keyword)->orLike('jumlah_orang', $keyword)->orLike('status_pemesanan', $keyword)->orLike('id_pemesanan', $keyword)->orLike('username', $keyword);
    }

    public function getPemesananCetak($id_pemesanan = false)
    {
        if ($id_pemesanan == false) {
            return $this->findAll();
        }
        return $this->where(['id_pemesanan' => $id_pemesanan])->join('wisata', 'wisata.paket = pemesanan.paket')->first();
    }
}
