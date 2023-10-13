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
                <h1 class="display-1 my-2">
                    <?php if (isset($tunggakan['total']) && $tunggakan['total'] > 0) {
                        echo rupiah($tunggakan['total']);
                    } else {
                        echo "LUNAS";
                    }; ?>
                </h1>

                <p class="text-muted mb-2">Kekurangan
                    <br>
                    (update
                    <?php
                    if (isset($tunggakan['total'])) {
                        echo date('d M Y H:m', strtotime($tunggakan['date']));
                    } else {
                        echo date('Y-m-d H:m');
                    }; ?>
                    )
                </p>
            </div>
        </div>

        <br>
        <div class="main-container container">
            <div class="card shadow-sm mb-4">
                <center>
                    <?php if (isset($tunggakan['total']) && $tunggakan['total'] > 0) : ?>
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

    <!-- Dark mode switch -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="darkmodeswitch">
                        <label class="form-check-label text-muted px-2 " for="darkmodeswitch">Activate Dark
                            Mode</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- summary -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <?php if ($jumlahseluruh > 0) : ?>
                <h4 class="small font-weight-bold">Pembayaran Sukses <span class="float-right"><?= $jumlahsukses; ?> (<?= ROUND($jumlahsukses / $jumlahseluruh * 100, 2) . "%"; ?>)</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?= ROUND($jumlahsukses / $jumlahseluruh * 100, 2) . "%"; ?>" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Pembayaran Pending <span class="float-right"><?= $jumlahpending; ?> (<?= ROUND($jumlahpending / $jumlahseluruh * 100, 2) . "%"; ?>)</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?= ROUND($jumlahpending / $jumlahseluruh * 100, 2) . "%"; ?>" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Pembayaran gagal <span class="float-right"><?= $jumlahseluruh - $jumlahsukses - $jumlahpending; ?> (<?= ROUND(($jumlahseluruh - $jumlahsukses - $jumlahpending) / $jumlahseluruh * 100, 2) . "%"; ?>)</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?= ROUND(($jumlahseluruh - $jumlahsukses - $jumlahpending) / $jumlahseluruh * 100, 2) . "%"; ?>" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            <?php else : ?>
                <h4 class="small font-weight-bold">Pembayaran Sukses <span class="float-right">0 (0%)</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Pembayaran Pending <span class="float-right">0 (0%)</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Pembayaran gagal <span class="float-right">0 (0%)</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            <?php endif;   ?>
        </div>
    </div>


    <ul class="nav nav-pills nav-justified tabs mb-3" id="assetstabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="cards" aria-selected="true">PENDING</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#currency" type="button" role="tab" aria-controls="currency" aria-selected="false">KWITANSI</button>
        </li>
    </ul>
    <div class="tab-content" id="assetstabsContent">
        <div class="tab-pane fade show active" id="cards" role="tabpanel">
            <!-- Transactions -->
            <div class="row mb-3">
                <div class="col-12 px-0">
                    <ul class="list-group list-group-flush bg-none">
                        <?php foreach ($bayar as $tg) : ?>
                            <?php if ($tg['bill_payment_status'] == "PENDING") : ?>
                                <li class="list-group-item">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 shadow rounded-10 bg-warning text-white">
                                                        <a href="<?= $tg['payment_url']; ?>" class="btn btn-44 text-light shadow-sm">
                                                            <i class="bi bi-cash-coin"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col align-self-center ps-0">
                                                    <p class="small mb-1"><span class="text-muted"><?= date('d M Y H:m', strtotime($tg['waktu_dibuat'])); ?></span></p>
                                                    <p><?= rupiah($tg['amount'] - 3500); ?> </p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="tag bg-danger border-danger text-white py-1 px-2">
                                                        <?= $tg['bill_payment_status'] ?>
                                                    </div><br>
                                                    <center>
                                                        <div class="tag bg border-primary text-white py-1 px-2">
                                                            <a href="<?= base_url(); ?>paymen/kwitansi?id=<?= $tg['link_id']; ?>" <i class="bi bi-cash-coin"> Bayar</i>
                                                            </a>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- END Transactions -->
        </div>
        <div class="tab-pane fade" id="currency" role="tabpanel" aria-labelledby="currency-tab">
            <!-- Transactions -->
            <div class="row mb-3">
                <div class="col-12 px-0">
                    <ul class="list-group list-group-flush bg-none">
                        <?php foreach ($bayar as $tg) : ?>
                            <?php if ($tg['bill_payment_status'] == "SUCCESSFUL") : ?>
                                <li class="list-group-item">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 shadow rounded-10 bg-success text-white">
                                                        <a href="<?= $tg['payment_url']; ?>" class="btn btn-44 text-light shadow-sm">
                                                            <i class="fas fa-clipboard-check"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col align-self-center ps-0">
                                                    <p class="small mb-1"><span class="text-muted"><?= date('d M Y H:m', strtotime($tg['waktu_dibuat'])); ?></span></p>
                                                    <p><?= rupiah($tg['amount'] - 3500); ?> </p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="tag bg-success border-success text-white py-1 px-2">
                                                        <?= $tg['bill_payment_status'] ?>
                                                    </div><br>
                                                    <center>
                                                        <div class="tag bg border-success text-white py-1 px-2">
                                                            <a href="<?= base_url(); ?>paymen/kwitansi?id=<?= $tg['link_id']; ?>" <i class="fas fa-print"></i> Print</i>
                                                            </a>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- END Transactions -->
        </div>

    </div>


</div>
<!-- main page content ends -->


</main>
<!-- Page ends-->