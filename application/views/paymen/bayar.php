<!-- main page content -->
<div class="main-container container">
    <div class="main-container container">
        <!-- selected contacts -->
        <div class="row mb-4">
            <div class="col-auto">
                <div class="avatar avatar-44 rounded-10 shadow-sm">
                    <?php
                    $filejpg = 'assets/img/profile/' . $user['image'];
                    if (file_exists($filejpg)) {
                        $saya = $user['image'];
                    } else {
                        $saya = "default.jpg";
                    }
                    ?>
                    <img src="<?= base_url('assets/'); ?>/img/profile/<?= $saya; ?>" alt="">
                </div>
            </div>
            <div class="col align-self-center ps-0">
                <p class="mb-1 text-color-theme"><?= $user['name']; ?></p>
                <p class="text-muted size-12">Kekurangan : <?= rupiah($tunggakan['total']); ?></p>
            </div>

        </div>
        <div class="row">
            <form action="<?= base_url(); ?>paymen/transfer" method="post">
                <div class="col-12 text-center mb-4">
                    <input type="text" class="trasparent-input text-center" name="jumlahpembayaran" id="jumlahpembayaran" placeholder="0" required>
                    <div class="text-center"><span class="text-muted">Masukkan Jumlah Pembayaran</span>
                    </div>
                </div>

                <!-- amount breakdown -->
                <br>
                <center><?= $this->session->flashdata('message'); ?></center>
                <hr>
                <div class="row mb-3">
                    <div class="col">
                        <p class="text-color-theme">Biaya Admin</p>
                    </div>
                    <div class="col-auto text-end">
                        <p class="text-muted">3.500</p>
                    </div>
                </div>

                <br>
                <div class="row mb-4">
                    <div class="col-12 ">
                        <button type="submit" class="btn btn-default btn-lg shadow-sm w-100" onClick="this.disabled=true; this.value='Sending…'; this.form.submit();">
                            Lanjut
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- main page content ends -->