<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {

        // Fungsi Login
        $valid = $this->form_validation;

        $valid->set_rules('username', 'Username', 'required');
        $valid->set_rules('password', 'Password', 'required');

        if ($valid->run() == false) {
            $this->load->view('account/v_login');
        } else {
            $this->_login();
        }
        // End fungsi login
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == '1') {
                if (password_verify($password, $user['password'])) {
                    $session = [
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($session);
                    $this->session->set_flashdata('sukses', 'selamat datang di instrumen tekonologi perencanaan menu diet');
                    redirect('dashboard', 'refresh');
                } else {
                    $this->session->set_flashdata('msg', 'password yang anda masukkan salah');
                    redirect('login', 'refresh');
                }
            } else {
                $this->session->set_flashdata('msg', 'akun anda sudah nonaktif silahkan hubungi admin');
                redirect('login', 'refresh');
            }
        } else {
            $this->session->set_flashdata('msg', 'username anda salah');
            redirect('login', 'refresh');
        }
    }

    public function logout()
    {
        $this->simple_login->logout();
    }
}
