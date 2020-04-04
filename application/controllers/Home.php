<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }
    public function index($username = '')
    {
        $data['judul'] = 'Halaman Home';
        $data['username'] = $username;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
