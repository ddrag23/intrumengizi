<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function get($id = null)
    {
      if (!empty($id)) {
        return $this->db->get_where('users', ['id_user' => $id]);
      }else{
        return $this->db->get('users');
      }
    }
    public function save($data)
    {
        $this->db->insert('users', $data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function update($post)
    {
      $data = [
        'username' => $post['username'],
        'nama' => $post['nama'],
        'no_hp' => $post['no_hp'],
        'alamat' => $post['alamat'],
        'email' => $post['email'],
        'role' => $post['role'],
      ];
      if (!empty($post['password'])) {
        $data['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
      }
      $this->db->update('users',$data,['id_user' => $post['id_user']]);
      return ($this->db->affected_rows() > 0 ? true : false);
    }

    public function delete($id)
    {
      $this->db->delete('users', ['id_user' => $id]);
    }
}
