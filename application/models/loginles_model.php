<?php

use GuzzleHttp\Client;

defined('BASEPATH') or exit('No direct scipt access allowes');
/**
 * 
 */


class loginles_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci-les/index.php/api/'
        ]);
    }

    public function login($username, $password)
    {
        $this->db->select('username, password, level');
        $this->db->from('login');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
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
}
