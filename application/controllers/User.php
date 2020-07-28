<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }
    public function index()
    {
        $data['daftar_user'] = $this->m_user->get()->result();
        $data['src'] = 'module/users/listuser';
        $this->load->view('layout/main', $data);
    }
    public function tambah()
    {
        $data['src'] = 'module/users/tambahuser';
        $this->load->view('layout/main', $data);
    }
    public function tambah_simpan()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            $post = $this->input->post(null, true);
            $data = [
                'username' => $post['username'],
                'nama' => $post['nama'],
                'email' => $post['email'],
                'password' => password_hash($post['username'], PASSWORD_DEFAULT),
                'role' => 'ahli_gizi',
                'is_active' => '1'
            ];
            ($this->m_user->save($data) == true) ? $this->session->flashdata('sukses', 'data berhasil di input') : $this->session->set_flashdata('msg', 'data gagal');
            redirect('user', 'refresh');
        }
    }
}
