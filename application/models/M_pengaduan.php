<?php

class M_pengaduan extends CI_Model
{
    public function tampil_data_pengaduan()
    {
        $this->db->select('*');
        $this->db->from('tb_pengaduan');
        // $this->db->join('tb_foto_agenda', 'tb_agenda.ID_Agenda = tb_foto_agenda.ID_Agenda');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data_pengaduan_by_id($ID_Pengaduan)
    {
        $this->db->select('*');
        $this->db->from('tb_pengaduan');
        // $this->db->join('tb_foto_agenda', 'tb_agenda.ID_Agenda = tb_foto_agenda.ID_Agenda');
        $this->db->where('ID_Pengaduan', $ID_Pengaduan);
        $query = $this->db->get();
        return $query;
    }

    public function hapus_pengaduan($ID_Pengaduan)
    {
        // $data['tb_agenda'] = $this->db->get_where('tb_agenda', ['ID_Agenda' => $ID_Agenda])->row_array();
        // $data['tb_foto_agenda'] = $this->db->get_where('tb_foto_agenda', ['ID_Agenda' => $ID_Agenda])->row_array();
        $this->db->delete('tb_pengaduan', ['ID_Pengaduan' => $ID_Pengaduan]);
        // unlink(FCPATH . 'assets/img/foto_product/' . $data['tb_foto_agenda']['Foto_Agenda']);
        redirect('Warga/C_table_pengaduan');
    }
    public function tambah_pengaduan($data)
    {
        $this->db->insert('tb_pengaduan', $data);
        return $this->db->affected_rows();
    }

    public function ubah_pengaduan($data, $id)
    {
        $this->db->update('tb_pengaduan', $data, ['ID_Pengaduan' => $id]);
        return $this->db->affected_rows();
    }
}
