<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login_warga extends CI_Controller
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
            $this->load->view('Warga/login_warga');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $NIK = $this->input->post('NIK');
        $password = $this->input->post('password');

        $ifNIK = $this->db->get_where('tb_warga', ['NIK' => $NIK])->row_array();
        $ifUSERNAME = $this->db->get_where('tb_warga', ['Username' => $NIK])->row_array();
        // var_dump($ifNIK);
        // var_dump($ifUSERNAME);
        // die();
        if ($ifNIK != null) {
            if (password_verify($password, $ifNIK['Password'])) {
                $data = [
                    'ID_Warga' => $ifNIK['ID_Warga'],
                    'ID_RT' => $ifNIK['ID_RT'],
                    'ID_RW' => $ifNIK['ID_RW'],
                    'NamaLengkap' => $ifNIK['NamaLengkap']
                ];
                $this->session->set_userdata($data);

                // var_dump($this->session->userdata('ID_Warga'));
                // die();
                redirect('Warga/C_form_pengaduan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password yang di masukkan salah !
                    </div>');
                redirect('Warga/C_login_warga');
            }
        } else if ($ifUSERNAME != null) {
            if (password_verify($password, $ifUSERNAME['Password'])) {
                $data = [
                    'ID_Warga' => $ifUSERNAME['ID_Warga'],
                    'ID_RT' => $ifUSERNAME['ID_RT'],
                    'ID_RW' => $ifUSERNAME['ID_RW'],
                    'NamaLengkap' => $ifUSERNAME['NamaLengkap']
                ];
                $this->session->set_userdata($data);
                redirect('Warga/C_form_pengaduan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password yang di masukkan salah !
                    </div>');
                redirect('Warga/C_login_warga');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            NIK atau Username tidak terdaftar !
            </div>');
            redirect('Warga/C_login_warga');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("ID_Warga");
        $this->session->unset_userdata("ID_RT");
        $this->session->unset_userdata("ID_Rw");
        $this->session->unset_userdata("NamaLengkap");
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Anda sudah log out !
        </div>');
        redirect('Warga/C_login_warga');
    }
}
