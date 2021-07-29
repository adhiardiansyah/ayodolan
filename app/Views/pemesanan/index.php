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
            <li>Pemesanan</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details pricing">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="portfolio-info shadow p-4 mb-5 bg-body rounded" style="background-color: white;">
                    <h3>Booking Paket Wisata</h3>
                    <ul>
                        <form action="<?= base_url('pemesanan/save'); ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="paket" class="col-sm-2 col-form-label">Paket</label>
                                <div class="col-sm-10">
                                    <select name="paket" class="form-control">
                                        <?php foreach ($wisata as $w) : ?>
                                            <option value="<?= $w['paket']; ?>"><?= $w['paket']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl_berangkat" class="col-sm-2 col-form-label">Tanggal Berangkat</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control <?= ($validation->hasError('tgl_berangkat')) ? 'is-invalid' : ''; ?>" id="tgl_berangkat" name="tgl_berangkat" value="<?= old('tgl_berangkat'); ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('tgl_berangkat'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jumlah_orang" class="col-sm-2 col-form-label">Jumlah Orang</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control <?= ($validation->hasError('jumlah_orang')) ? 'is-invalid' : ''; ?>" id="jumlah_orang" name="jumlah_orang" value="<?= old('jumlah_orang'); ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('jumlah_orang'); ?>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="form-control <?= ($validation->hasError('status_pemesanan')) ? 'is-invalid' : ''; ?>" id="status_pemesanan" name="status_pemesanan" value="BELUM BAYAR">
                            <button type="submit" class="btn btn-primary">Booking</button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->
<?= $this->endSection(); ?>