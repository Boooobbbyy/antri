<?php

class LoketModel extends CI_Model
{
    public function getALlloket()
    {
        return $this->db->get('loket')->result_array();
    }

    public function Tambah()
    {
        $data = [
            "loket" => $this->input->post('loket', true),
            "status" => $this->input->post('status', true),
        ];

        $this->db->insert('loket', $data);
    }



    public function hapusDataloket($id_loket)
    {
        $this->db->where('id_loket', $id_loket);
        $this->db->delete('loket');
    }

    public function getloketById($id_loket)
    {
        return $this->db->get_where('loket', ['id_loket' => $id_loket])->row_array();
    }

    public function ubahloket()
    {
        $data = [
            "loket" => $this->input->post('loket', true),
            "status" => $this->input->post('status', true),

        ];
        $this->db->update('loket', $data);
        $this->db->where('id_loket', $this->input->post('id_loket'));
    }
}
