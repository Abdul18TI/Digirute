<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard_rw extends CI_Controller
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
            $this->load->view('Templates/header');
            $this->load->view('Templates/sidebar_rw');
            $this->load->view('RW/dashboard');
            $this->load->view('Templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Silahkan login terlebih dahulu</div>');
            redirect('C_error_page');
        }
    }
}
