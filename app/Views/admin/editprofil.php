<?= $this->extend('layout-admin/template'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profil</h1>

    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('admin/updateprofil'); ?>/<?= user_id() ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="user_imageLama" value="<?= $user['user_image']; ?>">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= (old('email')) ? old('email') : $user['email'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= (old('username')) ? old('username') : $user['username'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?>" id="fullname" name="fullname" value="<?= (old('fullname')) ? old('fullname') : $user['fullname'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('fullname'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="user_image" class="col-sm-2 col-form-label">Foto Profil</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url('img'); ?>/<?= $user['user_image']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control <?= ($validation->hasError('user_image')) ? 'is-invalid' : ''; ?>" id="user_image" name="user_image" onchange="previewProfil()">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('user_image'); ?>
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