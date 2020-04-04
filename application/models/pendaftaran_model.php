<?php

use GuzzleHttp\Client;


class pendaftaran_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci-les/index.php/api/'
        ]);
    }

    public function getAllPendaftaran()
    {
        // return $this->db->get('mahasiswa')->result_array();

        $response = $this->_client->request('GET', 'pendaftaran');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahDataPendaftaran()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "id_paket" => $this->input->post('id_paket', true),
            "telepon" => $this->input->post('telepon', true)
        ];

        // $this->db->insert('mahasiswa', $data);

        $response = $this->_client->request('POST', 'pendaftaran', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataPendaftaran($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa', ['id' => $id]);

        $response = $this->_client->request('DELETE', 'pendaftaran', [
            'form_params' => [
                'id_pendaftaran' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getPendaftaranById($id)
    {
        // return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();


        $response = $this->_client->request('GET', 'pendaftaran', [
            'query' => [
                'id_pendaftaran' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataPendaftaran()
    {
        $data = [
            "id_pendaftaran" => $this->input->post('id_pendaftaran', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "id_paket" => $this->input->post('id_paket', true),
            "telepon" => $this->input->post('hari', true)
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);

        $response = $this->_client->request('PUT', 'pendaftaran', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
