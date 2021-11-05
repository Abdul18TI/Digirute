<?php

class M_rt extends CI_Model
{
    public function tampil_data_rt()
    {
        $this->db->select('*');
        $this->db->from('tb_rt');
        $query = $this->db->get();
        return $query;
    }
}
