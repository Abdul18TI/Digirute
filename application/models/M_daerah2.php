<?php
Class M_daerah2 extends CI_Model
{
  function Provinsi()
    {
        $this->db->order_by('prov_name', 'ASC');
        return $this->db->from('tb_provinsi')
          ->get()
          ->result();
    }

    function Kabupaten($prov_id)
    {
        $this->db->where('prov_id', $prov_id);
        $this->db->order_by('kab_name', 'ASC');
        return $this->db->from('tb_kabupaten')
            ->get()
            ->result();
            // die();
    }
    function Kecamatan($kab_id)
    {
        $this->db->where('kab_id', $kab_id);
        $this->db->order_by('kec_name', 'ASC');
        return $this->db->from('tb_kecamatan')
            ->get()
            ->result();
    }
    function Kelurahan($kec_id)
    {
        $this->db->where('kel_name', $kec_id);
        $this->db->order_by('kel_name', 'ASC');
    return $this->db->from('tb_kelurahan')
            ->get()
            ->result();
    }

}
?>