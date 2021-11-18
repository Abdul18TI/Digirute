<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_form_pengaduan extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengaduan');
    }

    public function index()
    {
        if ($this->session->userdata('ID_Warga') != null) {
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('Warga/Form/form_pengaduan');
        $this->load->view('Templates/footer');
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Please login first..!</div>');
        redirect('C_error_page');
    }
    }
    public function tambah_pengaduan()
    {
        if ($this->session->userdata('ID_Warga') != null) {
        $Judul_Pengaduan      = $this->input->post('Judul_Pengaduan');
        $Kategori_Pengaduan      = $this->input->post('Kategori_Pengaduan');
        $Deskripsi_Pengaduan      = $this->input->post('Deskripsi_Pengaduan');     
        $ID_RW      = 1;    
        $ID_RT      = 1;  
        $Status_Pengaduan      = 1;  
        $UploadFotoPengaduan = $_FILES['Gambar_Pengaduan']['name'];
        $Tgl_Upload_Pengaduan = strtotime(date("Y-m-d H:i:s"));
        if ($UploadFotoPengaduan) {
            $config['upload_path'] = './assets/images/pengaduan';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '4096';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload(('Gambar_Pengaduan'))) {
                $Gambar_Pengaduan = $this->upload->data('file_name');

                $data = array(
                    'Judul_Pengaduan'    => $Judul_Pengaduan,
                    'Kategori_Pengaduan'    => $Kategori_Pengaduan,
                    'Deskripsi_Pengaduan'    => $Deskripsi_Pengaduan,
                    'Tgl_Upload_Pengaduan'    => $Tgl_Upload_Pengaduan,
                    'ID_RW'    => $ID_RW,
                    'ID_RT'    => $ID_RT,
                    'Status_Pengaduan'    => $Status_Pengaduan,
                    'Status_Pengaduan'    => $Status_Pengaduan,
                    'Gambar_Pengaduan' => $Gambar_Pengaduan
                );

                $this->M_pengaduan->tambah_pengaduan($data);
                redirect('Warga/C_form_pengaduan');
            } else {
                $data = array(
                    'Judul_Pengaduan'    => $Judul_Pengaduan,
                    'Kategori_Pengaduan'    => $Kategori_Pengaduan,
                    'Deskripsi_Pengaduan'    => $Deskripsi_Pengaduan,
                    'Tgl_Upload_Pengaduan'    => $Tgl_Upload_Pengaduan,
                    'ID_RW'    => $ID_RW,
                    'ID_RT'    => $ID_RT,
                    'Status_Pengaduan'    => $Status_Pengaduan,
                    'Status_Pengaduan'    => $Status_Pengaduan
                );

                $this->M_pengaduan->tambah_pengaduan($data);
                redirect('Warga/C_form_pengaduan');
                // echo $this->upload->display_errors();
            }
        }
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Please login first..!</div>');
        redirect('C_error_page');
    }
    }

    public function form_ubah_agenda($ID_Agenda)
    {
        if ($this->session->userdata('rw_id') != null) {
        $this->load->model('M_agenda');
        $data['agenda'] = $this->M_agenda->tampil_data_agenda_by_id($ID_Agenda)->result();
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('Rw/Form/form_ubah_agenda', $data);
        $this->load->view('Templates/footer');
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Please login first..!</div>');
        redirect('C_error_page');
    }
    }

    public function ubah_agenda()
    {
        if ($this->session->userdata('rw_id') != null) {
        $this->load->model('M_agenda');
        $ID_Agenda      = $this->input->post('ID_Agenda');
        $NamaAgenda      = $this->input->post('NamaAgenda');
        $IsiAgenda      = $this->input->post('IsiAgenda');
        $StatusAgenda      = 1;
        $UploadFotoBanner = $_FILES['FotoAgenda']['name'];
        $Tgl_Mulai_Agenda = strtotime($this->input->post('Tgl_Mulai_Agenda'));

        if ($UploadFotoBanner) {
            $data['banner'] = $this->db->get_where('tb_agenda', ['ID_Agenda' => $ID_Agenda])->row_array();
            $old_image = $data['banner']['FotoBanner'];
            unlink(FCPATH . 'assets/images/banner/' . $old_image);
            $config['upload_path'] = './assets/images/banner';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '4096';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload(('FotoAgenda'))) {
                $FotoBanner = $this->upload->data('file_name');

                $data = array(
                    'NamaAgenda'    => $NamaAgenda,
                    'IsiAgenda'    => $IsiAgenda,
                    'StatusAgenda'    => $StatusAgenda,
                    'Tgl_Mulai_Agenda'    => $Tgl_Mulai_Agenda,
                    'FotoBanner' => $FotoBanner
                );
                $this->M_agenda->ubah_agenda($data, $ID_Agenda, $FotoBanner);
                redirect('Rw/C_table_agenda_rw');
            } else {
                $data = array(
                    'NamaAgenda'    => $NamaAgenda,
                    'IsiAgenda'    => $IsiAgenda,
                    'StatusAgenda'    => $StatusAgenda,
                    'Tgl_Mulai_Agenda'    => $Tgl_Mulai_Agenda,
                );

                $this->M_agenda->ubah_agenda($data, $ID_Agenda);
                redirect('Rw/C_table_agenda_rw');
                // echo $this->upload->display_errors();
            }
        }
    }
}
}
