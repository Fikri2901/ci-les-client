<?php

use GuzzleHttp\Client;


class pengajar_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci-les/index.php/api/'
        ]);
    }

    public function getAllPengajar()
    {
        // return $this->db->get('mahasiswa')->result_array();

        $response = $this->_client->request('GET', 'pengajar');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahDataPengajar()
    {
        $data = [
            "nama_pengajar" => $this->input->post('nama_pengajar', true),
            "alamat" => $this->input->post('alamat', true),
            "pend_terakhir" => $this->input->post('pend_terakhir', true),
            "telepon" => $this->input->post('telepon', true)
        ];

        // $this->db->insert('mahasiswa', $data);

        $response = $this->_client->request('POST', 'pengajar', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataPengajar($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa', ['id' => $id]);

        $response = $this->_client->request('DELETE', 'pengajar', [
            'form_params' => [
                'id_pengajar' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getPengajarById($id)
    {
        // return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();


        $response = $this->_client->request('GET', 'pengajar', [
            'query' => [
                'id_pengajar' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataPengajar()
    {
        $data = [
            "id_pengajar" => $this->input->post('id_pengajar', true),
            "nama_pengajar" => $this->input->post('nama_pengajar', true),
            "alamat" => $this->input->post('alamat', true),
            "pend_terakhir" => $this->input->post('pend_terakhir', true),
            "telepon" => $this->input->post('telepon', true)
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);

        $response = $this->_client->request('PUT', 'pengajar', [
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
