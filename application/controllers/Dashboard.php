<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
        // model menu
        $this->load->model('m_bahan');
    }

    //Load Halaman dashboard
    public function index()
    {
        $data['semua_menu'] = $this->m_bahan->show()->result();
        $data['src'] = 'account/v_dashboard';
        $data['title'] = 'Dashboard';
        $this->load->view('layout/main', $data);
    }
}
