<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_form_agenda_rw extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
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
    public function index()
    {
    if ($this->session->userdata('rw_id') != null) {
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('Rw/Form/form_agenda');
        $this->load->view('Templates/footer');
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Please login first..!</div>');
        redirect('C_error_page');
    }
    }

    public function tambah_agenda()
    {
        if ($this->session->userdata('rw_id') != null) {
        $this->load->model('M_agenda');
        $NamaAgenda      = $this->input->post('NamaAgenda');
        $IsiAgenda      = $this->input->post('IsiAgenda');
        $StatusAgenda      = 1;
        $UploadFotoBanner = $_FILES['FotoAgenda']['name'];
        $Tgl_Mulai_Agenda = strtotime($this->input->post('Tgl_Mulai_Agenda'));

        $Tgl_Upload_Agenda = strtotime(date("Y-m-d H:i:s"));
        // echo $Tgl_Mulai_Agenda;
        // die();
        if ($UploadFotoBanner) {
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
                    'Tgl_Upload_Agenda'    => $Tgl_Upload_Agenda,
                    'FotoBanner' => $FotoBanner
                );

                $this->M_agenda->tambah_agenda($data);
                redirect('Rw/C_table_agenda_rw');
            } else {
                $data = array(
                    'NamaAgenda'    => $NamaAgenda,
                    'IsiAgenda'    => $IsiAgenda,
                    'StatusAgenda'    => $StatusAgenda,
                    'Tgl_Mulai_Agenda'    => $Tgl_Mulai_Agenda,
                    'Tgl_Upload_Agenda'    => $Tgl_Upload_Agenda,
                );

                $this->M_agenda->tambah_agenda($data);
                redirect('Rw/C_table_agenda_rw');
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
} else {
    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Please login first..!</div>');
    redirect('C_error_page');
}
}
