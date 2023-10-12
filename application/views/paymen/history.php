        <!-- main page content -->
        <div class="main-container container">
            <!-- list data request money -->
            <div class="row mb-3">
                <div class="col">
                    <h6 class="title">History Pembayaran</h6>
                </div>
                <div class="col-auto align-self-center">
                    <a href="<?= base_url(); ?>paymen/bayar" class="small">+Pembayaran</a>
                </div>
            </div>
            <?php
            function rupiah($angka)
            {
                $hasil_rupiah = "Rp. " . number_format($angka, 0, ',', '.');
                return $hasil_rupiah;
            }
            ?>
            <ul class="nav nav-pills nav-justified tabs mb-3" id="assetstabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="cards" aria-selected="true">ALL</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#currency" type="button" role="tab" aria-controls="currency" aria-selected="false">SUKSES</button>
                </li>
            </ul>
            <!-- TAB -->
            <div class="tab-content" id="assetstabsContent">
                <div class="tab-pane fade show active" id="cards" role="tabpanel">
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
                                    <?php elseif ($tg['bill_payment_status'] == "PENDING") : ?>
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
                                    <?php else : ?>
                                        <li class="list-group-item">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="avatar avatar-50 shadow rounded-10 bg-danger text-white">
                                                                <a href="<?= $tg['payment_url']; ?>" class="btn btn-44 text-light shadow-sm">
                                                                    <i class="fas fa-window-close"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col align-self-center ps-0">
                                                            <p class="small mb-1"><span class="text-muted"><?= date('d M Y H:m', strtotime($tg['waktu_dibuat'])); ?></span></p>
                                                            <p><?= rupiah($tg['amount'] - 3500); ?> </p>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="tag bg-secondary border-secondary text-white py-1 px-2">
                                                                <?= $tg['bill_payment_status'] ?>
                                                            </div><br>
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
            <!-- END TAB -->
        </div>


        </div>
        </main>
        <!-- main page content ends -->