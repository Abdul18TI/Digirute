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
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div><!-- Form Tambah Warga -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-9">
                                <h5>Data Warga</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive overflow-hidden">
                            <table class="display" id="tabelwarga-rt">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Surat</th>
                                        <th>Judul Surat</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Jenis Surat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <td>No</td>
                                        <td>No Surat</td>
                                        <td>Judul Surat</td>
                                        <td>Tanggal Pengajuan</td>
                                        <td>Jenis Surat</td>
                                        <td>Status</td>
                                        <td>Aksi</td>
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