<?php

class M_rw extends CI_Model
{
    public function tampil_data_rw()
    {
        $this->db->select('*');
        $this->db->from('tb_rw');
        $query = $this->db->get();
        return $query;
    }
}
