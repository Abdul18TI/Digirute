<?php

class M_agenda extends CI_Model
{
    public function tampil_data_agenda()
    {
        $this->db->select('*');
        $this->db->from('tb_agenda');
        $this->db->join('tb_foto_agenda', 'tb_agenda.ID_Agenda = tb_foto_agenda.ID_Agenda');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data_agenda_by_id($ID_Agenda)
    {
        $this->db->select('*');
        $this->db->from('tb_agenda');
        $this->db->join('tb_foto_agenda', 'tb_agenda.ID_Agenda = tb_foto_agenda.ID_Agenda');
        $this->db->where('ID_Agenda', $ID_Agenda);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_gambar_agenda_by_id_agenda($ID_Agenda)
    {
        $this->db->select('*');
        $this->db->from('tb_foto_agenda');
        $this->db->where('ID_Agenda', $ID_Agenda);
        $query = $this->db->get();
        return $query;
    }

    public function hapus_agenda($ID_Agenda)
    {
        $data['tb_agenda'] = $this->db->get_where('tb_agenda', ['ID_Agenda' => $ID_Agenda])->row_array();
        $data['tb_foto_agenda'] = $this->db->get_where('tb_foto_agenda', ['ID_Agenda' => $ID_Agenda])->row_array();
        $this->db->delete('tb_foto_agenda', ['ID_Agenda' => $ID_Agenda]);
        unlink(FCPATH . 'assets/img/foto_product/' . $data['tb_foto_agenda']['Foto_Agenda']);
        redirect('Product_a');
    }
}
