<style>
    td,
    th {
        border: 1px solid #000000;
        text-align: center;
    }

    h1 {
        text-align: center;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Kuitansi Pembayaran</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table style="border-collapse: collapse; width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Paket</th>
                        <th scope="col">Tanggal Berangkat</th>
                        <th scope="col">Jumlah Orang</th>
                        <th scope="col">Total Pemesanan</th>
                        <th scope="col">Status Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= user()->username; ?></td>
                        <td><?= $pemesanan['paket']; ?></td>
                        <td><?= $pemesanan['tgl_berangkat']; ?></td>
                        <td><?= $pemesanan['jumlah_orang']; ?></td>
                        <td>Rp<?= $pemesanan['jumlah_orang'] * $pemesanan['harga']; ?></td>
                        <td><?= $pemesanan['status_pemesanan'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>