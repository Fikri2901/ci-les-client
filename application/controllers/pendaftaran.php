<?php

class pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendaftaran_model');
        $this->load->model('jadwal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pendaftaran';
        $data['pendaftaran'] = $this->pendaftaran_model->getAllPendaftaran();
        $data['jadwal'] = $this->jadwal_model->getAllJadwal();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Pendaftaran_model->cariDataPendaftaran();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pendaftaran';
        $data['jadwal'] = $this->jadwal_model->getAllJadwal();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('id_paket', 'Id_paket', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pendaftaran/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->pendaftaran_model->tambahDataPendaftaran();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pendaftaran');
        }
    }

    public function hapus($id)
    {
        $this->pendaftaran_model->hapusDataPendaftaran($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pendaftaran');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pendaftaran';
        $data['pendaftaran'] = $this->pendaftaran_model->getPendaftaranById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pendaftaran/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pendaftaran';
        $data['pendaftaran'] = $this->pendaftaran_model->getPendaftaranById($id);
        $data['jadwal'] = $this->jadwal_model->getAllJadwal();
        // $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('id_paket', 'Id_paket', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pendaftaran/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->pendaftaran_model->ubahDataPendaftaran();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pendaftaran');
        }
    }
}
