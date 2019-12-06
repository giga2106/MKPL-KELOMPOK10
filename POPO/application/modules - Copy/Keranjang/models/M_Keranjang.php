<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_keranjang extends CI_Model {

  function get_peralatan_by($id) {
    $this->db->select('*');
    $this->db->from('peralatan');
    $this->db->where('id_peralatan',$id);
    $query = $this->db->get();
    return $query->row();
  }

  public function insert_customer($data) {
    $this->db->insert('pelanggan', $data);
    $id_order = $this->db->insert_id();
    return (isset($id_order)) ? $id_order : FALSE;
  }

  // public function insert_order($data) {
  //   $this->db->insert('order', $data);
  //   $id = $this->db->insert_id();
  //   return (isset($id)) ? $id : FALSE;
  // }

  public function insert_order_detail($data) {
    $this->db->insert('order_detail', $data);
  }

  function get_profil_pengguna($cust_id) {
    $this->db->select('*');
    $this->db->from('pelanggan');
    $this->db->where('id_pelanggan',$cust_id);
    $query = $this->db->get();
    return $query->result();
  }

  function insert_order($id,$n,$t,$a,$tgl,$tgl_batas,$tot) {
    $data = array(
      'id_pelanggan' => $id,
      'nama_pelanggan' => $n,
      'telepon_pelanggan' => $t,
      'alamat_pelanggan' => $a,
      'tanggal_pembelian' => $tgl,
      'batas_bayar'=> $tgl_batas,
      'total_pembelian' => $tot
    );
    $id_order = $this->db->insert('order',$data);
    // return (isset($id_order)) ? $id_order : FALSE;
    $insert_id = $this->db->insert_id();
   return  $insert_id;
  // $query=$this->db->query("update pelanggan SET nama_pelanggan='$n',email_pelanggan='$e',telepon_pelanggan='$t',alamat_pelanggan='$a'");
  }
  function update_stock($id,$data){
    $this->db->where('id_peralatan',$id);
    $this->db->Update('peralatan',$data);
  }

}
