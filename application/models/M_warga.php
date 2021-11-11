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

    public function insertdatawarga($data)
    {
        $sql = $this->db->set($data)->get_compiled_insert('tb_warga');
        echo "<br>";
        echo $sql;
    }
}
