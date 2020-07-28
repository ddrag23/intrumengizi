<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
        // model menu
        $this->load->model(['m_bahan', 'm_pasien']);
        $this->load->helper('url');
    }
    public function index()
    {
        // print_r($this->session->userdata());
        // die();
        $data['pasien_gizi'] = $this->m_pasien->get()->result();
        $data['nama_bahan'] = $this->m_pasien->get_nama_bahan()->result();
        // echo json_encode($data);
        // die();
        $data['src'] = 'account/listdata';
        $this->load->view('layout/main', $data);
    }
    public function tambah()
    {
        $data['src'] = 'account/inputdata';
        $data['bahan'] = $this->m_bahan->show()->result();
        $this->load->view('layout/main', $data);
    }
    public function tambah_simpan()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('usia', 'Usia', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
        $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'trim|required');
        $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('diagnosa_medis', 'Diagnosa Medis', 'trim|required');
        $this->form_validation->set_rules('karbohidrat', 'Karbohidrat', 'trim|required');
        $this->form_validation->set_rules('lemak', 'Lemak', 'trim|required');
        $this->form_validation->set_rules('protein', 'Protein', 'trim|required');
        $this->form_validation->set_rules('energi', 'Energi', 'trim|required');
        $this->form_validation->set_rules('menu[]', 'Menu Makanan', 'trim|required');
        $this->form_validation->set_message('required', '{field} tidak boleh kosong');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'alamat' => $this->input->post('alamat'),
                'usia' => $this->input->post('usia'),
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'berat_badan' => $this->input->post('berat_badan'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'diagnosa_medis' => $this->input->post('diagnosa_medis'),
                'karbohidrat' => $this->input->post('karbohidrat'),
                'lemak' => $this->input->post('lemak'),
                'protein' => $this->input->post('protein'),
                'energi' => $this->input->post('energi'),
                'menu' => $this->input->post('menu'),
                'berat' => $this->input->post('bahan')
            );
            echo json_encode($data);
            die();

            if ($this->m_bahan->tambah($data) == true) {
                $this->session->set_flashdata('tambah', true);
            } else {
                $this->session->set_flashdata('tambah', false);
            }
            redirect('pasien', 'refresh');
        }
    }
}
