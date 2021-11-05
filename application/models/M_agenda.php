<?php

class M_agenda extends CI_Model
{
    public function tampil_data_agenda()
    {
        $this->db->select('*');
        $this->db->from('tb_agenda');
        $query = $this->db->get();
        return $query;
    }
}
