<?php

class pengajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengajar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pengajar';
        $data['pengajar'] = $this->pengajar_model->getAllPengajar();

        $this->load->view('templates/headerIndex2', $data);
        $this->load->view('index/pengajar', $data);
        $this->load->view('templates/footerIndex');
    }
}
