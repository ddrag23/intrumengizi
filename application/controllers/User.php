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
        $data['title'] = 'List Users';
        $this->load->view('layout/main', $data);
    }
    public function tambah()
    {
        $data['src'] = 'module/users/tambahuser';
        $data['title'] = 'Users';
        $this->load->view('layout/main', $data);
    }
    public function tambah_simpan()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('role', 'Level Users', 'required');
        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            $post = $this->input->post(null, true);
            $data = [
                'username' => $post['username'],
                'nama' => $post['nama'],
                'email' => $post['email'],
                'password' => password_hash($post['username'], PASSWORD_DEFAULT),
                'role' => $post['role'],
                'is_active' => '1'
            ];
            ($this->m_user->save($data) == true) ? $this->session->flashdata('sukses', 'data berhasil di input') : $this->session->set_flashdata('msg', 'data gagal');
            redirect('user', 'refresh');
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('role', 'Level Users', 'required');
        if($this->form_validation->run() == FALSE){
          $query = $this->m_user->get($id);
          if ($query->num_rows() > 0) {
            $this->load->view('layout/main',[
              'src' => 'module/users/v_edit',
              'title' => 'Edit Users',
              'query' => $query->row()
            ]);
          } else {
            show_404();
          }
        }else{
          $post = $this->input->post(null,true);
          $update = $this->m_user->update($post);
          if ($update) {
            $this->session->set_flashdata('sukses','Data berhasil diubah');
          }
          redirect('user','refresh');
        }
    }

    public function hapus($id)
    {
      $this->m_user->delete($id);
      $this->session->set_flashdata('sukses','Data berhasil dihapus');
      redirect('user','refresh');
    }
}
