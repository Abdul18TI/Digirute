<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_surat extends CI_Controller
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
        if ($this->session->userdata('ID_Warga') != null) {
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar_warga');
        $this->load->view('Warga/v_daftarsurat');
        $this->load->view('Templates/footer');
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Please login first..!</div>');
        redirect('C_error_page');
    }
    }
}
