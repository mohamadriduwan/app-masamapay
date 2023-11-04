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
                            <th>NIS</th>
                            <th>Kelas</th>
                            <th>Nama</th>
                            <th>Nama Bank</th>
                            <th>Pembayaran</th>
                            <th>Tgl Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($pembayaran as $pem) : ?>
                            <?php if ($pem['status'] == "SUCCESSFUL" && $pem['kelas'] == $user['kelas']) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pem['nis']; ?></td>
                                    <td><?= $pem['kelas']; ?></td>
                                    <td><?= $pem['sender_name']; ?></td>
                                    <td><?= strtoupper($pem['sender_bank']); ?></td>
                                    <td><?= rupiah($pem['amount'] - 3500); ?></td>
                                    <td><?= $pem['created_at']; ?></td>
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