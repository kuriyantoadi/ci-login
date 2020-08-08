<?php

class M_login extends CI_Model
{
    //cek nip dosen dan password
    public function auth_dosen($username, $password)
    {
        $query = $this->db->query("SELECT * FROM dosen WHERE nip='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }

    public function auth_mahasiswa($username, $password)
    {
        $query = $this->db->query("SELECT * FROM mahasiswa WHERE nim='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
}
