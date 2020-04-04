<?php

use GuzzleHttp\Client;


class login_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci-les/index.php/api/'
        ]);
    }

    public function getAllLogin()
    {
        // return $this->db->get('mahasiswa')->result_array();

        $response = $this->_client->request('GET', 'login');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahDataLogin()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "level" => $this->input->post('level', true)

        ];

        // $this->db->insert('mahasiswa', $data);

        $response = $this->_client->request('POST', 'login', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataLogin($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa', ['id' => $id]);

        $response = $this->_client->request('DELETE', 'login', [
            'form_params' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getLoginById($id)
    {
        // return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();


        $response = $this->_client->request('GET', 'login', [
            'query' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataLogin()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "level" => $this->input->post('level', true)
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);

        $response = $this->_client->request('PUT', 'login', [
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
