<?php
class M_pasien extends CI_Model
{
    public function get()
    {
        return $this->db->get('pasien_gizi');
    }

    public function get_nama_bahan()
    {
        $this->db->query('select * from semua_menu');
        return;
    }
}
