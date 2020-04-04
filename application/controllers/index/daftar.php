<?php

class daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwal_model');
        $this->load->model('pendaftaran_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Jadwal';
        $data['jadwal'] = $this->jadwal_model->getAllJadwal();
        $data['pendaftaran'] = $this->pendaftaran_model->getAllPendaftaran();


        $this->load->view('templates/headerIndex2', $data);
        $this->load->view('index/daftar', $data);
        $this->load->view('templates/footerIndex');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('id_paket', 'Id_paket', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');

        if ($this->form_validation->run() == false) {
            // $this->load->view('templates/headerIndex2', $data);
            // $this->load->view('index/daftar', $data);
            // $this->load->view('templates/footerIndex');
        } else {
            $this->pendaftaran_model->tambahDataPendaftaran();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('index/daftar');
        }
    }
}
