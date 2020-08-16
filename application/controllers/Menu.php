<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model(['m_pasien','m_bahan','m_menu']);
  }

  public function index()
  {
    $this->form_validation->set_rules('pasien_id','Nama Pasien','required');
    $this->form_validation->set_rules('nama_menu','Nama Menu','required');
    $this->form_validation->set_rules('nama_bahan[]','Bahan Makanan','required');
    $this->form_validation->set_rules('berat','Berat','required');
    if($this->form_validation->run() == FALSE){
      $this->load->view('layout/main',[
        'title' => 'Tambah Menu',
        'src' => 'module/menu/v_add',
        'pasien' => $this->m_pasien->get()->result(),
        'bahan' => $this->m_bahan->show()->result()
      ]);
    }else{
        $post = $this->input->post(null,true);
        $bahan = $this->m_bahan->show()->result();
        $kebutuhan = $this->m_pasien->get()->result();
        $berat = explode(",",$post['berat']);
        $menu = explode(",",$post['nama_menu']);
        $energi = [];
        $protein = [];
        $lemak = [];
        $kh = [];
        foreach ($bahan as $b) {
          foreach ($post['nama_bahan'] as $p) {
            if ($b->nama_bahan == $p) {
              foreach ($berat as $key => $value) {
                $energi[$key] = $b->energi * intval($value) / 100 ;
                $protein[$key] = $b->protein * intval($value) / 100 ;
                $kh[$key] = $b->kh * intval($value) / 100 ;
                $lemak[$key] = $b->lemak * intval($value) / 100 ;
              }
            }
          }
        }
        $total = ['energi' => array_sum($energi), 'protein' => array_sum($protein), 'kh' => array_sum($kh),'lemak' => array_sum($lemak)];
        foreach ($kebutuhan as $k) {
          $pemenuhan = [
            'totalEnergi' => $total['energi'] / $k->energi * 100,
            'totalProtein' => $total['protein'] / $k->protein * 100,
            'totalKh' => $total['kh'] / $k->karbohidrat *100,
            'totalLemak' => $total['lemak'] / $k->lemak * 100
          ];
        }
        $data = [
          'pasien_id' => $post['pasien_id'],
          'nama_menu' => json_encode($menu),
          'nama_bahan' => json_encode($post['nama_bahan']),
          'berat' => json_encode($berat),
          'energi' => json_encode($energi),
          'protein' => json_encode($protein),
          'karbohidrat' => json_encode($kh),
          'lemak' => json_encode($lemak),
          'total' => json_encode($total),
          'pemenuhan_gizi' => json_encode($pemenuhan)
        ];
         $save = $this->m_menu->save($data);
        /* echo json_encode($data); */
        /* die(); */
        if ($save) {
          $this->session->set_flashdata('sukses', 'data berhasil ditambahkan');
        }
        redirect('pasien','refresh');
    }
  }
}


