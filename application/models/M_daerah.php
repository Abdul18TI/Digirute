<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_daerah extends CI_Model
{

    function getprov($searchTerm = "")
    {
        $this->db->select('id_prov, nama_prov');
        $this->db->where("nama_prov like '%" . $searchTerm . "%' ");
        $this->db->order_by('id_prov', 'asc');
        $fetched_records = $this->db->get('tb_provinsi');
        $dataprov = $fetched_records->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['id_prov'], "text" => $prov['nama_prov']);
        }
        return $data;
    }

    function getkab($id_prov, $searchTerm = "")
    {
        $this->db->select('id_kab, nama_kab');
        $this->db->where('id_prov', $id_prov);
        $this->db->where("nama_kab like '%" . $searchTerm . "%' ");
        $this->db->order_by('id_kab', 'asc');
        $fetched_records = $this->db->get('tb_kabupaten');
        $datakab = $fetched_records->result_array();

        $data = array();
        foreach ($datakab as $kab) {
            $data[] = array("id" => $kab['id_kab'], "text" => $kab['nama_kab']);
        }
        return $data;
    }

    function getkec($id_kab, $searchTerm = "")
    {
        $this->db->select('id_kec, nama_kec');
        $this->db->where('id_kab', $id_kab);
        $this->db->where("nama_kec like '%" . $searchTerm . "%' ");
        $this->db->order_by('id_kec', 'asc');
        $fetched_records = $this->db->get('tb_kecamatan');
        $datakec = $fetched_records->result_array();

        $data = array();
        foreach ($datakec as $kec) {
            $data[] = array("id" => $kec['id_kec'], "text" => $kec['nama_kec']);
        }
        return $data;
    }

    function getkel($id_kec, $searchTerm = "")
    {
        $this->db->select('id_kel, nama_kel');
        $this->db->where('id_kec', $id_kec);
        $this->db->where("nama_kel like '%" . $searchTerm . "%' ");
        $this->db->order_by('id_kel', 'asc');
        $fetched_records = $this->db->get('tb_kelurahan');
        $datakel = $fetched_records->result_array();

        $data = array();
        foreach ($datakel as $kel) {
            $data[] = array("id" => $kel['id_kel'], "text" => $kel['nama_kel']);
        }
        return $data;
    }
}
