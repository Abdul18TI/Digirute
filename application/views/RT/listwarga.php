<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Data Warga</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Base Inputs</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Form Tambah Warga -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Data Warga</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive overflow-hidden">
                            <table class="display" id="tabelwarga-rt">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No KK</th>
                                        <th>NIK</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($datawarga as $dw) : ?>
                                        <?php $no = $no + 1; ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $dw->NamaLengkap ?></td>
                                            <td><?php echo $dw->NoKK ?></td>
                                            <td><?php echo $dw->NIK ?></td>
                                            <td><?php echo $dw->Alamat ?></td>
                                            <td><?php echo $dw->Warga_NoHP ?></td>
                                            <td>
                                                <a href="<?= base_url('RT/C_Warga/DetailWarga/') . '' . $dw->ID_Warga ?>" class="btn btn-success btn-sm p-2" data-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><span class="fa fa-list"></span></a>
                                                <a class="btn btn-secondary btn-sm p-2" data-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fa fa-pencil"></span></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No KK</th>
                                        <th>NIK</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfooter>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Form Pengaduan End -->
            </div>
        </div>
    </div>
</div>