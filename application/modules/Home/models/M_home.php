<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model {

    function get_peralatan() {
      $query = $this->db->get('peralatan');
      return $query->result();
    }

    function get_peralatan_sort() {
      // $query = $this->db->get('peralatan');
      // $this->db->order_by("tgl_diubah", "desc");

      $this->db->select('*');
      $this->db->from('peralatan');
      $this->db->order_by("tgl_diubah","desc");
      $this->db->limit(4);
      $query=$this->db->get();
      return $query->result();
    }

    function get_merek() {
      $this->db->from('merek');
      $this->db->order_by("nama_merek", "asc");
      $query = $this->db->get();
      return $query->result();
    }

    function get_kategori() {
      $this->db->from('kategori');
      $this->db->order_by("nama_kategori", "asc");
      $query = $this->db->get();
      return $query->result();
    }

    function get_kategori_by($kat) {
      $this->db->select('*');
      $this->db->from('peralatan');
      $this->db->where('id_kategori',$kat);
      $query = $this->db->get();
      return $query->result();
    }

    function get_merek_by($kat) {
      $this->db->select('*');
      $this->db->from('peralatan');
      $this->db->where('id_merek',$kat);
      $query = $this->db->get();
      return $query->result();
    }

    function get_detail_by($id) {
      $this->db->select('*');
      $this->db->from('peralatan');
      $this->db->where('id_peralatan',$id);
      $query = $this->db->get();
      return $query->result();
    }

    public function get_product_keyword($keyword){
			$this->db->select('*');
			$this->db->from('peralatan');
			$this->db->like('nama_peralatan',$keyword);
			$this->db->or_like('harga_peralatan',$keyword);
      $query= $this->db->get();
			return $query->result();
		}

    function get_random_page() {
        $this->db->order_by('id_peralatan', 'RANDOM');
        $this->db->limit(4);
        $query = $this->db->get('Peralatan');
        return $query->result();
    }

    function get_profil_pengguna($id) {
      $this->db->select('*');
      $this->db->from('pelanggan');
      $this->db->where('id_pelanggan',$id);
      $query = $this->db->get();
      return $query->result();
    }

    function set_profil_pengguna($id,$n,$e,$t,$a) {
      $data = array(
        'nama_pelanggan' => $n,
        'email_pelanggan' => $e,
        'telepon_pelanggan' => $t,
        'alamat_pelanggan' => $a
      );
      $this->db->where('id_pelanggan',$id);
      $this->db->Update('pelanggan',$data);
    // $query=$this->db->query("update pelanggan SET nama_pelanggan='$n',email_pelanggan='$e',telepon_pelanggan='$t',alamat_pelanggan='$a'");
    }

    function cek_data($pmd5,$id) {
        $this->db->where('password_pelanggan',$pmd5);
        $this->db->where('id_pelanggan',$id);
        $query = $this->db->get('pelanggan');
        if ($query->num_rows() == 1){
            return True ;
        }
        else{
            return false;
        }
    }

    function set_pwd_pengguna($id,$u,$p) {
      $data = array(
        'username_pelanggan' => $u,
        'password_pelanggan' => $p
      );
      $this->db->where('id_pelanggan',$id);
      $this->db->Update('pelanggan',$data);
      // $query=$this->db->query("update pelanggan SET username_pelanggan='$u',password_pelanggan='$p'");
    }
    function get_order_by($id) {
      $this->db->select('*');
      $this->db->from('order');
      $this->db->where('id_pelanggan',$id);
      $query = $this->db->get();
      return $query->result();
    }
    function get_data_by($id) {
      $this->db->select('*');
      $this->db->from('order_detail');
      $this->db->join('peralatan','peralatan.id_peralatan=order_detail.id_peralatan','left');
      $this->db->where('id_order',$id);
      $query = $this->db->get();
      return $query->result();
    }
}
