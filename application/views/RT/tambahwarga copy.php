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
                    <form class="form theme-form" method="post" action="<?= base_url('RT/C_Warga/get_kecamatan') ?>">
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

                                        <div class="col-sm-3">
                                            <?= combobox('inp_prov', 'inp_prov', 'tb_provinsi', 'prov_name', 'prov_id', '') ?>
                                            <!-- <select class="form-select " id="inp_prov" name="inp_prov">
                                                <option>Provinsi</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select> -->
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-select digits" id="inp_kab" name="inp_kab">

                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-select " id="inp_kec" name="inp_kec">

                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-select " id="inp_kel" name="inp_kel">

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
                                            <select class="form-select " id="inp_agama" name="inp_agama">
                                                <option value="0">Agama</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Protestantisme</option>
                                                <option value="3">Katolisisme</option>
                                                <option value="4">Hinduisme</option>
                                                <option value="5">Buddhisme</option>
                                                <option value="6">Konghucu</option>
                                            </select>
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
                                            <select class="form-select " id="inp_goldar" name="inp_goldar">
                                                <option value="-">-- Pilih --</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Status Perkawinan</label>
                                        <div class="col-sm-9">
                                            <select class="form-select " id="inp_status" name="inp_status">
                                                <option value="0">-- Pilih --</option>
                                                <option value="1">Belum Kawin</option>
                                                <option value="2">Kawin</option>
                                                <option value="3">Cerai Hidup</option>
                                                <option value="4">Cerai Mati</option>
                                            </select>
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
<script>
    $("#inp_prov").change(function() {

        // // variabel dari nilai combo box kendaraan
        $('#inp_kec').val("--a--");
        var prov_id = $("#inp_prov").val();

        // // Menggunakan ajax untuk mengirim dan dan menerima data dari server
        $.ajax({
            url: "<?php echo base_url(); ?>RT/C_Warga/get_kabupaten",
            method: "POST",
            data: {
                prov_id: prov_id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '<option value="0">--Pilih--</option>';
                var i;

                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].kab_id + '>' + data[i].kab_name + '</option>';
                }
                $('#inp_kab').html(html);

            },
            error: function(data) {
                alert('Error');
            }
        });
    });
    $("#inp_kab").change(function() {

        // // variabel dari nilai combo box kendaraan
        var kab_id = $("#inp_kab").val();

        // // Menggunakan ajax untuk mengirim dan dan menerima data dari server
        $.ajax({
            url: "<?php echo base_url(); ?>RT/C_Warga/get_kecamatan",
            method: "POST",
            data: {
                id_kab: kab_id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                console.log(data.length);
                var html = '<option value="0">--Pilih--</option>';
                var i;

                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].kec_id + '>' + data[i].kec_name + '</option>';
                }
                $('#inp_kec').html(html);

            },
            error: function(data) {
                alert('Error');
            }
        });
    });
</script>