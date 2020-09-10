<?php
class M_bahan extends CI_Model
{
    // start datatables
    var $column_order = array(null, 'kode', 'nama_bahan', 'sumber_bahan', 'energi' ); //set column field database for datatable orderable
    var $column_search = array('kode', 'nama_bahan', 'sumber_bahan'); //set column field database for datatable searchable
    var $order = array('kode' => 'asc'); // default order

    private function _get_datatables_query() {
        $this->db->select('kode,nama_bahan,sumber_bahan,energi,lemak,kh,protein');
        $this->db->from('semua_menu');
        $i = 0;
        foreach ($this->column_search as $item) { // loop column
            if(@$_POST['search']['value']) { // if datatable send POST for search
                if($i===0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }  else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_datatables() {
        $this->_get_datatables_query();
        if(@$_POST['length'] != -1)
        $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all() {
        $this->db->from('semua_menu');
        return $this->db->count_all_results();
    }
    // end datatables

    public function show()
    {
        return $this->db->order_by('nama_bahan', 'asc')->get('semua_menu');
        // $this->db->join('perencanaan_gizi');
    }
    public function getByKode($kode)
    {
        return  $this->db->get_where('semua_menu', ['kode' => $kode])->row();
    }
    public function save($data)
    {
        $this->db->insert('semua_menu', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function delete($kode)
    {
      $this->db->delete('semua_menu',['kode' => $kode]);
    }
}
