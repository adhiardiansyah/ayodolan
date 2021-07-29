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
            <li>Pembayaran</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details pricing">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="portfolio-info shadow p-4 mb-5 bg-body rounded" style="background-color: white;">
                    <h2 class="my-3">Bayar Pemesanan</h2>
                    Untuk pembayaran silahkan transfer ke rekenening :
                    <br>
                    BCA 3930696764 <br> a.n Arrico Handyanto
                    <br>
                    Setelah itu upload bukti pembayaran di bawah ini.
                    <br><br>
                    <form action="<?= base_url('pembayaran/update'); ?>/<?= $pemesanan['id_pemesanan']; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="bukti_bayarLama" value="<?= $pemesanan['bukti_bayar']; ?>">
                        <div class="row mb-3">
                            <label for="bukti_bayar" class="col-sm-2 col-form-label">Upload Bukti Pembayaran</label>
                            <div class="col-sm-2">
                                <img src="<?= base_url('img/bukti_bayar'); ?>/<?= $pemesanan['bukti_bayar']; ?>" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control <?= ($validation->hasError('bukti_bayar')) ? 'is-invalid' : ''; ?>" id="bukti_bayar" name="bukti_bayar" onchange="previewImage()">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('bukti_bayar'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->
<?= $this->endSection(); ?>