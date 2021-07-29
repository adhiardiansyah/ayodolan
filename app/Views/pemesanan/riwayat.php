<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    #header {
        background: rgba(40, 40, 40, 0.9);
    }
</style>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="background-color: white;">
    <div class="container">

        <ol class="pt-2">
            <li><a href="/">Home</a></li>
            <li>Riwayat Pemesanan</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Riwayat Pemesanan</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
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
                    <?php $i = 1 + (2 * ($currentPage - 1)); ?>
                    <?php foreach ($pemesanan as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p['paket']; ?></td>
                            <td><?= $p['tgl_berangkat']; ?></td>
                            <td><?= $p['jumlah_orang']; ?></td>
                            <td>Rp<?= $p['jumlah_orang'] * $p['harga']; ?></td>
                            <td><?= $p['status_pemesanan'] ?></td>
                            <td><img src="<?= base_url('img/bukti_bayar'); ?>/<?= $p['bukti_bayar']; ?>" alt="" width="200px"></td>
                            <td>
                                <a href="<?= base_url('pemesanan/edit'); ?>/<?= $p['id_pemesanan']; ?>" class="btn btn-warning">Edit</a>
                                <form action="<?= base_url('pemesanan/hapus'); ?>/<?= $p['id_pemesanan']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="bukti_bayarLama" value="<?= $p['bukti_bayar']; ?>">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                                </form>
                                <br>
                                <a href="<?= base_url('pembayaran/edit'); ?>/<?= $p['id_pemesanan']; ?>" class="btn btn-success">Bayar</a>
                                <a href="<?= base_url('pembayaran/cetak'); ?>/<?= $p['id_pemesanan']; ?>" class="btn btn-primary" target="_blank">Cetak</a>
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