<?php

class M_login extends CI_Model
{
    //cek nip dosen dan password
    public function auth_login($username, $password)
    {
        $query = $this->db->query("SELECT * FROM tb_login WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
}
