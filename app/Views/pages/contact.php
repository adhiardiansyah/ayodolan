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
            <li>Contact</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<section id="contact" class="text-white pt-0 pb-0" style="background-color: #000000;">
    <div class="container-fluid">
        <div class="row">
            <div class="col p-4 m-4">
                <div class="container" style="width:90%;">
                    <div class="row">
                        <div class="col">
                            <center>
                                <h3 class="mb-4">Contact</h3>
                            </center>
                            <form class="whatsapp-form needs-validation" novalidate>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="nama">Nama Lengkap :</label>
                                        <input type="text" class="validate form-control" id="nama" name="nama" placeholder="Nama Lengkap Anda" required>
                                        <div class="valid-feedback">
                                            Nama sudah dimasukkan.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="email">Email :</label>
                                        <input type="text" class="validate form-control" id="email" name="email" placeholder="Alamat Email Anda" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="subjek">Subjek :</label>
                                    <input type="text" class="validate form-control" id="subjek" name="subjek" placeholder="Masukkan Subjek Anda" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pesan">Pesan :</label>
                                    <textarea class="form-control" id="pesan" name="pesan" rows="6" placeholder="Masukkan pesan Anda"></textarea>
                                </div>

                                <a class="send_form bi bi-whatsapp btn btn-outline-success" href="javascript:void" type="submit" title="Send to Whatsapp"> Send to Whatsapp</a>
                                <div class="mt-4" id="text-info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ps-0 pe-0" style="float:right;">
                <div class="card bg-dark text-white rounded-0 border-0">
                    <img src="/img/contact.jpg" class="card-img">
                    <div class="card-img-overlay">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="position-absolute top-50 start-50 translate-middle" style="width: 80%;">
                                        <center>
                                            <p class="fst-italic fs-5">"Some of our finest work comes through service to others."</p>
                                            <p class="text-muted">Beberapa karya terbaik kami datang melalui pelayanan kepada orang lain.</p>
                                            <p>~ Gordon B. Hinckley</p>
                                        </center>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- End Cta Section -->
<?= $this->endSection(); ?>