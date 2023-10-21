    <!-- Begin page -->
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
    </div>
    <!-- main page content -->
    <div class="main-container container">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <div class="row">
                    <center>
                        <br>
                        <div class="col-auto">
                            <h5><img style="width: 35px;" src="<?= base_url('assets/'); ?>img/lembaga/logo.jpg"> MasamaPAY</h5>
                        </div>
                        <hr>
                        <div class="col-auto">
                            <div> <img style="width: 35px;" src="<?= base_url('assets/'); ?>img/mobile/centang.png"></div>
                            <br>
                            <h5>Pembayaran Success</h5>
                            <h3><?= rupiah($nilai); ?></h3>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <!-- amount breakdown -->
                    <div class="row mb-3">

                        <div class="col">
                            <p style="font-size: 11px;" class="text-color-theme">Id Transaksi</p>
                        </div>
                        <div class="col-auto text-end">
                            <p style="font-size: 11px"><b><?= $idtransaksi; ?></b></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <p style="font-size: 11px;" class="text-color-theme">Waktu Pembayaran</p>
                        </div>
                        <div class="col-auto text-end">
                            <p style="font-size: 11px"><b><?= $waktupembayaran; ?></b></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <p style="font-size: 11px;" class="text-color-theme">Bank VA</p>
                        </div>
                        <div class="col-auto text-end">
                            <p style="font-size: 11px"><b><?= strtoupper($bankva); ?></b></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <p style="font-size: 11px;" class="text-color-theme">Nama Siswa</p>
                        </div>
                        <div class="col-auto text-end">
                            <p style="font-size: 11px"><b><?= $nama; ?></b></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <p style="font-size: 11px;" class="text-color-theme">Kelas</p>
                        </div>
                        <div class="col-auto text-end">
                            <p style="font-size: 11px"><b><?= $kelas; ?></b></b></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col">
                            <p style="font-size: 12px;" class="text-color-theme">Jumlah</p>
                        </div>
                        <div class="col-auto text-end">
                            <p style="font-size: 12px"><b><?= rupiah($nilai); ?></b></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <p style="font-size: 12px;" class="text-color-theme">Biaya Admin</p>
                        </div>
                        <div class="col-auto text-end">
                            <p style="font-size: 12px"><b><?= $biaya; ?></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
        <div class="col-10 ">
            <a class="btn btn-primary" href="<?= base_url(); ?>paymen">Kembali Ke Home</a>

        </div>
    </center>
    <br>
    <!-- main page content ends -->
    </main>
    <!-- Page ends-->