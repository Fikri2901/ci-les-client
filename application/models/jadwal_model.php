<?php

use GuzzleHttp\Client;


class jadwal_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci-les/index.php/api/'
        ]);
    }

    public function getAllJadwal()
    {
        // return $this->db->get('mahasiswa')->result_array();

        $response = $this->_client->request('GET', 'jadwal');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahDataJadwal()
    {
        $data = [
            "nama_paket" => $this->input->post('nama_paket', true),
            "id_pengajar" => $this->input->post('id_pengajar', true),
            "nama_pelajaran" => $this->input->post('nama_pelajaran', true),
            "hari" => $this->input->post('hari', true),
            "jam" => $this->input->post('jam', true),
            "harga" => $this->input->post('harga', true)
        ];

        // $this->db->insert('mahasiswa', $data);

        $response = $this->_client->request('POST', 'jadwal', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataJadwal($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa', ['id' => $id]);

        $response = $this->_client->request('DELETE', 'jadwal', [
            'form_params' => [
                'id_paket' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getJadwalById($id)
    {
        // return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();


        $response = $this->_client->request('GET', 'jadwal', [
            'query' => [
                'id_paket' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataJadwal()
    {
        $data = [
            "id_paket" => $this->input->post('id_paket', true),
            "nama_paket" => $this->input->post('nama_paket', true),
            "id_pengajar" => $this->input->post('id_pengajar', true),
            "nama_pelajaran" => $this->input->post('nama_pelajaran', true),
            "hari" => $this->input->post('hari', true),
            "jam" => $this->input->post('jam', true),
            "harga" => $this->input->post('harga', true)
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);

        $response = $this->_client->request('PUT', 'jadwal', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    // public function cariDataPengajar()
    // {
    //     $keyword = $this->input->post('keyword', true);
    //     $this->db->like('nama', $keyword);
    //     $this->db->or_like('jurusan', $keyword);
    //     $this->db->or_like('nrp', $keyword);
    //     $this->db->or_like('email', $keyword);
    //     return $this->db->get('mahasiswa')->result_array();
    // }
}
