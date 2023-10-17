<!-- main page content -->
<div class="main-container container">
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-auto">
                    <figure class="avatar avatar-44 rounded-10">
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
                </div>
                <div class="col px-0 align-self-center">
                    <p class="mb-0 text-color-theme"><?= $user['name']; ?></p>
                    <p class="text-muted size-12">Kelas <?= $user['kelas']; ?></p>
                </div>
            </div>
        </div>
        <?php $nilai = $_POST['jumlahpembayaran']; ?>
        <div class="card">
            <div class="card-body">
                <!-- amount breakdown -->
                <div class="row mb-3">
                    <div class="col">
                        <p class="text-color-theme">Nominal</p>
                    </div>
                    <div class="col-auto text-end">
                        <p class="text-muted"><?= $nilai; ?></p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <p class="text-color-theme">Biaya Admin</p>
                    </div>
                    <div class="col-auto text-end">
                        <p class="text-muted">3.500</p>
                    </div>
                </div>
                <hr>
                <div class="row mb-4 fw-medium ">
                    <div class="col">
                        <p class="text-color-theme">Total</p>
                    </div>
                    <div class="col-auto text-end">
                        <p class="text-muted">
                            <?= rupiah(str_replace(".", "", $nilai) + 3500); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div><?php
                $sekarang = date('Y-m-d H:m');
                $waktu = date('Y-m-d H:m', strtotime('+1 days', strtotime($sekarang)));
                $nama = preg_replace("/[^a-zA-Z]/", " ", $user['name']);
                ?>
            <!-- <img src="https://flip.id/static/media/bca.9e43adc2.png"> -->
            <div class="main-container container">
                <div class="col-12">
                    <form class="tf-form" action="<?= base_url('paymen/cobacoba'); ?>" method="post" onsubmit="disableButton()">
                        <div class="group-input">
                            <div class="mb-4 form-floating">
                                <select name="sender_bank" class="form-control">
                                    <option value="">- Pilih Bank -</option>
                                    <option value="bri">BRI VA</option>
                                    <option value="bca">BCA VA</option>
                                    <option value="mandiri">MANDIRI VA</option>
                                    <option value="bsm">BSI VA</option>
                                    <option value="permata">Permata VA</option>
                                    <option value="cimb">CIMB VA</option>
                                    <option value="bni">BNI VA</option>
                                    <option value="danamon">Danamon VA</option>
                                    <option value="danamon">Danamon VA</option>
                                    <option value="danamon">Danamon VA</option>
                                    <option value="danamon">Danamon VA</option>
                                    <option value="danamon">Danamon VA</option>
                                    <option value="danamon">Danamon VA</option>
                                    <option value="danamon">Danamon VA</option>
                                    <option value="danamon">Danamon VA</option>
                                </select>
                                <label class="text-color-theme">Pilih Virtual Account</label>
                            </div>
                        </div>
                </div>
            </div>
            <input type="hidden" name="title" value="NIS: <?= $user['email']; ?>">
            <input type="hidden" name="amount" value="<?= str_replace(".", "", $nilai) + 3500; ?>">
            <input type="hidden" name="expired_date" value="<?= $waktu; ?>">
            <input type="hidden" name="is_address_required" value="0">
            <input type="hidden" name="sender_phone" value="<?= $user['nohp']; ?>">
            <input type="hidden" name="sender_name" value="<?= trim($nama); ?>">
            <input type="hidden" name="sender_email" value="<?= $user['email2']; ?>">
        </div>
        <div class="row mb-4">
            <center>
                <div class="col-10 ">
                    <button class="btn btn-default btn-lg shadow-sm w-100" onClick="this.disabled=true; this.value='Sending…'; this.form.submit();">
                        Buat Virtual Account
                    </button>
                </div>
            </center>
        </div>
        </form>
    </div>
    <!-- main page content ends -->