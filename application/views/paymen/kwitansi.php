    <!-- Begin page -->
    <style>
        /* with transform */
        .vertikal {
            writing-mode: vertical-rl;
            height: 4em;
            color: grey;
            font-size: 10px;
        }
    </style>

    <?php
    $idtransaksi = "7856785";
    $waktupembayaran = "12 Maret 2022";
    $bankva = "bri";
    $nama = "Mohamad Riduwan";
    $kelas = "7A";
    $biaya = "3.500";
    $nilai = "100000";
    ?>
    <!-- Header ends -->

    <div class="main-container container">
        <div class="card shadow-sm mb-4">
            <table>
                <tr>
                    <td class="vertikal">MasamaPay</td>
                    <div class="card-body">
                        <td rowspan="7">
                            <div class="row">
                                <center>
                                    <div class="col-auto mb-4">
                                        <h5><img style="width: 35px;" src="<?= base_url('assets/'); ?>img/lembaga/logo.jpg"> MasamaPAY</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div>
                                            <h6 style="color: green;">Pembayaran Berhasil</h6>
                                            <h3><?= rupiah($nilai); ?></h3>
                                        </div>
                                </center>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="main-container container">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col align-self-center ps-0">
                                                        <p style="font-size: 10px;"><b>Transaksi Tanggal:</b>
                                                            <br><i>18 Oktober 2023, 16:25:59 WIB</i></br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <!-- amount breakdown -->
                                            <div class="row mb-3">

                                                <div class="col">
                                                    <p style="font-size: 11px;">Id Transaksi</p>
                                                </div>
                                                <div class="col-auto text-end">
                                                    <p style="font-size: 11px"><b><?= $idtransaksi; ?></b></p>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col">
                                                    <p style="font-size: 11px;">Waktu Pembayaran</p>
                                                </div>
                                                <div class="col-auto text-end">
                                                    <p style="font-size: 11px"><b><?= $waktupembayaran; ?></b></p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <p style="font-size: 11px;">Bank VA</p>
                                                </div>
                                                <div class="col-auto text-end">
                                                    <p style="font-size: 11px"><b><?= strtoupper($bankva); ?></b></p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <p style="font-size: 11px;">Nama Siswa</p>
                                                </div>
                                                <div class="col-auto text-end">
                                                    <p style="font-size: 11px"><b><?= $nama; ?></b></p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <p style="font-size: 11px;">Kelas</p>
                                                </div>
                                                <div class="col-auto text-end">
                                                    <p style="font-size: 11px"><b><?= $kelas; ?></b></b></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <p style="font-size: 12px;">Jumlah</p>
                                                </div>
                                                <div class="col-auto text-end">
                                                    <p style="font-size: 12px"><b><?= rupiah($nilai); ?></b></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p style="font-size: 12px;">Biaya Admin</p>
                                                </div>
                                                <div class="col-auto text-end">
                                                    <p style="font-size: 12px"><b><?= $biaya; ?></b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="vertikal">MasamaPay</td>
                </tr>
                <tr>
                    <td class="vertikal">MasamaPay</td>
                    <td class="vertikal">MasamaPay</td>
                </tr>
                <tr>
                    <td class="vertikal">MasamaPay</td>
                    <td class="vertikal">MasamaPay</td>
                </tr>
                <tr>
                    <td class="vertikal">MasamaPay</td>
                    <td class="vertikal">MasamaPay</td>
                </tr>
                <tr>
                    <td class="vertikal">MasamaPay</td>
                    <td class="vertikal">MasamaPay</td>
                </tr>
                <tr>
                    <td class="vertikal">MasamaPay</td>
                    <td class="vertikal">MasamaPay</td>
                </tr>
                <tr>
                    <td class="vertikal">MasamaPay</td>
                    <td class="vertikal">MasamaPay</td>
                </tr>
        </div>
    </div>
    </table>
    </div>
    <!-- main page content ends -->
    <center>
        <div class="col-10 ">
            <a class="btn btn-primary" href="<?= base_url(); ?>paymen">Kembali Ke Home</a>

        </div>
    </center>
    </main>
    <!-- Page ends-->