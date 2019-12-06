<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_transaksi extends CI_Model {

  function select_all($select, $table)
	{
		$this->db->select($select);
		$this->db->from($table);

		return $this->db->get();
	}

  // function get_data($id){
  //   $this->db->select('*');
  //   $this->db->from('order_detail');
  //   $this->db->where('id_order',$id);
  //   return $this->db->get();
  // }

  // function select_where($select, $table, $where) {
  //   $this->db->select($select);
  //   $this->db->from($table);
  //   $this->db->where($where);
  //
  //   return $this->db->get();
  // }
  function update($table = null, $data = null, $where = null) {
		return $this->db->update($table, $data, $where);
	}
  function delete($table = null, $where = null) {
		$this->db->where($where);
		$this->db->delete($table);
	}
  function get_data_by($id) {
    $this->db->select('*');
    $this->db->from('order_detail');
    $this->db->join('peralatan','peralatan.id_peralatan=order_detail.id_peralatan','left');
    $this->db->where('id_order',$id);
    $query = $this->db->get();
    return $query->result();
  }

  function get_pelanggan_by($id) {
    $this->db->select('*');
    $this->db->from('order');
    $this->db->where('id_order',$id);
    $query = $this->db->get();
    return $query->result();
  }

}
