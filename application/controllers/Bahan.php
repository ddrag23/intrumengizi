<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('m_bahan');
    }

    public function index()
    {
      $this->load->view('layout/main',[
        'title' => 'Daftar Bahan',
        'src' => 'module/bahan/v_list'
      ]);
    }

    public function json()
    {
       $list = $this->m_bahan->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $bahan) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $bahan->kode;
            $row[] = $bahan->nama_bahan;
            $row[] = $bahan->sumber_bahan;
            // add html for action
            $row[] = '<a href="'.site_url('bahan/detail/'.$bahan->kode).'" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                    <a href="'.site_url('bahan/hapus/'.$bahan->kode).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->m_bahan->count_all(),
                    "recordsFiltered" => $this->m_bahan->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
    }

    public function detail($kode)
    {
      $this->load->view('layout/main',[
        'title' => 'Detail',
        'src' => 'module/bahan/v_detail',
        'row' => $this->m_bahan->getByKode($kode)
      ]);
    }

    public function tambah()
    {
      $this->form_validation->set_rules('kode','Kode Bahan Makanan','required');
      $this->form_validation->set_rules('nama_bahan','Nama Bahan Makanan','required');
      $this->form_validation->set_rules('sumber_makanan','Sumber Makanan','required');
      $this->form_validation->set_rules('air','Kandungan Air','required');
      $this->form_validation->set_rules('energi','Kandungan Energi','required');
      $this->form_validation->set_rules('lemak','Kandungan Lemak','required');
      $this->form_validation->set_rules('Protein','Kandungan Protein','required');
      $this->form_validation->set_rules('kh','Kandungan Karbohidrat','required');
      $this->form_validation->set_rules('serat','Kandungan Serat','required');
      $this->form_validation->set_rules('abu','Kandungan Abu','required');
      $this->form_validation->set_rules('kalsium','Kandungan Kalsium','required');
      $this->form_validation->set_rules('fosfor','Kandungan Fosfor','required');
      $this->form_validation->set_rules('besi','Kandungan Besi','required');
      $this->form_validation->set_rules('natrium','Kandungan Natrium','required');
      $this->form_validation->set_rules('kalium','Kandungan Kalium','required');
      $this->form_validation->set_rules('tembaga','Kandungan Tembaga','required');
      $this->form_validation->set_rules('seng','Kandungan Seng','required');
      $this->form_validation->set_rules('retinol','Kandungan Retinol','required');
      $this->form_validation->set_rules('bkar','Kandungan B Kar','required');
      $this->form_validation->set_rules('karbototal','Kandungan Karbohidrat Total','required');
      $this->form_validation->set_rules('thiamin','Kandungan Thiamin','required');
      $this->form_validation->set_rules('ribowflavin','Kandungan Riboflavin','required');
      $this->form_validation->set_rules('niasin','Kandungan niasin','required');
      $this->form_validation->set_rules('vitc','Kandungan Vitamin C','required');
      $this->form_validation->set_rules('bdd','Kandungan BDD','required');
      $this->form_validation->set_message('required','{field} tidak boleh kosong');
      if($this->form_validation->run() == FALSE){
        $this->load->view('layout/main',[
          'title' => 'Tambah Bahan',
          'src' => 'module/bahan/v_add'
        ]);
      }else{
        $post = $this->input->post(null,true);
        $data = [
          'kode' => $post['kode'],
          'nama_bahan' => $post['nama_bahan'],
          'sumber_bahan' => $post['sumber_makanan'],
          'air' => $post['air'],
          'energi' => $post['energi'],
          'protein' => $post['protein'],
          'lemak' => $post['lemak'],
          'kh' => $post['kh'],
          'serat' => $post['serat'],
          'abu' => $post['abu'],
          'kalsium' => $post['kalsium'],
          'besi' => $post['besi'],
          'natrium' => $post['natrium'],
          'kalium' => $post['kalium'],
          'tembaga' => $post['tembaga'],
          'seng' => $post['seng'],
          'retinol' => $post['retinol'],
          'b_kar' => $post['bkar'],
          'kar_total' => $post['karbototal'],
          'thiamin' => $post['thiamin'],
          'riboflavin' => $post['riboflavin'],
          'niasin' => $post['niasin'],
          'vit_c' => $post['vitc'],
          'bdd' => $post['bdd'],
        ];
        $save = $this->m_bahan->save($data);
        if ($save) {
          $this->session->set_flashdata('sukses','Data berhasil ditambahkan');
        }
        redirect('bahan','refresh');
      }
    }

    public function hapus($kode)
    {
      $this->m_bahan->delete($kode);
      $this->session->set_flashdata('sukses','Data berhasil dihapus');
      redirect('bahan','refresh');
    }
}


