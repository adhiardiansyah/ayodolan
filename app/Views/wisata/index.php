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
            <li>Daftar Paket Wisata</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<section id="pricing" class="pricing mt-0 pt-3 pb-3">
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-4" style="margin-left: 20px; margin-right:20px;">
            <?php $i = 1 + (2 * ($currentPage - 1)); ?>
            <?php foreach ($wisata as $w) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="box recommended pt-0 mb-4" style="padding-left: 0px; padding-right:0px;">
                        <img src="<?= base_url('img'); ?>/<?= $w['sampul']; ?>" alt="" class="card-img-top rounded-0 mb-2" style="height: 200px;">
                        <h3><?= $w['paket']; ?></h3>
                        <h5 style="color: #009961;; font-size: 25px;"><sup>Rp</sup><?= $w['harga']; ?><sub><span class="text-muted"> / pax</span></sub></h5>
                        <div class="btn-wrap">
                            <a href="<?= base_url('wisata'); ?>/<?= $w['slug']; ?>" class="btn-buy">Lihat Detail Destinasi</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="mt-4">
            <?= $pager->links('wisata', 'pagination'); ?>
        </div>
    </div>
</section><!-- End Pricing Section -->
<?= $this->endSection(); ?>