<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <hr>

    <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data <?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Flip</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Pembayaran</th>
                            <th>Tgl Catat</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($pembayaran as $pem) : ?>
                            <?php if ($pem['status'] == "SUCCESSFUL" && !$pem['nama_pencatat']) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pem['ds.id_flip']; ?></td>
                                    <td><?= $pem['nis']; ?></td>
                                    <td><?= $pem['sender_name']; ?></td>
                                    <td><?= rupiah($pem['amount'] - 3500); ?></td>
                                    <td><?= $pem['waktu_tercatat']; ?></td>
                                    <td>
                                        <?php if ($pem['nama_pencatat']) {
                                            echo '<font color="green"><b>' . $pem['nama_pencatat'] . '</b></font>';
                                        } else {
                                            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catat' . $pem['id'] . '">
                                                                CATAT
                                                              </button>';
                                        };
                                        ?>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


<?php foreach ($pembayaran as $tg) : ?>
    <div class="modal fade" id="catat<?= $tg['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="DeletBalasanLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeletBalasanLabel">Persetujuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="<?= base_url('bendahara/catatpembayaran'); ?>" method="post">
                    <div class="modal-body">
                        <p>Anda yakin untuk mencatat transaksi <strong><?= $tg['name']; ?></strong> sejumlah <strong><?= rupiah($tg['amount'] - 3500); ?></strong>?</p>
                        <div class="form-group">
                            <input type="hidden" name="link_id" id="link_id" value="<?= $tg['bill_link_id']; ?>">
                            <input type="hidden" name="id_flip" id="id_flip" value="<?= $tg['ds.id_flip']; ?>">
                            <input type="hidden" name="id_pencatat" value="<?= $user['email']; ?>">
                            <input type="hidden" name="nama_pencatat" value="<?= $user['name']; ?>">
                            <input type="hidden" name="waktu_tercatat" value="<?= date('Y-m-d H:m') ?>">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>