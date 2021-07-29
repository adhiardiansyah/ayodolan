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
                        <th scope="col">Status Pemesanan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tidak ada data.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>