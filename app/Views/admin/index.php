<?= $this->extend('layout-admin/template'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Pemesanan</th>
                        <th scope="col">Username</th>
                        <th scope="col">Paket</th>
                        <th scope="col">Tanggal Berangkat</th>
                        <th scope="col">Jumlah Orang</th>
                        <th scope="col">Total Pemesanan</th>
                        <th scope="col">Status Pemesanan</th>
                        <th scope="col">Bukti Pembayaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dashboard as $d) : ?>
                        <tr>
                            <td><?= $d['id_pemesanan']; ?></td>
                            <td><?= $d['username']; ?></td>
                            <td><?= $d['paket']; ?></td>
                            <td><?= $d['tgl_berangkat']; ?></td>
                            <td><?= $d['jumlah_orang']; ?></td>
                            <td>Rp<?= $d['jumlah_orang'] * $d['harga']; ?></td>
                            <td><?= $d['status_pemesanan']; ?></td>
                            <td><img src="<?= base_url('img/bukti_bayar'); ?>/<?= $d['bukti_bayar']; ?>" alt="" width="200px"></td>
                            <td>
                                <a href="<?= base_url('admin/editpesan'); ?>/<?= $d['id_pemesanan']; ?>" class="btn btn-warning">Edit</a>
                                <form action="<?= base_url('admin/hapuspesan'); ?>/<?= $d['id_pemesanan']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="bukti_bayarLama" value="<?= $d['bukti_bayar']; ?>">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('pemesanan', 'pagination'); ?>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>