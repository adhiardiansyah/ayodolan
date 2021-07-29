<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main id="main">
    <style>
        #header {
            background: rgba(40, 40, 40, 0.9);
        }
    </style>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="/">Home</a></li>
                <li>About</li>
            </ol>
            <h2>About Us</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="about mb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 m-2">
                    <center>
                        <img style="width: 50%" src="/img/logo.png" alt="">
                    </center>
                </div>
                <div class="col-sm-6 m-2 mb-0">
                    <h4 class="text-center"><strong>ayodolan - adalah sebuah startup di bidang wisata yang berdiri tahun 2020. Kami menawarkan pelayanan wisata dengan harga merakyat fasilitas konglomerat</strong></h4>
                    <p class="border border-dark border-bottom border-2 mt-4 mb-4 mx-auto" style="width: 50%;"></p>
                    <p class="text-center">
                        Kami berkolaborasi dengan beberapa pihak ketiga yang pelayanannya dijamin berkualitas dan tidak perlu ditanyakan lagi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="mb-0 pb-0 mt-0 pt-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 9"></button>
            </div>
            <div class="carousel-inner bg-dark p-0 m-0">
                <div class="carousel-item active">
                    <img src="/img/carousel-1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/img/carousel-2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/img/carousel-3.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/img/carousel-4.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/img/carousel-5.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/img/carousel-6.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/img/carousel-7.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/img/carousel-8.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/img/carousel-9.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/img/carousel-10.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

</main><!-- End #main -->
<?= $this->endSection(); ?>