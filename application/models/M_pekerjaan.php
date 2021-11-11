<?php
Class M_pekerjaan extends CI_Model
{
  function Pekerjaan()
    {
        $this->db->order_by('id_kendaraan', 'ASC');
        return $this->db->from('kendaraan')
          ->get()
          ->result();
    }

    function Merk_Kendaraan($id_kendaraan)
    {
        $this->db->where('id_kendaraan', $id_kendaraan);
        $this->db->order_by('id_merk_kendaraan', 'ASC');
        return $this->db->from('merk_kendaraan')
            ->get()
            ->result();
    }
    function Tipe_Kendaraan($id_merk)
    {
        $this->db->where('id_merk_kendaraan', $id_merk);
        $this->db->order_by('id_tipe_kendaraan', 'ASC');
        return $this->db->from('tipe_kendaraan')
            ->get()
            ->result();
    }

}
?>