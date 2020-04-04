<?php

class editLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Jadwal';
        $data['login'] = $this->login_model->getAllLogin();

        $this->load->view('templates/headerIndex1', $data);
        $this->load->view('index/edit', $data);
        $this->load->view('templates/footerIndex');
    }
}
