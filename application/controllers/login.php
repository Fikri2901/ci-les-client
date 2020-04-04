<?php

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['login'] = $this->login_model->getAllLogin();
        if ($this->input->post('keyword')) {
            $data['login'] = $this->Login_model->cariDataLogin();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('login/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data User';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('login/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->login_model->tambahDataLogin();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('login');
        }
    }

    public function hapus($id)
    {
        $this->login_model->hapusDataLogin($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('login');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data User';
        $data['login'] = $this->login_model->getLoginById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('login/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data User';
        $data['login'] = $this->login_model->getLoginById($id);
        // $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('login/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->login_model->ubahDataLogin();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('login');
        }
    }
}
