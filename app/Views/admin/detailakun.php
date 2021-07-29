<?= $this->extend('layout-admin/template'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Akun</h1>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-lg">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('img/' . $detail->user_image); ?>" class="card-img-top" alt="<?= $detail->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= $detail->username; ?></h4>
                                </li>
                                <?php if ($detail->fullname) : ?>
                                    <li class="list-group-item"><?= $detail->fullname; ?></li>
                                <?php endif; ?>
                                <li class="list-group-item"><?= $detail->email; ?></li>
                                <li class="list-group-item">
                                    <span class="badge badge-<?= ($detail->name == 'admin' ? 'success' : 'warning'); ?>"><?= $detail->name; ?></span> |
                                    <form action="<?= base_url('admin/ubahroleakun'); ?>/<?= $detail->userid; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <?php if ($detail->name == "admin") : ?>
                                            <input type="hidden" name="group_id" value=2>
                                            <small><button type="submit" class="ubahrole">ubah jadi user</button></small>
                                        <?php endif; ?>
                                        <?php if ($detail->name == "user") : ?>
                                            <input type="hidden" name="group_id" value=1>
                                            <small><button type="submit" class="ubahrole">ubah jadi admin</button></small>
                                        <?php endif; ?>
                                    </form>
                                </li>
                                <li class="list-group-item">

                                    <form action="<?= base_url('admin/hapusakun'); ?>/<?= $detail->userid; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                                    </form>
                                    <a href="<?= base_url('admin/akun'); ?>" class="btn btn-primary">Kembali</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>