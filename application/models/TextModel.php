<?php

class TextModel extends CI_Model
{
    public function getALltext()
    {
        return $this->db->get('text_jalan')->result_array();
    }

    public function Tambah()
    {
        $data = [
            "text" => $this->input->post('text', true),
            "img" => $this->input->post('img', true),
        ];

        $this->db->insert('text_jalan', $data);
    }



    public function hapusDatatext($id_text)
    {
        $this->db->where('id_text', $id_text);
        $this->db->delete('text');
    }

    public function gettextById($id_text)
    {
        return $this->db->get_where('text_jalan', ['id_text' => $id_text])->row_array();
    }

    public function ubahtext()
    {
        $data = [
            "text" => $this->input->post('text', true),
            "img" => $this->input->post('img', true),
        ];
        $this->db->update('text_jalan', $data);
        $this->db->where('id_text', $this->input->post('id_text'));
    }
}
