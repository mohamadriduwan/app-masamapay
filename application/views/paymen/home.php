<!-- main page content -->
<div class="main-container container">
    <!-- wallet balance -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-44 rounded-10">
                        <?php
                        $filejpg = base_url('assets/') . 'assets/img/profile/' . $user['image'];
                        if (file_exists($filejpg)) {
                            $saya = $user['image'];
                        } else {
                            $saya = "default.jpg";
                        }
                        ?>
                        <img src="<?= base_url('assets/'); ?>/img/profile/<?= $saya; ?>" alt="">
                    </figure>
                </div>
                <div class="col px-0 align-self-center">
                    <p class="mb-0 text-color-theme"><?= $user['name']; ?></p>
                    <p class="text-muted size-12">Kelas <?= $user['kelas']; ?></p>
                </div>
                <!-- <div class="col-auto">
                            <a href="addmoney.html" class="btn btn-44 btn-light shadow-sm">
                                <i class="bi bi-plus-circle"></i>
                            </a>
                            <a href="withdraw.html" class="btn btn-44 btn-default shadow-sm ms-1">
                                <i class="bi bi-arrow-down-circle"></i>
                            </a>
                        </div> -->
            </div>
        </div>
        <?php
        function rupiah($angka)
        {
            $hasil_rupiah = "Rp. " . number_format($angka, 0, ',', '.');
            return $hasil_rupiah;
        }
        ?>
        <div class="card theme-bg text-white border-0 text-center">
            <div class="card-body">
                <h1 class="display-1 my-2"><?php if (!isset($tunggakan['total'])) {
                                                echo "LUNAS";
                                            } else if ($tunggakan['total'] > 0) {
                                                echo rupiah($tunggakan['total']);
                                            } else {
                                                echo "LUNAS";
                                            }; ?></h1>

                <p class="text-muted mb-2">Kekurangan <br>(update <?php if (isset($tunggakan['total'])) {
                                                                        echo date('d M Y H:m', strtotime($tunggakan['date']));
                                                                    } else {
                                                                        echo date('Y-m-d H:m');
                                                                    }; ?>) </p>
            </div>
        </div>
        <br>
        <div class="main-container container">
            <div class="card shadow-sm mb-4">
                <center>
                    <?php if (!isset($tunggakan['total'])) : ?>
                        <button class="btn btn-default btn-lg shadow-sm w-100" disabled>
                            Bayar
                        </button>
                    <?php elseif ($tunggakan['total'] > 0) : ?>
                        <button class="btn btn-default btn-lg shadow-sm w-100" onClick="document.location.href='<?= base_url(''); ?>paymen/bayar'">
                            Bayar
                        </button>
                    <?php else : ?>
                        <button class="btn btn-default btn-lg shadow-sm w-100" disabled>
                            Bayar
                        </button>
                    <?php endif;   ?>
                </center>
            </div>
        </div>
    </div>

    <!-- summary -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4 class="small font-weight-bold">Pembayaran Sukses <span class="float-right"><?= $jumlahsukses; ?> (<?= ROUND($jumlahsukses / $jumlahseluruh * 100, 2) . "%"; ?>)</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-success" role="progressbar" style="width: <?= ROUND($jumlahsukses / $jumlahseluruh * 100, 2) . "%"; ?>" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Pembayaran Pending <span class="float-right"><?= $jumlahpending; ?> (<?= ROUND($jumlahpending / $jumlahseluruh * 100, 2) . "%"; ?>)</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: <?= ROUND($jumlahpending / $jumlahseluruh * 100, 2) . "%"; ?>" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Pembayaran gagal <span class="float-right"><?= $jumlahseluruh - $jumlahsukses; ?> (<?= ROUND(($jumlahseluruh - $jumlahsukses) / $jumlahseluruh * 100, 2) . "%"; ?>)</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar" style="width: <?= ROUND(($jumlahseluruh - $jumlahsukses) / $jumlahseluruh * 100, 2) . "%"; ?>" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>


    <ul class="nav nav-pills nav-justified tabs mb-3" id="assetstabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="cards" aria-selected="true">HISTORY</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#currency" type="button" role="tab" aria-controls="currency" aria-selected="false">KWITANSI</button>
        </li>
    </ul>
    <div class="tab-content" id="assetstabsContent">
        <div class="tab-pane fade show active" id="cards" role="tabpanel">
            <div class="row mb-3">
                <!-- Project Card Example -->
                <div class="col">
                    <h6 class="title">History</h6>
                </div>
                <div class="col-auto">
                    <a href="paymen/bayar" class="small">+Pembayaran</a>
                </div>
            </div>
            <?php $i = 1; ?>
            <?php foreach ($bayar as $tg) : ?>
                <div class="row mb-4">
                    <div class="col-12 px-0">
                        <ul class="list-group list-group-flush bg-none">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow rounded-10 bg-warning text-white">
                                            <span class="vm d-inline-block"><?= $i; ?></span>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="text-color-theme mb-0">Waktu dibuat</p>
                                        <p class="text-muted size-12"><?= $tg['waktu_dibuat']; ?></p>
                                    </div>
                                    <div class="col align-self-center text-end">
                                        <p class="mb-0 fw-bold"><?= rupiah($tg['amount'] - 3500); ?></p>
                                        <p class="text-muted size-12 text-success">
                                            <?php if ($tg['bill_payment_status'] == "SUCCESSFUL") : ?>
                                                <font color='green'><b>SUKSES</b></font>
                                            <?php elseif ($tg['bill_payment_status'] == "CANCELLED") : ?>
                                                <font color='red'><b>DIBATALKAN</b></font>
                                            <?php elseif (strtotime($tg['expired_date']) < strtotime("now")) : ?>
                                                <font color='black'><b>KADALUARSA</b></font>
                                            <?php elseif ($tg['bill_payment_status'] == "PENDING") : ?>
                                                <font color='red'><b>PENDING</b></font>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
        <div class="tab-pane fade" id="currency" role="tabpanel" aria-labelledby="currency-tab">
            <div class="row">


            </div>
        </div>

    </div>
    <!-- Transactions -->

</div>
</div>

</div>
<!-- main page content ends -->


</main>
<!-- Page ends-->