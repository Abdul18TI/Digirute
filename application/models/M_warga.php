<?php

class M_warga extends CI_Model
{
    public function tampil_data_warga()
    {
        $this->db->select('*');
        $this->db->from('tb_warga');
        $query = $this->db->get();
        return $query;
    }

    public function warga_byid($id)
    {
        $this->db->select('*');
        $this->db->from('tb_warga');
        $this->db->join("tb_provinsi ", 'tb_warga.Provinsi=tb_provinsi.id_prov');
        $this->db->join("tb_kabupaten", 'tb_warga.Kabupaten=tb_kabupaten.id_kab');
        $this->db->join("tb_kecamatan", 'tb_warga.Kecamatan=tb_kecamatan.id_kec');
        $this->db->join("tb_kelurahan", 'tb_warga.Kelurahan=tb_kelurahan.id_kel');
        // $this->db->join('tb_foto_agenda', 'tb_agenda.ID_Agenda = tb_foto_agenda.ID_Agenda');
        $this->db->where('ID_Warga', $id);
        // SELECT * 
        // FROM `tb_warga` w
        // JOIN tb_provinsi p ON w.Provinsi = p.id_prov
        // JOIN tb_kabupaten kab ON w.Kabupaten = kab.id_kab
        // JOIN tb_kecamatan kec ON w.Kecamatan = kec.id_kec
        // JOIN tb_kelurahan kel ON w.Kelurahan = kel.id_kel;
        $query = $this->db->get();
        return $query;
    }

    public function insertdatawarga($data)
    {
        $sql = $this->db->set($data)->get_compiled_insert('tb_warga');
        $res = $this->db->insert('tb_warga', $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
}
