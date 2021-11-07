<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div><!-- Form Pengaduan -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Form Tambah Agenda</h5>
                    </div>
                    <?= form_open_multipart('Rw/C_form_agenda_rw/tambah_agenda'); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword22">Nama Agenda : </label>
                                    <input class="form-control" name="NamaAgenda" id="exampleInputPassword22" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea4">Isi Agenda : </label>
                                    <textarea class="form-control" name="IsiAgenda" id="exampleFormControlTextarea4" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label class="col-sm-3 col-form-label">Waktu Agenda : </label>
                                <div class="col">
                                    <input class="form-control digits" name="Tgl_Mulai_Agenda" id="example-datetime-local-input" type="date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea4">Banner Agenda : </label>
                                    <input type="file" class="form-control" name="FotoAgenda">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                        <input class="btn btn-light" type="reset" value="Batal">
                    </div>
                    </form>
                </div>
                <!-- Form Pengaduan End -->
            </div>
        </div>
    </div>
</div>