<?php

class M_peralatan extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function get_peralatan() {
    $query = $this->db->get('peralatan');
    return $query->result();
  }

  function get_aktif_kategori() {
    $query = $this->db->get('kategori');
    return $query->result();
  }

  function get_value_kategori($id) {
    $this->db->select('*');
    $this->db->from('kategori');
    $this->db->join('peralatan', 'peralatan.id_kategori = kategori.id_kategori', 'left');
    $this->db->where('peralatan.id_peralatan',$id);
    $query = $this->db->get();
    return $query->row();
  }

  function get_aktif_merek() {
    $query = $this->db->get('merek');
    return $query->result();
  }

  function get_value_merek($id) {
    $this->db->select('*');
    $this->db->from('merek');
    $this->db->join('peralatan', 'peralatan.id_merek = merek.id_merek', 'left');
    $this->db->where('peralatan.id_peralatan',$id);
    $query = $this->db->get();
    return $query->row();
  }

  function tambah_peralatan($data) {
    $query = $this->db->insert('peralatan',$data);
  }

  function get_pembelian() {
    $query = $this->db->get('pembelian');
    return $query->result();
  }

  function tampil_data_byid($id_peralatan) {
      $q="SELECT * FROM  peralatan WHERE id_peralatan='$id_peralatan'";
      $query=$this->db->query($q);
      return $query->row();
  }

	function update_data_dan_image($n,$h,$s,$b,$k,$d,$m,$f,$id) {
	$query=$this->db->query("update peralatan SET id_kategori='$k',id_merek='$m',nama_peralatan='$n',harga_peralatan='$h',stock_peralatan='$s',berat_peralatan='$b',foto_peralatan='$f',deskripsi_peralatan='$d' where id_peralatan='$id'");
	}
  function update_data($n,$h,$s,$b,$k,$d,$m,$id) {
  $query=$this->db->query("update peralatan SET id_kategori='$k',id_merek='$m',nama_peralatan='$n',harga_peralatan='$h',stock_peralatan='$s',berat_peralatan='$b',deskripsi_peralatan='$d' where id_peralatan='$id'");
  }

  function hapus_data($id) {
	$query=$this->db->query("delete  from peralatan where id_peralatan='".$id."'");
	}
  function get_image($id_peralatan) {
      $q="SELECT foto_peralatan FROM  peralatan WHERE id_peralatan='$id_peralatan'";
      $query=$this->db->query($q);
      return $query->row();
  }

}

 ?>
