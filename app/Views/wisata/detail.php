<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    #header {
        background: rgba(40, 40, 40, 0.9);
    }
</style>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol class="pt-2">
            <li><a href="/">Home</a></li>
            <li>Detail Paket Wisata <?= $wisata['paket']; ?></li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <img src="<?= base_url('img'); ?>/<?= $wisata['sampul']; ?>" alt="" class="card-img-top rounded-0 mb-2">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3><?= $wisata['paket']; ?></h3>
                    <ul>
                        <li><strong>Destinasi : </strong><?= $wisata['destinasi']; ?></li>
                        <li><strong>Fasilitas : </strong><?= $wisata['fasilitas']; ?></li>
                        <li><strong>Harga : </strong>Rp<?= $wisata['harga']; ?></li>
                        <a href="<?= base_url('wisata'); ?>" class="btn btn-primary mt-4">Kembali</a>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->

<?= $this->endSection(); ?>