
<?php
defined('BASEPATH') or exit('No direct scipt access allowes');
/**
 * 
 */
class loginles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model("loginles_model");
        $this->load->model("login_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('templates/headerlogin', $data);
        $this->load->view('loginles/index', $data);
    }
    public function proses_login()
    {
        $this->load->model("login_model");
        $this->load->model("loginles_model");
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));
        $ceklogin = $this->loginles_model->login($username, $password);


        if ($ceklogin != false) {
            foreach ($ceklogin as $row) {
                $this->load->library('session');
                $this->session->set_userdata('username', $row->username);
                $this->session->set_userdata('level', $row->level);

                if ($this->session->userdata('level') == 'admin') {
                    redirect('Home');
                } else {
                    redirect('index/indexUser');
                }
            }
        } else {
            // $data ['pesan']='Username dan Password Anda salah!';
            // $data ['title']='Login';
            // $this->load->view('admin/template/header_login', $data);
            // $this->load->view('login/index', $data);
            echo "<script>alert('Berhasil Registrasi');</script>";
            redirect('masuk/loginles');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('masuk/loginles', 'refresh');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data User';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/headerlogin', $data);
            $this->load->view('loginles/registrasi', $data);
        } else {
            $this->loginles_model->tambahDataLogin();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('masuk/loginles');
        }
    }
}
?>

