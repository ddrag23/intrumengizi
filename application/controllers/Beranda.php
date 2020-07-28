<?php

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_bahan');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['semua_menu'] = $this->m_bahan->show()->result();
        $this->load->view('account/beranda', $data);
    }
    public function detail($kode)
    {
        // echo json_encode($this->m_bahan->getByKode($kode));

        $this->load->view('account/detail', [
            'row' => $this->m_bahan->getByKode($kode),
        ]);
    }
}
