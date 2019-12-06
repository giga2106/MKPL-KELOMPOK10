<?php

  class Template extends MY_Controller
  {

    function __construct() {
      parent::__construct();
      $this->load->library('cart','session');
    }

    function index(){
      $data['content'] = 'Home/Home_peralatan_v';
      $this->load->view('Template/Main_template',$data);

    }
    function call_admin_template($data = NULL) {
      $this->load->view('Template/sample_template_v', $data);
    }

    function main_page2_template($data = NULL) {
      $data['cek_harga'] = $this->cek_harga();
      $data['cek_beli'] = $this->cek_beli();
      $data['nav_cek'] = $this->nav_cek();
      $this->load->view('Template/Main_template', $data);
    }

    function nav_cek(){
      if($this->session->userdata('status_pelanggan') != "login"){
        return TRUE;
      } else {
        return FALSE;
      }
    }

    function cek_beli(){
      if ($this->cart->total_items() == 0) {
        return "Keranjang Kosong";
      }else {
        $nominal=$this->cart->total_items();
        return "Ada ( ".$nominal." Barang )";
      }
    }

    function cek_harga(){
      if ($this->cart->total() == 0) {
        return "Total Rp 0";
      }else {
        $nominal=$this->cart->total();
        return "Total Rp ".number_format($nominal)." ";
      }
    }
  }

 ?>
