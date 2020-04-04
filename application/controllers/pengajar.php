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
        if ($this->input->post('keyword')) {
            $data['pengajar'] = $this->pengajar_model->cariDataPengajar();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pengajar/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pengajar';

        $this->form_validation->set_rules('nama_pengajar', 'Nama_pengajar', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pend_terakhir', 'Pend_terakhir', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pengajar/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->pengajar_model->tambahDataPengajar();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pengajar');
        }
    }

    public function hapus($id)
    {
        $this->pengajar_model->hapusDataPengajar($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pengajar');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pengajar';
        $data['pengajar'] = $this->pengajar_model->getPengajarById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pengajar/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pengajar';
        $data['pengajar'] = $this->pengajar_model->getPengajarById($id);
        // $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('nama_pengajar', 'Nama_pengajar', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pend_terakhir', 'Pend_terakhir', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pengajar/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->pengajar_model->ubahDataPengajar();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pengajar');
        }
    }
}
