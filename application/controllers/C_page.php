<?php

class C_page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //validasi jika user belum masuk
        $this->load->model('M_buku');
        if ($this->session->userdata('masuk') !=  true) {
            $url = base_url('index.php/c_login');
            redirect($url);
        }
    }

    public function index()
    {
        $data['buku'] = $this->M_buku->tampil_data();
        $this->load->view('buku/v_tampil', $data);
    }
}
