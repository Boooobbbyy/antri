<?php

class KaryModel extends CI_Model
{
    public function getAllkaryawan()
    {
        return $this->db->get('karyawan')->result_array();
    }

    public function Tambah()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "nama" => $this->input->post('nama', true),
            "telp" => $this->input->post('telp', true),
            "level" => $this->input->post('level', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "alamat" => $this->input->post('alamat', true),
            "id_loket" => $this->input->post('id_loket', true),
        ];

        $this->db->insert('karyawan', $data);
    }



    public function hapusDatakaryawan($username)
    {
        $this->db->where('username', $username);
        $this->db->delete('karyawan');
    }

    public function getkaryawanById($username)
    {
        return $this->db->get_where('karyawan', ['username' => $username])->row_array();
    }

    public function ubahkaryawan()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "nama" => $this->input->post('nama', true),
            "telp" => $this->input->post('telp', true),
            "level" => $this->input->post('level', true),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            "alamat" => $this->input->post('alamat', true),
            "id_loket" => $this->input->post('id_loket', true),

        ];
        $this->db->update('karyawan', $data);
        $this->db->where('username', $this->input->post('username'));
    }
}
