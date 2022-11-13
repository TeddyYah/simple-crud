<?php

class mahasiswa_model extends CI_model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('tbl_mahasiswa')->result_array();
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('tbl_mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "kelas" => $this->input->post('kelas', true),
            "tugas" => $this->input->post('tugas', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_mahasiswa', $data);
    }

    public function getHapusMahasiswa($id)
    {
        $this->db->delete('tbl_mahasiswa', ['id' => $id]);
    }

}