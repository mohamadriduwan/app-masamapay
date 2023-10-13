<div class="main-container container">
    <!-- selected contacts -->
    <div class="card shadow-sm mb-3">
        <div class="col-auto">
            <center>
                <figure class="avatar avatar-100 rounded-15 mt-3 mb-3">
                    <?php
                    $filejpg = 'assets/img/profile/' . $user['image'];
                    if (file_exists($filejpg)) {
                        $saya = $user['image'];
                    } else {
                        $saya = "default.jpg";
                    }
                    ?>
                    <img src="<?= base_url('assets/'); ?>/img/profile/<?= $saya; ?>" alt="">
                </figure>
            </center>
            <div class="main-container container">
                <div class="row mb-3">
                    <div class="col-12 px-0">
                        <ul class="list-group list-group-flush bg-none">
                            <li class="list-group-item">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col align-self-center ps-0">
                                            <p class="small mb-1"><span class="text-muted">Nama</span></p>
                                            <p>Mohamad Riduwan</p>
                                        </div>
                                        <div class="col-auto">
                                            <br>
                                            <a href="#">
                                                <span class="badge bg-info fw-light">Edit</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col align-self-center ps-0">
                                            <p class="small mb-1"><span class="text-muted">NISN</span></p>
                                            <p>0025648552</p>
                                        </div>
                                        <div class="col-auto">
                                            <br>
                                            <a href="#">
                                                <span class="badge bg-info fw-light">Edit</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col align-self-center ps-0">
                                            <p class="small mb-1"><span class="text-muted">Tempat, Tgl Lahir</span></p>
                                            <p>Blitar, 25 April 2004</p>
                                        </div>
                                        <div class="col-auto">
                                            <br>
                                            <a href="#">
                                                <span class="badge bg-info fw-light">Edit</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col align-self-center ps-0">
                                            <p class="small mb-1"><span class="text-muted">Alamat</span></p>
                                            <p>Ds. Bakung Kec. Udanawu Kab. Blitar</p>
                                        </div>
                                        <div class="col-auto">
                                            <br>
                                            <a href="#">
                                                <span class="badge bg-info fw-light">Edit</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col align-self-center ps-0">
                                            <p class="small mb-1"><span class="text-muted">Nama Ayah</span></p>
                                            <p>Nur Salim</p>
                                        </div>
                                        <div class="col-auto">
                                            <br>
                                            <a href="#">
                                                <span class="badge bg-info fw-light">Edit</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="card-body">
                                    <div class="row">
                                        <button href="<?= base_url('paymen/'); ?>kuncidata" class="btn btn-lg btn-default w-100 mb-4 shadow">
                                            KUNCI DATA
                                        </button>
                                        <p style="text-align: center;">Jika Sudah Yakin data lengkap dan benar, silahkan Klik "KUNCI DATA"</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="main-container container">
    <!-- selected contacts -->
    <div class="card shadow-sm mb-3">
        <div class="col-auto">
            <div class="main-container container">
                <div class="row mb-3">
                    <div class="col-12 px-0">
                        <div class="main-container container">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col align-self-center ps-0">
                                        <p class="small mb-1"><span class="text-muted">Email</span></p>
                                        <p>riduwan.boban@gmail.com</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#">
                                            <span class="badge bg-primary fw-light">Edit</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col align-self-center ps-0">
                                        <p class="small mb-1"><span class="text-muted">No HP</span></p>
                                        <p>08563637463</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>