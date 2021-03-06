<div class="page-body">
    <div class="container-fluid">
    </div><!-- Form Pengaduan -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Form Pengaduan Warga</h5>
                    </div>
                    <?= form_open_multipart('Warga/C_form_pengaduan/tambah_pengaduan'); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword22">Nama : </label>
                                    <input class="form-control" id="exampleInputPassword22" name="NamaLengkap" type="text" disabled="" value="<?= $datadiri ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword2">Judul Pengaduan : </label>
                                    <input class="form-control" name="Judul_Pengaduan" id="exampleInputPassword2" type="text" placeholder="Judul Pengaduan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect9">Kategori Pengaduan</label>
                                    <select class="form-select digits" id="exampleFormControlSelect9" name="Kategori_Pengaduan">
                                        <option value="Infrastruktur">Infrastruktur</option>
                                        <option value="Sistem Website">Sistem Website</option>
                                        <option value="Keluhan Masyarakat">Keluhan Masyarakat</option>
                                        <option value="Keluhan Tetangga">Keluhan tetangga</option>
                                        <option value="Keluhan Tetangga">Kesalahan data</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label class="form-label" for="exampleFormControlTextarea4">Keterangan</label>
                                    <textarea class="form-control" name="Deskripsi_Pengaduan" id="exampleFormControlTextarea4" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label class="form-label" for="exampleFormControlTextarea4">Bukti Pengaduan</label>
                                    <input class="form-control" name="Gambar_Pengaduan" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Ajukan</button>
                        <input class="btn btn-light" type="reset" value="Batal">
                    </div>
                    </form>
                </div>
                <!-- Form Pengaduan End -->
            </div>
        </div>
    </div>
</div>