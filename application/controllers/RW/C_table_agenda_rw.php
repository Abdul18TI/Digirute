<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_table_agenda_rw extends CI_Controller
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
    public function index()
    {
        if ($this->session->userdata('rw_id') != null) {
            $this->load->model('M_agenda');
            $data['agenda'] = $this->M_agenda->tampil_data_agenda()->result();
            $this->load->view('Templates/header');
            $this->load->view('Templates/sidebar');
            $this->load->view('Rw/Table/table_agenda', $data);
            $this->load->view('Templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Silahkan login terlebih dahulu</div>');
            redirect('C_error_page');
        }
    }

    public function hapus_agenda($ID_Agenda)
    {
        if ($this->session->userdata('rw_id') != null) {
            $this->load->model('M_agenda');
            $this->M_agenda->hapus_agenda($ID_Agenda);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Silahkan login terlebih dahulu</div>');
            redirect('C_error_page');
        }
    }
}
