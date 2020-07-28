<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function get()
    {
        return $this->db->get('users');
    }
    public function save($data)
    {
        $this->db->insert('users', $data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
}
