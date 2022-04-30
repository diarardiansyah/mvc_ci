<?php

class Mahasiswa_model extends CI_Model {

    public function getAllMhs()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function hapusDataMhs($id_mahasiswa)
    {
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        $this->db->delete('mahasiswa');
    }

    public function tambahDataMhs()
    {
        $data = [

            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "jurusan" => $this->input->post('jurusan', true),
            "tempat_tinggal" => $this->input->post('tempat_tinggal', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),

        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function getDataMhsById($id_mahasiswa)
    {
        return $this->db->get_where('mahasiswa', ['id_mahasiswa' => $id_mahasiswa])->row_array();
    }

    public function ubahDataMhs()
    {
        $data = [

            "nama" => $this->input->post('nama', true),
            "nim" => $this->input->post('nim', true),
            "jurusan" => $this->input->post('jurusan', true),
            "tempat_tinggal" => $this->input->post('tempat_tinggal', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),

        ];

        $this->db->where('id_mahasiswa', $this->input->post('id_mahasiswa') );
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMhs()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}