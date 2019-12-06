<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

    function cek_login($table,$where){
  		return $this->db->get_where($table,$where);
  	}

    function get_nama_admin($username){
      $q="SELECT nama FROM  admin WHERE username='$username'";
      $query=$this->db->query($q);
      return $query->row();
    }
    function get_id_pelanggan($username){
      $q="SELECT id_pelanggan FROM  pelanggan WHERE username_pelanggan='$username'";
      $query=$this->db->query($q);
      return $query->row();
    }
    function get_nama_pelanggan($username){
      $q="SELECT nama_pelanggan FROM  pelanggan WHERE username_pelanggan='$username'";
      $query=$this->db->query($q);
      return $query->row();
    }
    function get_id($username){
      $q="SELECT id FROM  admin WHERE username='$username'";
      $query=$this->db->query($q);
      return $query->row();
    }

}
