<?php
class M_pasien extends CI_Model
{
  public function get($id = null)
  {
    if (!empty($id)) {
      return $this->db->get_where('pasien_gizi', ['id' => $id]);
    } else {
      return $this->db->order_by('id', 'desc')->get('pasien_gizi');
    }
  }

  public function save($data)
  {
    $this->db->insert('pasien_gizi', $data);
    return ($this->db->affected_rows() > 0 ? true : false);
  }

  public function update($id, $data)
  {
    $this->db->update('pasien_gizi', $data, ['id' => $id]);
    return ($this->db->affected_rows() > 0 ? true : false);
  }

  public function delete($id)
  {
    $this->db->delete('pasien_gizi', ['id' => $id]);
  }
}
