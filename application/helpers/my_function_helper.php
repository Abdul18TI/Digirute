<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Fungsi untuk membuat tanggal dengan format Indonesia
function tgl_indo($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = getBulan(substr($tgl, 5, 2));
    $tahun = substr($tgl, 0, 4);
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
}

function menu_mempelai()
{
    $menu = [
        //nama menu
        ['Dashboard', 'Mempelai', 'Acara', 'Tamu Undangan', 'Hadiah', 'Tema', 'Galeri', 'Ucapan Selamat', 'Pembayaran', 'Tarik Hadiah', 'Testimoni', 'Logout'],
        //icon
        ['feather icon-home', 'feather icon-users', 'feather icon-calendar', 'feather icon-user-plus', 'fa fa-gift', 'ti-palette', 'feather icon-image', 'fa fa-comments-o', 'fa fa-credit-card', 'fa fa-money', 'fa fa-list-alt', 'feather icon-log-out'],
        //url
        ['Mempelai/Dashboard', 'Mempelai/Mempelai', 'Mempelai/Acara', 'Mempelai/Tamu', 'Mempelai/Hadiah', 'Mempelai/Tema', 'Mempelai/Galeri', 'Mempelai/Ucapan', 'Mempelai/Pembayaran', 'Mempelai/TarikHadiah', 'Mempelai/Testimoni', 'Mempelai/Auth/logout'],
    ];
    return $menu;
}
function menu_admin()
{
    $menu = [
        //nama menu
        ['Dashboard', 'Akun', 'Undangan', 'Tema', 'Transaksi', 'Testimoni', 'Admin', 'Tarik Hadiah', 'Logout'],
        //icon
        ['feather icon-home', 'feather icon-users', 'fa fa-book', 'ti-palette', ' fa fa-money', 'fa fa-list-alt', 'fa fa-group', 'fa fa-credit-card-alt', 'feather icon-log-out'],
        //url
        ['Admin/Dashboard',  'Admin/Akun', 'Admin/Undangan', 'Admin/Tema', 'Admin/Transaksi', 'Admin/Testimoni', 'Admin/Admin', 'Admin/TarikHadiah', 'Admin/Auth/logout'],
    ];
    return $menu;
}
//cek login user mempelai
function cekaccess()
{
    $ci = get_instance();
    if (!$ci->session->userdata("Username")) {
        redirect('Mempelai');
    } else {
        if ($ci->session->userdata("Status_Akun") == 1) {
            if ($ci->uri->segment(2) != "Pembayaran") {
                redirect('Mempelai/Pembayaran');
            }
        }
    }
}

function cekaccess_admin()
{
    $ci = get_instance();
    // echo $ci->session->userdata("Username_Admin");
    // die();
    if (!$ci->session->userdata("Username_Admin")) {
        redirect('Admin/Auth');
        // echo 'Admin tidak ditemukan';
    } else {
        // echo $ci->session->userdata("Username_Admin");
    }
}

function format_nohp($nohp)
{
    // return $nohp;
    // $hp = "";
    // kadang ada penulisan no hp 0811 239 345
    $nohp = str_replace(" ", "", $nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace("(", "", $nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace(")", "", $nohp);
    // kadang ada penulisan no hp 0811.239.345
    $nohp = str_replace(".", "", $nohp);


    if (!preg_match('/[^+0-9]/', trim($nohp))) {
        // cek apakah no hp karakter 1-3 adalah +62
        if (substr(trim($nohp), 0, 3) == '+62') {
            $hp = trim($nohp);
            return $hp;
        }
        // cek apakah no hp karakter 1 adalah 0
        elseif (substr(trim($nohp), 0, 1) == '0') {
            $hp = '+62' . substr(trim($nohp), 1);
            return $hp;
        } else {
            return "Format Hp Salah";
        }
    }
}
function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('admin_access_menu');
    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function sex($sex)
{
    if ($sex == "P") {
        return "Perempuan";
    } else {
        return "Laki-laki";
    }
}
//fungsi untuk mengubah hari ke dalam bahasa indonesia
function getHari($hari)
{
    switch ($hari) {
        case "Mon":
            return "Senin";
            break;
        case "Tue":
            return "Selasa";
            break;
        case "Wed":
            return "Rabu";
            break;
        case "Thu":
            return "Kamis";
            break;
        case "Fri":
            return "Jum'at";
            break;
        case "Sat":
            return "Sabtu";
            break;
        case "Sun":
            return "Minggu";
            break;
    }
}
// Fungsi untuk membuat bulan dengan format Indonesia
function getBulan($bln)
{
    switch ($bln) {
        case 1:
            return "Januari";
            break;
        case 2:
            return "Februari";
            break;
        case 3:
            return "Maret";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Juni";
            break;
        case 7:
            return "Juli";
            break;
        case 8:
            return "Agustus";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "Oktober";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "Desember";
            break;
    }
}

function getimagebank($str)
{
    switch ($str) {
        case "bca":
            return base_url('assets/Admin/images/bank/bca.png');
            break;
        case "bni":
            return base_url('assets/Admin/images/bank/bni.png');
            break;
        case "permata":
            return base_url('assets/Admin/images/bank/permata.png');
            break;
        case "bri":
            return base_url('assets/Admin/images/bank/bri.png');
            break;
        case "mandiri":
            return base_url('assets/Admin/images/bank/mandiri.png');
            break;
    }
}

// Fungsi untuk menampilkan data dalam bentuk combobox
function comboboxmanual($name, $id, $value, $isi, $selected)
{
    $ci = get_instance();
    $cmb = "<select name='$name' id='$id' class='custom-select col-6'>";
    $cmb .= "<option value=''>-- Pilih --</option>";
    foreach ($value as $d) {
        $cmb .= "<option value='" . $d . "'";
        $cmb .= $selected == $d ? "selected='selected'" : '';
        $cmb .= ">" . strtoupper($d) . "</option>";
    }
    $cmb .= "</select>";
    return $cmb;
}

function combobox($name, $id, $table, $field, $primary_key, $selected)
{
    
    $ci = get_instance();
    $cmb = "<select class='form-select select2' name='$name' id='$id' >";
    $data = $ci->db->get($table)->result();
    $cmb .= "<option value=''>-- Pilih --</option>";
    foreach ($data as $d) {
        $cmb .= "<option value='" . $d->$primary_key . "'";
        $cmb .= $selected == $d->$primary_key ? "selected='selected'" : '';
        $cmb .= ">" . strtoupper($d->$field) . "</option>";
    }
    $cmb .= "</select>";
    return $cmb;
}
function rupiah($angka)
{
    $hasil_rupiah = "Rp. " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}


function kode($table)
{
    $tabel = array('tb_akun', 'tb_acara', 'tb_mempelai', 'tb_undangan', 'tb_tamu', 'thema', 'tb_testimoni', 'tb_admin');
    $kode = array('AKN', 'ACR', 'MPL', 'UND', 'TMU', 'THM', 'TSM', 'ADM');
    $index_kode = array_search($table, $tabel);
    return $kode[$index_kode];
}

function kode_otomatis($table, $colum)
{
    $ci = get_instance();
    $query = $ci->db->query("SELECT MAX($colum) as Kode from $table");
    $kode = kode($table);
    $hasil = $query->row();
    $kodeangka = substr($hasil->Kode, 3);
    // echo $kode . "" . ($kodeangka + 1);
    // die();
    if ($hasil->Kode == null) {
        return $kode . "1";
    } else {
        return $kode . "" . ($kodeangka + 1);
    }
    // die;
}

function status_code($status)
{
}
