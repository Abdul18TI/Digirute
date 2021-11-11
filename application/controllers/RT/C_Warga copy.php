<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_warga1 extends CI_Controller
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
        $this->load->model('M_warga');
        $this->load->model('M_daerah');
    }
    public function index()
    {
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar_rt');
        $this->load->view('RT/tambahwarga');
        $this->load->view('Templates/footer');
    }

    public function TambahWarga()
    {
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar_rt');
        $this->load->view('RT/tambahwarga');
        $this->load->view('Templates/footer');
    }
    public function ActionTambahWarga()
    {
        var_dump($this->_data());
        $this->M_warga->insertdatawarga($this->_data());
    }
    // method bertanggung jawab terhadap data yang masuk
    private function _data()
    {
        $data = [
            'NIK' =>  htmlspecialchars($this->input->post('inp_nik', true)),
            'NoKK' =>  htmlspecialchars($this->input->post('inp_kk', true)),
            'Alamat' =>  htmlspecialchars($this->input->post('inp_alamat', true)),
            'Kelurahan' =>  htmlspecialchars($this->input->post('inp_kel', true)),
            'Kecamatan' => htmlspecialchars($this->input->post('inp_kec', true)),
            'Kabupaten' => htmlspecialchars($this->input->post('inp_kab', true)),
            'Provinsi' => htmlspecialchars($this->input->post('inp_prov', true)),
            'KodePos' => htmlspecialchars($this->input->post('inp_kodepos', true)),
            'NamaLengkap' =>  htmlspecialchars($this->input->post('inp_nama', true)),
            'TempatLahir' =>  htmlspecialchars($this->input->post('inp_tempat', true)),
            'TglLahir' => htmlspecialchars(strtotime($this->input->post('inp_tgllahir', true))),
            'Sex' => htmlspecialchars($this->input->post('inp_sex', true)),
            'Agama' => htmlspecialchars($this->input->post('inp_agama', true)),
            'Pekerjaan' => htmlspecialchars($this->input->post('inp_pekerjaan', true)),
            'GolonganDarah' => htmlspecialchars($this->input->post('inp_goldar', true)),
            'StatusPerkawinan' => htmlspecialchars($this->input->post('inp_status', true)),
            'NoPassport' => htmlspecialchars($this->input->post('inp_passport', true)),
            'NoKITASKITAP' => htmlspecialchars($this->input->post('inp_kitas', true)),
            'NamaAyah' => htmlspecialchars($this->input->post('inp_namaayah', true)),
            'NamaIbu' => htmlspecialchars($this->input->post('inp_namaibu', true)),
            'TglKeluarKK' => htmlspecialchars(strtotime($this->input->post('inp_tglterbit', true))),
            'ID_RT' => htmlspecialchars($this->input->post('inp_rt', true)),
            'ID_RW' => htmlspecialchars($this->input->post('inp_rw', true)),
        ];
        return $data;
        //    'Warga_Email' => htmlspecialchars($this->input->post('alamat_resepsi', true)),
        //    'Warga_NoHP' => htmlspecialchars($this->input->post('alamat_resepsi', true)),
    }

    	function get_kabupaten()
    {
        $id_prov=$this->input->post('prov_id');
        $data=$this->M_daerah->Kabupaten($id_prov);
        echo json_encode($data);
    }

    function get_kecamatan()
    {
        $id_kab=$this->input->post('id_kab');
        $data=$this->M_daerah->Kecamatan($id_kab);
        echo json_encode($data);
    }
}
