<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_menu extends CI_Model
{
  public function get($id = null)
  {
    $this->db->join('pasien_gizi', 'pasien_gizi.id = menu_makanan.pasien_id');
    if (!empty($id)) {
      return $this->db->get_where('menu_makanan',['id_menu' => $id]);
    }else{
      return $this->db->get('menu_makanan');
    }
  }

  public function save($data)
  {
    $this->db->insert('menu_makanan',$data);
    return ($this->db->affected_rows() > 0) ? true : false;
  }
}

