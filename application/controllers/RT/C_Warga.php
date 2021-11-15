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

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_warga');
        $this->load->model('M_daerah');
    }
    public function index()
    {
        $data['datawarga'] = $this->M_warga->tampil_data_warga()->result();

        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar_rt');
        $this->load->view('RT/listwarga', $data);
        $this->load->view('Templates/footer');
    }
    public function DetailWarga($id)
    {
        $data['datawarga'] = $this->M_warga->warga_byid($id)->row();
        $data['datagolongandarah'] = $this->_datagolongandarah();
        $data['datastatus'] = $this->_datastatuskawin();
        $data['dataagama'] = $this->_dataagama();
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar_rt');
        $this->load->view('RT/detailwarga', $data);
        $this->load->view('Templates/footer');
    }

    public function EditWarga($id = null)
    {
        if (!isset($id)) redirect('RT/C_Warga');
        $data['datawarga'] = $this->M_warga->warga_byid($id)->row();
        $data['datagolongandarah'] = $this->_datagolongandarah();
        $data['datastatus'] = $this->_datastatuskawin();
        $data['dataagama'] = $this->_dataagama();
        $this->load->view('Templates/header');
        $this->load->view('Templates/sidebar_rt');
        $this->load->view('RT/editwarga', $data);
        $this->load->view('Templates/footer');
    }

    public function TambahWarga()
    {
        $this->form_validation->set_rules('inp_pekerjaan', 'Pekerjaan', 'callback_validate_dropdown');
        $this->form_validation->set_rules('inp_agama', 'Agama', 'callback_validate_dropdown');
        $this->form_validation->set_rules('inp_status', 'Status Pernikahan', 'callback_validate_dropdown');

        if ($this->form_validation->run() == FALSE) {
            $data['datagolongandarah'] = $this->_datagolongandarah();
            $data['datastatus'] = $this->_datastatuskawin();
            $data['dataagama'] = $this->_dataagama();
            $this->load->view('Templates/header');
            $this->load->view('Templates/sidebar_rt');
            $this->load->view('RT/tambahwarga', $data);
            $this->load->view('Templates/footer');
        } else {
            // $data = ($this->input->post('inp_goldar') == '00') ?   NULL  : $this->input->post('inp_goldar');

            $query =  $this->M_warga->insertdatawarga($this->_data());
            if ($query) {
                alert('sukses', 'Data warga berhasil ditambahkan');
                redirect(base_url('RT/C_Warga/'), 'refresh');
            } else {
                alert('gagal', 'Data warga gagal ditambahkan');
                redirect(base_url('RT/C_Warga/'), 'refresh');
            }
        }
    }

    //method  untuk aksi tambah data warga
    public function ActionTambahWarga()
    {
        $this->form_validation->set_rules('inp_pekerjaan', 'inp_pekerjaan', 'callback_validate_dropdown');
        $this->form_validation->set_rules('inp_agama', 'inp_pekerjaan', 'callback_validate_dropdown');
        $this->form_validation->set_rules('in', 'inp_pekerjaan', 'callback_validate_dropdown');
        if ($this->form_validation->run() == FALSE) {
            redirect('RT/C_Warga');
        } else {
            $query =  $this->M_warga->insertdatawarga($this->_data());
            if ($query) {
                alert('sukses', 'Data warga berhasil ditambahkan');
                redirect(base_url('RT/C_Warga/'), 'refresh');
            } else {
                alert('gagal', 'Data warga gagal ditambahkan');
                redirect(base_url('RT/C_Warga/'), 'refresh');
            }
        }
    }


    //method  untuk aksi tambah data warga
    public function ActionEditWarga()
    {
        $id = htmlspecialchars($this->input->post('inp_id', true));
        $query = $this->M_warga->updatedatawarga($id, $this->_data());
        alert('sukses', 'Data warga berhasil diubah');
        redirect(base_url('RT/C_Warga/'), 'refresh');
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
            'GolonganDarah' => ($this->input->post('inp_goldar') == '00') ?   NULL  : htmlspecialchars($this->input->post('inp_goldar', true)),
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

    // Provinsi
    public function getdataprov()
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->M_daerah->getprov($searchTerm);
        echo json_encode($response);
    }

    // Kabupaten
    public function getdatakab($id_prov)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->M_daerah->getkab($id_prov, $searchTerm);
        echo json_encode($response);
    }

    // Kecamatan
    public function getdatakec($id_kab)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->M_daerah->getkec($id_kab, $searchTerm);
        echo json_encode($response);
    }

    // Kelurahan
    public function getdatakel($id_kec)
    {
        $searchTerm = $this->input->post('searchTerm');
        $response   = $this->M_daerah->getkel($id_kec, $searchTerm);
        echo json_encode($response);
    }

    private function _datagolongandarah()
    {
        $data = array('A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O');
        return $data;
    }
    private function _datastatuskawin()
    {
        $data = array('Belum Kawin' => 'Belum Kawin', 'Kawin' => 'Kawin',  'Cerai Hidup' => 'Cerai Hidup', 'Cerai Mati' => 'Cerai Mati');
        return $data;
    }
    private function _dataagama()
    {
        $data = array('1' => 'Islam', '2' => 'Kristen',  '3' => 'Hindu', '4' => 'Budha', '5' => 'Katolik', '6' => 'Konghucu');
        return $data;
    }

    function validate_dropdown($str)
    {
        $field_value = $str; //this is redundant, but it's to show you how
        //the content of the fields gets automatically passed to the method
        // var_dump($str);
        // die();
        if ($str == '00') {
            $this->form_validation->set_message(__FUNCTION__, 'Inputan %s harus dipilih');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
