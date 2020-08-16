<?php
class M_pasien extends CI_Model
{
    public function get()
    {
        return $this->db->order_by('id','desc')->get('pasien_gizi');
    }

}
