<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_datapribadi extends CI_Controller
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
    public $id = "";
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_warga');
        $this->id = $this->session->userdata('ID_Warga');
    }

    public function index()
    {
        if ($this->session->userdata('ID_Warga') != null) {

            $data['datawarga'] = $this->M_warga->warga_byid($this->id)->row();
            $data['datagolongandarah'] = _datagolongandarah();
            $data['datastatus'] = _datastatuskawin();
            $data['dataagama'] = _dataagama();
            $this->load->view('Templates/header');
            $this->load->view('Templates/sidebar_warga');
            $this->load->view('Warga/v_detailpribadi', $data);
            $this->load->view('Templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Silahkan login terlebih dahulu</div>');
            redirect('C_error_page');
        }
    }

    public function updatehpemail()
    {
        $id = htmlspecialchars($this->input->post('id_mempelai', true));
        
        $data = [
            'Warga_Email' => htmlspecialchars($this->input->post('inp_email', true)),
            'Warga_Email' => htmlspecialchars($this->input->post('inp_email', true))
        ];
        // $this->Mempelai_Model->update($id, $data);
    }
}
