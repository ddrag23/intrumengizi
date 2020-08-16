<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_menu extends CI_Model
{
  public function get()
  {
    $this->db->get('menu_makanan');
  }

  public function save($data)
  {
    $this->db->insert('menu_makanan',$data);
    return ($this->db->affected_rows() > 0) ? true : false;
  }
}

