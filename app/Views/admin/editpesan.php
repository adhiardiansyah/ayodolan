<?= $this->extend('layout-admin/template'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Pemesanan</h1>

    <div class="row">
        <div class="col-8">
            <form action="<?= base_url('admin/updatepesan'); ?>/<?= $pemesanan['id_pemesanan']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="paket" class="col-sm-2 col-form-label">Paket</label>
                    <div class="col-sm-10">
                        <!-- <select name="paket" class="form-control">
                            <option value="<?= (old('paket')) ? old('paket') : $pemesanan['paket'] ?>" selected="<?= (old('paket')) ? old('paket') : $pemesanan['paket'] ?>"><?= (old('paket')) ? old('paket') : $pemesanan['paket'] ?></option>
                            <?php foreach ($wisata as $w) : ?>
                                <option value="<?= $w['paket']; ?>"><?= $w['paket']; ?></option>
                            <?php endforeach; ?>
                        </select> -->
                        <?php
                        $options = [];
                        foreach ($wisata as $w) :
                            // array_push($options, $w['paket']);
                            $options[$w['paket']] = $w['paket'];
                        endforeach;
                        $selected = (old('paket')) ? old('paket') : $pemesanan['paket'];

                        echo form_dropdown('paket', $options, $selected, 'class="form-control"');
                        ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tgl_berangkat" class="col-sm-2 col-form-label">Tanggal Berangkat</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('tgl_berangkat')) ? 'is-invalid' : ''; ?>" id="tgl_berangkat" name="tgl_berangkat" value="<?= (old('tgl_berangkat')) ? old('tgl_berangkat') : $pemesanan['tgl_berangkat'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('tgl_berangkat'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jumlah_orang" class="col-sm-2 col-form-label">Jumlah Orang</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control <?= ($validation->hasError('jumlah_orang')) ? 'is-invalid' : ''; ?>" id="jumlah_orang" name="jumlah_orang" value="<?= (old('jumlah_orang')) ? old('jumlah_orang') : $pemesanan['jumlah_orang'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('jumlah_orang'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status_pemesanan" class="col-sm-2 col-form-label">Status Pemesanan</label>
                    <div class="col-sm-10">
                        <?php
                        $options = [
                            'BELUM BAYAR'  => 'BELUM BAYAR',
                            'SUDAH BAYAR'    => 'SUDAH BAYAR',
                        ];

                        echo form_dropdown('status_pemesanan', $options, (old('status_pemesanan')) ? old('status_pemesanan') : $pemesanan['status_pemesanan'], 'class="form-control"');
                        ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>