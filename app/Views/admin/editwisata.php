<?= $this->extend('layout-admin/template'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Paket Wisata</h1>

    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('admin/updatewisata'); ?>/<?= $wisata['id_paket']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $wisata['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $wisata['sampul']; ?>">
                <div class="row mb-3">
                    <label for="paket" class="col-sm-2 col-form-label">Paket</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('paket')) ? 'is-invalid' : ''; ?>" id="paket" name="paket" autofocus value="<?= (old('paket')) ? old('paket') : $wisata['paket'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('paket'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="destinasi" class="col-sm-2 col-form-label">Destinasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('destinasi')) ? 'is-invalid' : ''; ?>" id="destinasi" name="destinasi" value="<?= (old('destinasi')) ? old('destinasi') : $wisata['destinasi'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('destinasi'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fasilitas" class="col-sm-2 col-form-label">Fasilitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('fasilitas')) ? 'is-invalid' : ''; ?>" id="fasilitas" name="fasilitas" value="<?= (old('fasilitas')) ? old('fasilitas') : $wisata['fasilitas'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('fasilitas'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') : $wisata['harga'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('harga'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url('img'); ?>/<?= $wisata['sampul']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('sampul'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>