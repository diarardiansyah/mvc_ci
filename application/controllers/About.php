<?php

class About extends CI_Controller {

    public function index($nama = "Diar", $job = "QA", $age = 25)
    {
        $data['nama'] = $nama;
        $data['job'] = $job;
        $data['age'] = $age;
        $data['judul'] = 'Halaman about';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}