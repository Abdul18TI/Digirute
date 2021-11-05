<?php

class M_rw extends CI_Model
{
    public function tampil_data_rw()
    {
        $this->db->select('*');
        $this->db->from('gambar');
        $this->db->join('product', 'gambar.id_product = product.id_product');
        $this->db->group_by('gambar.id_product');
        $query = $this->db->get();
        return $query;
    }
}
