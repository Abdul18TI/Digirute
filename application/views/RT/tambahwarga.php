<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Tambah Warga</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item">Form Controls</li>
                        <li class="breadcrumb-item active">Base Inputs</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <!-- Bookmark Start-->
                    <div class="bookmark">
                        <ul>
                            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                                <form class="form-inline search-form">
                                    <div class="form-group form-control-search">
                                        <input type="text" placeholder="Search..">
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- Bookmark Ends-->
                </div>
            </div>
        </div>
    </div><!-- Form Tambah Warga -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Tambah Warga</h5>
                    </div>
                    <form class="form theme-form" method="post" action="<?= base_url('RT/C_Warga/ActionTambahWarga') ?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">RT/RW</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" id="inp_rw" name="inp_rw" readonly placeholder="RW" value="1">
                                        </div>
                                        <div class="col-sm-4">
                                            <input class="form-control " type="text" id="inp_rt" name="inp_rt" readonly placeholder="RT" value="2">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nomor Kartu Keluarga (KK)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="inp_kk" name="inp_kk" placeholder="Nomor Kartu Keluarga">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nomor Induk Kepenedudukan (NIK)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_nik" name="inp_nik" placeholder="Nomor Induk Kependidikan">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="inp_alamat" name="inp_alamat" rows="5" cols="5" placeholder="Alamat"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Desa/Kabupaten/Provinsi</label>
                                        <div class="col-sm-5">
                                            <select class="form-select select2" id="inp_prov" name="inp_prov">
                                                <option value="" selected>Pilih Provinsi</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select select2" id="inp_kab" name="inp_kab">
                                                <option value="" selected>Pilih Kabupaten</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-5">
                                            <select class="form-select select2" id="inp_kec" name="inp_kec">
                                                <option value="" selected>Pilih Kecamatan</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-select select2" id="inp_kel" name="inp_kel">
                                                <option value="" selected>Pilih Kelurahan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Kode Pos</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_kodepos" name="inp_kodepos" placeholder="0000">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_nama" name="inp_nama" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-4">
                                            <input class="form-control " type="text" id="inp_tempat" name="inp_tempat" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="col-sm-5">
                                            <input class="form-control digits" name="inp_tgllahir" id="example-datetime-local-input" type="date" data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <div class="form-group mt-2 m-checkbox-inline mb-0 custom-radio-ml">
                                                <div class="radio radio-primary">
                                                    <input id="laki" type="radio" name="inp_sex" value="1">
                                                    <label class="mb-0" for="laki">Laki-laki</label>
                                                </div>
                                                <div class="radio radio-primary">
                                                    <input id="perempuan" type="radio" name="inp_sex" value="2">
                                                    <label class="mb-0" for="perempuan">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <?= comboboxmanual('inp_agama', 'inp_agama', $dataagama, '') ?>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <?= combobox('inp_pekerjaan', 'inp_pekerjaan', 'tb_pekerjaan', 'Nama_Pekerjaan', 'ID_Pekerjaan', '') ?>
                                            <!-- <select class="form-select" id="inp_pekerjaan" name="inp_pekerjaan">
                                                <option value="0">Pekerjaan</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Golongan Darah</label>
                                        <div class="col-sm-9">
                                            <?= comboboxmanual('inp_goldar', 'inp_goldar', $datagolongandarah,  '') ?>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Status Perkawinan</label>
                                        <div class="col-sm-9">
                                            <?= comboboxmanual('inp_status', 'inp_status', $datastatus, '') ?>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">No. Passport</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_passport" name="inp_passport" placeholder="Nomor Passport">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">No. KTIAS/KITAP</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_kitas" name="inp_kitas" placeholder="Nomor Passport">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_namaayah" name="inp_namaayah" placeholder="Nama Ayah">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-9">
                                            <input class="form-control " type="text" id="inp_namaibu" name="inp_namaibu" placeholder="Nama Ibu">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tanggal Terbit KK</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="inp_tglterbit" type="date">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Form Pengaduan End -->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // Provinsi
    $(document).ready(function() {
        $("#inp_prov").select2({
            ajax: {
                url: '<?= base_url() ?>RT/C_Warga/getdataprov',
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });

    // Kabupaten
    $("#inp_prov").change(function() {
        var id_prov = $("#inp_prov").val();
        $("#inp_kab").select2({
            ajax: {
                url: '<?= base_url() ?>RT/C_Warga/getdatakab/' + id_prov,
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });

    // Kecamatan
    $("#inp_kab").change(function() {
        var id_kab = $("#inp_kab").val();
        $("#inp_kec").select2({
            ajax: {
                url: '<?= base_url() ?>RT/C_Warga/getdatakec/' + id_kab,
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });
    // Kelurahan
    $("#inp_kec").change(function() {
        var id_kac = $("#inp_kec").val();
        $("#inp_kel").select2({
            ajax: {
                url: '<?= base_url() ?>RT/C_Warga/getdatakel/' + id_kac,
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });
</script>