<?php

class M_pelanggan extends CI_Model {

  function __construct()
  {
    parent::__construct();

  }

  function get_pelanggan() {
    $query = $this->db->get('pelanggan');
    return $query->result();
  }

  function delete($table = null, $where = null) {
    $this->db->where($where);
    $this->db->delete($table);
  }

}

 ?>
