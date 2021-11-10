<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_warga extends CI_Controller
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
        $this->load->view('Templates/sidebar_rt');
        $this->load->view('RT/tambahwarga');
        $this->load->view('Templates/footer');
    }

    public function tambahwarga()
    {
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar_rt');
        $this->load->view('RT/tambahwarga');
        $this->load->view('Templates/footer');
    }
}
