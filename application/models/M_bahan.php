<?php
class M_bahan extends CI_Model
{
    public function show()
    {
        return $this->db->order_by('nama_bahan', 'asc')->get('semua_menu');
        // $this->db->join('perencanaan_gizi');
    }
    public function getByKode($kode)
    {
        return  $this->db->get_where('semua_menu', ['kode' => $kode])->row();
    }
    public function tambah($data)
    {
        $this->db->insert('pasien_gizi', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
}
