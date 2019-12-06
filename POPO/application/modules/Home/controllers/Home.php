<?php
class Home extends MY_Controller
{
  function __construct() {
    parent::__construct();
    $this->load->model('Home/M_home');
    $this->load->library('session');
    $this->load->helper('security');
    $this->load->helper('url');
    $this->load->library(array('cart','form_validation'));
  }

  function index() {
    // $nama_profil = $this->session->userdata('nama_profil');
    $data['data_peralatan'] = $this->lihat_peralatan_sort();
    $data['content'] = 'Home/Home_peralatan_v';
    $this->template->main_page2_template($data);
  }

  function Peralatan(){
    $data['data_merek'] = $this->lihat_merek();
    $data['data_kategori'] = $this->lihat_kategori();
    $data['data_peralatan'] = $this->lihat_peralatan();
    $data['content'] = 'Home/Tampil_peralatan_v';
    $this->template->main_page2_template($data);
  }
//display all kategori
  function lihat_peralatan_sort(){
    $data_peralatan = $this->M_home->get_peralatan_sort();
    return $data_peralatan;
  }
  function lihat_peralatan(){
    $data_peralatan = $this->M_home->get_peralatan();
    return $data_peralatan;
  }
//display nav kategori
  function lihat_merek(){
    $data_merek = $this->M_home->get_merek();
    return $data_merek;
  }
//display nav kategori
  function lihat_kategori(){
    $data_kategori = $this->M_home->get_kategori();
    return $data_kategori;
  }
//url kategori
  function kategori($id){
    $data['data_merek'] = $this->lihat_merek();
    $data['data_kategori'] = $this->lihat_kategori();
    $data['data_peralatan'] = $this->M_home->get_kategori_by($id);
    $data['content'] = 'Home/Tampil_peralatan_v';
    $this->template->main_page2_template($data);
  }

  function merek($id){
    $data['data_merek'] = $this->lihat_merek();
    $data['data_kategori'] = $this->lihat_kategori();
    $data['data_peralatan'] = $this->M_home->get_merek_by($id);
    $data['content'] = 'Home/Tampil_peralatan_v';
    $this->template->main_page2_template($data);
  }
  function detail($id){
    $data['data_merek'] = $this->lihat_merek();
    $data['data_kategori'] = $this->lihat_kategori();
    $data['data_detail'] = $this->M_home->get_detail_by($id);
    $data['data_random'] = $this->M_home->get_random_page();
    $data['content'] = 'Home/Detail_peralatan_v';
    $this->template->main_page2_template($data);
  }

  function pencarian(){
      $data['data_merek'] = $this->lihat_merek();
      $data['data_kategori'] = $this->lihat_kategori();
			$keyword = $this->input->post('keyword');
      $data['data_peralatan'] = $this->M_home->get_product_keyword($keyword);
      $data['content'] = 'Home/Tampil_peralatan_v';
      $this->template->main_page2_template($data);
	}

  // function keranjang(){
  //   $this->load->model('Keranjang/M_keranjang');
  //   $this->keranjang->index();
  // }

  function Tambah(){
    $this->keranjang->add();
  }
  function Hapus(){
    $this->keranjang->delete();
  }

  function logout_pengguna(){
      $this->session->unset_userdata('nama_pelanggan');
      $this->session->unset_userdata('status_pelanggan');
      $this->session->unset_userdata('id_pelanggan');
      $this->cart->destroy();
      echo '<script type="text/javascript">window.history.go(-1);</script>';
  }

  function Profil($id){
    $data['data_profil'] = $this->M_home->get_profil_pengguna($id);
    $data['content'] = 'Home/Profil_v';
    $this->template->main_page2_template($data);
  }

  function Profil_pwd($id){
    $data['data_profil'] = $this->M_home->get_profil_pengguna($id);
    $data['content'] = 'Home/Ganti_pwd_v';
    $this->template->main_page2_template($data);
  }

  function Update_profil($id){
    $this->form_validation->set_message('required', '%s harus diisi');
    $this->form_validation->set_rules('nama_pelanggan', 'Nama', 'required');
    $this->form_validation->set_rules('email_pelanggan', 'Email', 'required');
    $this->form_validation->set_rules('telepon_pelanggan', 'Telepon', 'required|numeric');
    $this->form_validation->set_rules('alamat_pelanggan', 'Alamat', 'required');
      if ($this->form_validation->run() == TRUE) {
        $n=$this->input->post('nama_pelanggan');
        $e=$this->input->post('email_pelanggan');
        $t=$this->input->post('telepon_pelanggan');
        $a=$this->input->post('alamat_pelanggan');
        $this->M_home->set_profil_pengguna($id,$n,$e,$t,$a);
        $this->session->set_userdata('nama_pelanggan', $n);
        redirect("");
      }
      $data['data_profil'] = $this->M_home->get_profil_pengguna($id);
      $data['content'] = 'Home/Profil_v';
      $this->template->main_page2_template($data);
      // redirect("Admin/Peralatan");
    }

    function Update_profil_pwd($id){
      if ($this->session->flashdata('reg')) {
        $this->session->unset_userdata('reg');
      }elseif ($this->session->flashdata('saran')) {
        $this->session->unset_userdata('saran');
      }
      $this->form_validation->set_message('required', '%s Harus diisi');
      $this->form_validation->set_message('min_length', '%s Minimal 6 karakter');
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password', 'Password Lama', 'required|min_length[6]');
      $this->form_validation->set_rules('repassword', 'Password Baru', 'required|min_length[6]');
      if ($this->form_validation->run() == TRUE) {
        $cekp=$this->input->post('password');
        $pmd5= md5($cekp);
        if ($this->M_home->cek_data($pmd5,$id) == TRUE) {
          $u=$this->input->post('username');
          $p1=$this->input->post('password');
          $p2=$this->input->post('repassword');
          $p = md5($p2);
          $this->M_home->set_pwd_pengguna($id,$u,$p);
          $this->session->set_flashdata('saran', 'Silahkan Login Ulang');
          redirect('');
        }else {
          $this->session->set_flashdata('reg', 'Password lama anda salah');
        }
      }
      $data['data_profil'] = $this->M_home->get_profil_pengguna($id);
      $data['content'] = 'Home/Ganti_pwd_v';
      $this->template->main_page2_template($data);
    }

    function Transaksi(){
      $data['data_order'] = $this->M_home->get_order_by($this->session->userdata('id_pelanggan'));
      $data['data_profil'] = $this->session->userdata('id_pelanggan');
      $data['content'] = 'Home/Tampil_transaksi_v';
      $this->template->main_page2_template($data);
    }
    function Detail_Barang(){
      $data['data_Detail_order'] = $this->M_home->get_data_by($this->uri->segment(3));
      $data['data_profil'] = $this->session->userdata('id_pelanggan');
      $data['content'] = 'Home/Tampil_detail_transaksi_v';
      $this->template->main_page2_template($data);
    }

}

 ?>
