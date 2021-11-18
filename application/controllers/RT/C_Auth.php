<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_auth extends CI_Controller
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
        $this->form_validation->set_rules('NIK', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('RT/login_rt');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $NIK = $this->input->post('NIK');
        $password = $this->input->post('password');

        $ifNIK = $this->db->get_where('tb_rt', ['ketua_rw' => $NIK])->row_array();
        $ifUSERNAME = $this->db->get_where('tb_rt', ['username_rw' => $NIK])->row_array();

        if ($ifNIK != null) {
            if (password_verify($password, $ifNIK['Password'])) {
                $data = [
                    'rt_id' => $ifNIK['rt_id']
                ];
                $this->session->set_userdata($data);
                redirect('RT/C_Warga');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Password yang di masukkan salah !
                        </div>');
                redirect('RT/C_auth');
            }
        } else if ($ifUSERNAME != null) {
            if (password_verify($password, $ifUSERNAME['Password'])) {
                $data = [
                    'rt_id' => $ifUSERNAME['rt_id']
                ];
                $this->session->set_userdata($data);
                redirect('RT/C_Warga');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Password yang di masukkan salah !
                        </div>');
                redirect('RT/C_auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                NIK atau Username tidak terdaftar !
                </div>');
            redirect('RT/C_auth');
        }
    }
}
