<div class="page-body">
    <div class="container-fluid">
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Table Agenda</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Agenda</th>
                                        <th>Isi Agenda</th>
                                        <th>Tanggal Agenda</th>
                                        <th>Banner Agenda</th>
                                        <th>Status Agenda</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($agenda as $ag) : ?>
                                        <?php $no = $no + 1; ?>

                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $ag->NamaAgenda ?></td>
                                            <td><?php echo $ag->IsiAgenda ?></td>
                                            <td><?php echo $ag->Tgl_Mulai_Agenda ?></td>
                                            <td><img src="<?= base_url('assets/images/banner/') . $ag->FotoBanner ?>" alt=""></td>
                                            <td><?php echo $ag->StatusAgenda ?></td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="javascript:void(0)"><span class="fa fa-eye"></span> Detail</a>
                                                <a class="btn btn-secondary btn-sm" href="<?= base_url(); ?>Rw/C_form_agenda_rw/form_ubah_agenda/<?= $ag->ID_Agenda; ?>"><span class="fa fa-edit"></span> Edit</a>
                                                <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>Rw/C_table_agenda_rw/hapus_agenda/<?= $ag->ID_Agenda; ?>"><span class="fa fa-trash"></span> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->
            <!-- Container-fluid Ends-->
        </div>
    </div>
</div>