<?php
class M_pasien extends CI_Model
{
    public function get($id = null)
    {
      if (!empty($id)) {
        return $this->db->get_where('pasien_gizi',['id' =>$id]);
      }else{
        return $this->db->order_by('id','desc')->get('pasien_gizi');
      }
    }

}
