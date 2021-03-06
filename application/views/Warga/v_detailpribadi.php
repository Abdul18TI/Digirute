<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <!-- <div class="col-sm-6">
                    <h3>Detail Warga</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Base Inputs</li>
                    </ol>
                </div> -->

            </div>
        </div>
    </div><!-- Form Tambah Warga -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Detail Warga</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="<?= base_url('Warga/C_datapribadi/updatehpemail') ?>">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nomor HP</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="inp_nohp" type="text" value='<?= $datawarga->Warga_NoHP ?>'>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="inp_email" type="text" value='<?= $datawarga->Warga_Email ?>'>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">RT/RW</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" id="inp_rw" name="inp_rw" disabled placeholder="RW" value='<?= $datawarga->ID_RT ?>'>
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control " type="text" id="inp_rt" name="inp_rt" disabled placeholder="RT" value='<?= $datawarga->ID_RW ?>'>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nomor Kartu Keluarga (KK)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="inp_kk" name="inp_kk" placeholder="Nomor Kartu Keluarga" value="<?= $datawarga->NoKK ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nomor Induk Kependudukan (NIK)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_nik" name="inp_nik" placeholder="Nomor Induk Kependudukan" value="<?= $datawarga->NIK ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="inp_alamat" name="inp_alamat" rows="5" cols="5" placeholder="Alamat" disabled><?= $datawarga->Alamat ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Desa/Kabupaten/Provinsi</label>
                                        <div class="col-sm-5">
                                            <select class="form-select select2" id="inp_prov" name="inp_prov" disabled>
                                                <?=
                                                "<option value='" . $datawarga->id_prov . "' selected>" . $datawarga->nama_prov . "</option>" ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select select2" id="inp_kab" name="inp_kab" disabled>
                                                <?=
                                                "<option value='" . $datawarga->id_kab . "' selected>" . $datawarga->nama_kab . "</option>" ?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-5">
                                            <select class="form-select select2" id="inp_kec" name="inp_kec" disabled>
                                                <?=
                                                "<option value='" . $datawarga->id_kec . "' selected>" . $datawarga->nama_kec . "</option>" ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select select2" id="inp_kel" name="inp_kel" disabled>
                                                <?=
                                                "<option value='" . $datawarga->id_kel . "' selected>" . $datawarga->nama_kel . "</option>" ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Kode Pos</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_kodepos" name="inp_kodepos" placeholder="0000" disabled value='<?= $datawarga->KodePos ?>'>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_nama" name="inp_nama" placeholder="Nama Lengkap" value='<?= $datawarga->NamaLengkap ?>' disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-4">
                                            <input class="form-control " type="text" id="inp_tempat" name="inp_tempat" placeholder="Tempat Lahir" value='<?= $datawarga->TempatLahir ?>' disabled>
                                        </div>
                                        <div class="col-sm-5">
                                            <input class="form-control digits" name="inp_tgllahir" id="example-datetime-local-input" type="date" data-bs-original-title="" title="" value='<?= date('Y-m-d', $datawarga->TglLahir) ?>' disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <div class="form-group mt-2 m-checkbox-inline mb-0 custom-radio-ml">
                                                <div class="radio radio-primary">
                                                    <input id="laki" type="radio" name="inp_sex" value="1" disabled <?= $datawarga->Sex == 1 ? "checked" : "" ?>>
                                                    <label class="mb-0" for="laki">Laki-laki</label>
                                                </div>
                                                <div class="radio radio-primary">
                                                    <input id="perempuan" type="radio" name="inp_sex" value="2" disabled <?= $datawarga->Sex == 2 ? "checked" : "" ?>>
                                                    <label class="mb-0" for="perempuan">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <?= comboboxmanual('inp_agama', 'inp_agama', $dataagama,  $datawarga->Agama, true) ?>

                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <?= comboboxdaerah('inp_pekerjaan', 'inp_pekerjaan', 'tb_pekerjaan', 'Nama_Pekerjaan', 'ID_Pekerjaan', $datawarga->Pekerjaan, true) ?>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Golongan Darah</label>

                                        <div class="col-sm-9">

                                            <?= comboboxmanual('inp_goldar', 'inp_goldar', $datagolongandarah,  $datawarga->GolonganDarah, true) ?>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Status Perkawinan</label>
                                        <div class="col-sm-9">

                                            <?= comboboxmanual('inp_status', 'inp_status', $datastatus, $datawarga->StatusPerkawinan, true) ?>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">No. Passport</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_passport" name="inp_passport" placeholder="Nomor Passport" value='<?= $datawarga->NoPassport ?>' disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">No. KTIAS/KITAP</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_kitas" name="inp_kitas" placeholder="Nomor KITAS/KITAP" value='<?= $datawarga->NoKITASKITAP ?>' disabled>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_namaayah" name="inp_namaayah" placeholder="Nama Ayah" value='<?= $datawarga->NamaAyah ?>' disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_namaibu" name="inp_namaibu" placeholder="Nama Ibu" value='<?= $datawarga->NamaIbu ?>' disabled>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tanggal Terbit KK</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="inp_tglterbit" type="date" value='<?= date('Y-m-d', $datawarga->TglKeluarKK) ?>' disabled>
                                        </div>
                                    </div>


                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="col-sm-9 offset-sm-3">
                            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Kesalahan Data ?</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Kesalahan Data ?</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Jika anda merasa data anda tidak benar. lakukan pelaporan pada menu Lapor dan pilih kategorinya "Infrastruktur" atau menekan tombol "Lapor" di bawah ini</a>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Batal</button>
                                            <a class="btn btn-secondary" href="<?= base_url('Warga/C_form_pengaduan') ?>">Lapor</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a class="btn btn-light" type="reset" value="Cancel">Cancel</a>
                            </form>
                            <!-- <input class="btn btn-light" type="reset" value="Cancel"> -->
                            <!-- Simple demo-->

                        </div>
                    </div>
                </div>
                <!-- Form Pengaduan End -->
            </div>
        </div>
    </div>
</div>