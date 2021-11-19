<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <!-- <h3>Keluarga</h3> -->
                    <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Base Inputs</li>
                    </ol> -->
                </div>

            </div>
        </div>
    </div><!-- Form Tambah Warga -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Keluarga </h5>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive m-l-10 m-r-10 m-b-20">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">No KK</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        foreach ($datakeluarga as $dw) : ?>
                                            <?php $no = $no + 1; ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $dw->NoKK ?></td>
                                                <td><?php echo $dw->NIK ?></td>
                                                <td><?php echo $dw->NamaLengkap ?></td>
                                                <td>
                                                    <a href="<?= base_url('RT/C_Warga/DetailWarga/') . '' . $dw->ID_Warga ?>" class="btn btn-success btn-sm p-2" data-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><span class="fa fa-list"></span></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form Pengaduan End -->
            </div>
        </div>
    </div>
</div>