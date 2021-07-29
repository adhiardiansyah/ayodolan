<?= $this->extend('layout-admin/template'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Paket Wisata</h1>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('img'); ?>/<?= $wisata['sampul']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $wisata['paket']; ?></h5>
                    <p class="card-text"><b>Destinasi : </b><?= $wisata['destinasi']; ?></p>
                    <p class="card-text"><b>Fasilitas : </b><?= $wisata['fasilitas']; ?></p>
                    <p class="card-text"><b>Harga : </b>Rp<?= $wisata['harga']; ?></p>
                    <a href="<?= base_url('admin/editwisata'); ?>/<?= $wisata['slug']; ?>" class="btn btn-warning">Edit</a>

                    <form action="<?= base_url('admin/hapuswisata'); ?>/<?= $wisata['id_paket']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                    </form>
                    <br><br>
                    <a href="<?= base_url('admin/wisata'); ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>