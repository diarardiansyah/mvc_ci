<?php

class Mahasiswa extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {   
        $data['judul'] = 'Data mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMhs();

        if ( $this->input->post('keyword') )
        {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMhs();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        
        $data['judul'] = 'Tambah data mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required'); // <- parameter 1 name dari form, parameter 2 alias untuk pesan error nya 
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('tempat_tinggal', 'Tempat Tinggal', 'required');

        if ( $this->form_validation->run() == FALSE )
        {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');

        } else {

            $this->Mahasiswa_model->tambahDataMhs();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
            
        }  
       
    }

    public function hapus($id_mahasiswa) 
    {
        $this->Mahasiswa_model->hapusDataMhs($id_mahasiswa);
        $this->session->set_flashdata('flash', 'Dihapus'); // <- Paramater 1 = Nama session nya, Parameter 2 = Pesan nya apa
        redirect('mahasiswa');
    }

    public function detail($id_mahasiswa)
    {
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getDataMhsById($id_mahasiswa);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_mahasiswa)
    {
        $data['judul'] = 'Halaman Ubah Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getDataMhsById($id_mahasiswa);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin', 'Manajemen'];
        $data['jenis_kelamin'] = ['Laki Laki', 'Perempuan'];

        $this->form_validation->set_rules('nama', 'Nama', 'required'); // <- parameter 1 name dari form, parameter 2 alias untuk pesan error nya 
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('tempat_tinggal', 'Tempat Tinggal', 'required');

        if ( $this->form_validation->run() == FALSE )
        {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');

        } else {

            $this->Mahasiswa_model->ubahDataMhs();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa');
            
        }  
    }

    
}