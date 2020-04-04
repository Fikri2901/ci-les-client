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


        $this->load->view('templates/header', $data);
        $this->load->view('jadwal/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['pengajar'] = $this->pengajar_model->getAllPengajar();
        $data['judul'] = 'Form Tambah Data Jadwal';

        $this->form_validation->set_rules('nama_paket', 'Nama_paket', 'required');
        $this->form_validation->set_rules('id_pengajar', 'Id_pengajar', 'required');
        $this->form_validation->set_rules('nama_pelajaran', 'Nama_pelajaran', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('jadwal/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->jadwal_model->tambahDataJadwal();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('jadwal');
        }
    }

    public function hapus($id)
    {
        $this->jadwal_model->hapusDataJadwal($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('jadwal');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Jadwal';
        $data['jadwal'] = $this->jadwal_model->getJadwalById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('jadwal/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Jadwal';
        $data['jadwal'] = $this->jadwal_model->getJadwalById($id);
        // $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('nama_paket', 'Nama_paket', 'required');
        $this->form_validation->set_rules('id_pengajar', 'Id_pengajar', 'required');
        $this->form_validation->set_rules('nama_pelajaran', 'Nama_pelajaran', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('jadwal/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->jadwal_model->ubahDataJadwal();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('jadwal');
        }
    }
}
