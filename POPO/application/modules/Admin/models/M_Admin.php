<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {

  function get_Profil_by($id_admin) {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('id',$id_admin);
    $query = $this->db->get();
    return $query->result();
  }
  function cek_data($username) {
      $this->db->where('password',$username);
      $query1 = $this->db->get('admin');
      if ($query1->num_rows() == 1){
          return true;
      }
      else{
          return false;
      }
  }
  function update_data($id,$n,$u,$p) {
  $query=$this->db->query("update admin SET id='$id',Nama='$n',username='$u',password='$p'");
  }
  
  function get_count($data){
    $this->db->select('*');
    $this->db->from($data);
    return $this->db->count_all_results();
  }
}
