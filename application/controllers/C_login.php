<?php

class C_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('v_login');
    }

    public function auth()
    {
        $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);


        $cek_login = $this->M_login->auth_login($username, $password);

        if ($cek_login->num_rows() > 0) {
            $data = $cek_login->row_array();
            $this->session->set_userdata('masuk', true);

            if ($data['level']=='admin') {
                $this->session->set_userdata('akses', 'admin');
                $this->session->set_userdata('ses_id', $data['id']);
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('c_page');
            } elseif ($data['level']=='2') {
                $this->session->set_userdata('akses', '2');
                $this->session->set_userdata('ses_id', $data['id']);
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('c_page/admin');
            } else {
                $url = base_url();
                echo $this->session->set_flashdata('msg', 'Username atau password salah');
                redirect($url);
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('');
        redirect($url);
    }
}
