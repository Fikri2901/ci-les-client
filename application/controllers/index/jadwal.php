<?php

class jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwal_model');
        $this->load->model('pengajar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Jadwal';
        $data['jadwal'] = $this->jadwal_model->getAllJadwal();
        $data['pengajar'] = $this->pengajar_model->getAllPengajar();

        $this->load->view('templates/headerIndex2', $data);
        $this->load->view('index/jadwal', $data);
        $this->load->view('templates/footerIndex');
    }
}
