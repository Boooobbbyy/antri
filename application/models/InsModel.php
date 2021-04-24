<?php

class InsModel extends CI_Model
{
    public function getALlinstansi()
    {
        return $this->db->get('instansi')->result_array();
    }

    public function Tambah()
    {
        $data = [
            "instansi" => $this->input->post('instansi', true),
            "logo" => $this->input->post('logo', true),
            "telp" => $this->input->post('telp', true),
            "alamat" => $this->input->post('alamat', true),
        ];

        $this->db->insert('instansi', $data);
    }



    public function hapusDatainstansi($id_instansi)
    {
        $this->db->where('id_instansi', $id_instansi);
        $this->db->delete('instansi');
    }

    public function getinstansiById($id_instansi)
    {
        return $this->db->get_where('id_instansi', ['id_instansi' => $id_instansi])->row_array();
    }

    public function ubahinstansi()
    {
        $data = [
            "instansi" => $this->input->post('instansi', true),
            "logo" => $this->input->post('logo', true),
            "telp" => $this->input->post('telp', true),
            "alamat" => $this->input->post('alamat', true),
        ];
        $this->db->update('instansi', $data);
        $this->db->where('id_instansi', $this->input->post('id_instansi'));
    }
}
