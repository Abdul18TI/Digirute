<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_form_agenda_rw extends CI_Controller
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
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('Rw/Form/form_agenda');
        $this->load->view('Templates/footer');
    }

    public function tambah_agenda()
    {
        $this->load->model('M_agenda');
        $NamaAgenda      = $this->input->post('NamaAgenda');
        $IsiAgenda      = $this->input->post('IsiAgenda');
        $StatusAgenda      = 1;

        $data = array(
            'NamaAgenda'    => $NamaAgenda,
            'IsiAgenda'    => $IsiAgenda,
            'StatusAgenda'    => $StatusAgenda,
        );

        $this->M_agenda->tambah_agenda($data);
        redirect('Rw/C_table_agenda_rw');
    }

    public function form_ubah_agenda($ID_Agenda)
    {
        $this->load->model('M_agenda');
        $data['agenda'] = $this->M_agenda->tampil_data_agenda_by_id($ID_Agenda)->result();
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar');
        $this->load->view('Rw/Form/form_ubah_agenda', $data);
        $this->load->view('Templates/footer');
    }

    public function ubah_agenda()
    {
        $this->load->model('M_agenda');
        $ID_Agenda      = $this->input->post('ID_Agenda');
        $NamaAgenda      = $this->input->post('NamaAgenda');
        $IsiAgenda      = $this->input->post('IsiAgenda');
        $StatusAgenda      = 1;

        $data = array(
            'NamaAgenda'    => $NamaAgenda,
            'IsiAgenda'    => $IsiAgenda,
            'StatusAgenda'    => $StatusAgenda,
        );

        $this->M_agenda->ubah_agenda($data, $ID_Agenda);
        redirect('Rw/C_table_agenda_rw');
    }
}
