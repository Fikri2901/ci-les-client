<?php

class index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Jadwal';
        $data['jadwal'] = $this->jadwal_model->getAllJadwal();

        $this->load->view('templates/headerIndex', $data);
        $this->load->view('index/index_user', $data);
        $this->load->view('templates/footerIndex');
    }
}
