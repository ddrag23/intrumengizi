<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_menu extends CI_Model
{
  public function get($id = null)
  {
    $this->db->join('pasien_gizi', 'pasien_gizi.id = menu_makanan.pasien_id');
    if (!empty($id)) {
      return $this->db->get_where('menu_makanan', ['id_menu' => $id]);
    } else {
      return $this->db->get('menu_makanan');
    }
  }

  public function getForPasien($id)
  {
    $this->db->join('pasien_gizi', 'pasien_gizi.id = menu_makanan.pasien_id');
    return $this->db->get_where('menu_makanan',['pasien_id' => $id]);

  }

  public function save($data)
  {
    $this->db->insert('menu_makanan', $data);
    return ($this->db->affected_rows() > 0) ? true : false;
  }

  public function update($id, $data)
  {
    $this->db->update('menu_makanan', $data, ['id_menu' => $id]);
    return ($this->db->affected_rows() > 0) ? true : false;
  }

  public function delete($id)
  {
    $this->db->trans_start();
    $this->db->delete('menu_makanan', ['pasien_id' => $id]);
    $this->db->delete('pasien_gizi', ['id' => $id]);
    $this->db->trans_complete();
  }
}
