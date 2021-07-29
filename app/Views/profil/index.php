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
            <li>Profil</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->

<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profil Akun</h1>

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
                        <img src="<?= base_url('img/' . user()->user_image); ?>" class="card-img-top" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= user()->username; ?></h4>
                                </li>
                                <?php if (user()->fullname) : ?>
                                    <li class="list-group-item"><?= user()->fullname; ?></li>
                                <?php endif; ?>
                                <li class="list-group-item"><?= user()->email; ?></li>
                                <li class="list-group-item">
                                    <small><a href="<?= base_url('profil/edit'); ?>">Edit Profil</a></small>
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