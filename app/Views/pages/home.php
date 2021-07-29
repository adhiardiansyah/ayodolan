<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <h1 class="bi bi-cursor-fill">ayodolan - Agen Wisata Perjalanan Anda</h1>
                <a class="text-white">Dengan dukungan Tour Guide kami yang berpengalaman sekaligus ditunjang dengan Transportasi kami yang sangat nyaman, memberikan pengalaman bepergian yang tak terlupakan.</a>
                <a class="play-btn mt-4 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-transparent border-0" style="width: 1280px;">
                            <div class="modal-body">
                                <iframe src="https://www.youtube.com/embed/uV9BygbL1II" width="100%" height="250px" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container">

        <div class="row" style="margin-left: 20px; margin-right:20px;">
            <div class="col-lg-4 col-md-6">
                <div class="box recommended pt-0 mb-4" style="padding-left: 0px; padding-right:0px;">
                    <img src="img/place.jpg" class="card-img-top rounded-0 mb-3">
                    <div class="alert alert-info w-50 p-1 border-0 mx-auto">
                        <?php for ($i = 1; $i <= 5; $i++) {
                            echo "<a class='bi bi-star-fill'> </a>";
                        } ?>
                    </div>
                    <h3>Comfortable Stay</h3>
                    <ul class="mb-0">
                        <li>Kamar Tidur</li>
                        <li>Kamar Mandi</li>
                        <li>Ruang Makan Bersama</li>
                        <li>Ruang Meeting</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="/pemesanan" class="btn-buy">Booking Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box recommended pt-0 mb-4" style="padding-left: 0px; padding-right:0px;">
                    <img src="img/bus-1.jpg" class="card-img-top rounded-0 mb-3">
                    <div class="alert alert-info w-50 p-1 border-0 mx-auto">
                        <?php for ($i = 1; $i <= 4; $i++) {
                            echo "<a class='bi bi-star-fill'> </a>";
                        } ?>
                        <?php for ($i = 1; $i <= 1; $i++) {
                            echo "<a class='bi bi-star'></a>";
                        } ?>
                    </div>
                    <h3>Exclusive Bus</h3>
                    <ul class="mb-0">
                        <li>SHD Bus</li>
                        <li>2x Makan Siang</li>
                        <li>Ruang Tempat Duduk yang Lega</li>
                        <li>Movie</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="/pemesanan" class="btn-buy">Booking Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box recommended pt-0 mb-4" style="padding-left: 0px; padding-right:0px;">
                    <img src="img/tourguide.jpg" class="card-img-top rounded-0 mb-3">
                    <div class="alert alert-info w-50 p-1 border-0 mx-auto">
                        <?php for ($i = 1; $i <= 4; $i++) {
                            echo "<a class='bi bi-star-fill'> </a>";
                        } ?>
                        <?php for ($i = 1; $i <= 1; $i++) {
                            echo "<a class='bi bi-star'></a>";
                        } ?>
                    </div>
                    <h3>Experienced Tour Guide</h3>
                    <ul class="mb-0">
                        <li>Multi Language</li>
                        <li>Locals</li>
                        <li>Help Anytime</li>
                        <li>Gracious Service</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="/pemesanan" class="btn-buy">Booking Sekarang</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Pricing Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container">

        <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
                <h3>Pergi Menjelajah Sekarang!</h3>
                <p>Gandeng keluarga terdekat anda, dan temukan beragam cerita indah bersama mereka.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="/pemesanan">Booking Sekarang</a>
            </div>
        </div>

    </div>
</section><!-- End Cta Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container">

        <div class="text-center title" style="margin-left: 20px; margin-right:20px;">
            <h3>Since 2017</h3>
            <p>Menjelajah dengan ratusan keluarga ke seluruh penjuru negeri</p>
        </div>

        <div class="row counters position-relative" style="margin-left: 20px; margin-right:20px;">

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="287" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Trips</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="17" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
            </div>

        </div>

    </div>
</section><!-- End Counts Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients" style="margin-left: 20px; margin-right:20px;">
    <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="img/scania.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="img/traveloka.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="img/reddoorz.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="img/wonderful.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="img/agramas.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="img/rosalia.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="img/bluebird.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="img/catering.png" class="img-fluid" alt="">
                </div>
            </div>

        </div>

    </div>

    <!-- Panggil Preloader -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</section><!-- End Clients Section -->
<?= $this->endSection(); ?>