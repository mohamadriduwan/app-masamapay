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
            <div class="tab-content" id="assetstabsContent">
                <div class="tab-pane fade show active" id="cards" role="tabpanel">
                    <div class="row mb-3">
                        <?php $i = 1; ?>
                        <?php foreach ($bayar as $tg) : ?>
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <?php if ($tg['bill_payment_status'] == "SUCCESSFUL") : ?>
                                                    <div class="avatar avatar-50 shadow rounded-10 bg-success text-white">
                                                        <a href="<?= $tg['payment_url']; ?>" class="btn btn-44 text-light shadow-sm">
                                                            <i class="fas fa-clipboard-check"></i>
                                                        </a>
                                                    </div>
                                                <?php elseif ($tg['bill_payment_status'] == "PENDING") : ?>
                                                    <div class="avatar avatar-50 shadow rounded-10 bg-warning text-white">
                                                        <a href="<?= $tg['payment_url']; ?>" class="btn btn-44 text-light shadow-sm">
                                                            <i class="bi bi-cash-coin"></i>
                                                        </a>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="avatar avatar-50 shadow rounded-10 bg-danger text-white">
                                                        <a href="<?= $tg['payment_url']; ?>" class="btn btn-44 text-light shadow-sm">
                                                            <i class="fas fa-window-close"></i>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col align-self-center ps-0">
                                                <p class="small mb-1"><span class="text-muted">Pembayaran<br><?= date('d M Y H:m', strtotime($tg['waktu_dibuat'])); ?></span></p>
                                                <p><?= rupiah($tg['amount'] - 3500); ?> </p>
                                            </div>
                                            <?php if ($tg['bill_payment_status'] == "SUCCESSFUL") : ?>
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
                                            <?php elseif ($tg['bill_payment_status'] == "PENDING") : ?>
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
                                            <?php else : ?>
                                                <div class="col-auto">
                                                    <div class="tag bg-secondary border-secondary text-white py-1 px-2">
                                                        <?= $tg['bill_payment_status'] ?>
                                                    </div><br>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="currency" role="tabpanel" aria-labelledby="currency-tab">
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($bayar as $tg) : ?>
                    <?php if ($tg['bill_payment_status'] == "SUCCESSFUL") : ?>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow rounded-10 bg-success text-white">
                                                <span class="vm d-inline-block"><i class="fas fa-clipboard-check"></i></span>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="small mb-1"><span class="text-muted">Pembayaran <br><?= date('d M Y H:m', strtotime($tg['waktu_dibuat'])); ?></span></p>
                                            <p><?= rupiah($tg['amount'] - 3500); ?> </p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="tag bg-success border-success text-white py-1 px-2">
                                                <?= $tg['bill_payment_status'] ?>
                                            </div>
                                            <br>
                                            <center>
                                                <div class="tag bg border-success text-white py-1 px-2">
                                                    <a href="<?= base_url(); ?>paymen/kwitansi?id=<?= $tg['link_id']; ?>" <i class="fas fa-print"></i> Print Kwitansi</i>
                                                    </a>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                        </div>
            </div>
        </div>

        </div>


        </div>
        </main>
        <!-- main page content ends -->