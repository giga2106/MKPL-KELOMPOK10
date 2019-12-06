<?php

  class Transaksi extends MY_Controller
  {

    function __construct() {
      parent::__construct();
      $this->load->model('Transaksi/M_transaksi');
        if($this->session->userdata('status') == "login"){
      } else {
        redirect(base_url("login"));
      }
    }

    function index() {
      $nama_profil = $this->session->userdata('nama_profil');
      $data['nama_profil'] = $nama_profil;
      $select = ['id_order','nama_pelanggan', 'tanggal_pembelian', 'batas_bayar', 'nama_pelanggan', 'status'];
      $table = "order";
      $data['data'] = $this->M_transaksi->select_all($select, $table);
      $data['content_view'] = 'Transaksi/Transaksi_v';
      $this->template->call_admin_template($data);
    }

    public function konfirmasi() {
       if (!is_numeric($this->uri->segment(3))) {
          redirect('transaksi');
       }
       $this->M_transaksi->update('order', ['status' => 'proses'], ['id_order' => $this->uri->segment(3)]);
       // redirect('transaksi');
    }

    public function delete() {

       if (!is_numeric($this->uri->segment(3))) {
          redirect('transaksi');
       }
       $this->M_transaksi->delete(['order', 't_detail_order'], ['id_order' => $this->uri->segment(3)]);
       redirect('transaksi');
    }

    public function detail() {

       if (!is_numeric($this->uri->segment(3))) {
          redirect('transaksi');
       }

       // $select = ['o.id_order AS id_order', 'tgl_pesan', 'bts_bayar', 'fullname', 'o.status AS status', 'nama_item', 'banyak'];

       // $table = "order o JOIN detail_order do ON (o.id_order = do.id_order) JOIN pelanggan u ON (o.id_pelanggan = u.id_pelanggan) JOIN peralatan i ON (do.id_peralatan = i.id_peralatan)";

       // $data['data'] = $this->M_transaksi->select_where($select, $table, ['o.id_order' => $this->uri->segment(3)]);
       $nama_profil = $this->session->userdata('nama_profil');
       $data['nama_profil'] = $nama_profil;
       $data['data'] = $this->M_transaksi->get_pelanggan_by($this->uri->segment(3));
       $data['datar'] = $this->M_transaksi->get_data_by($this->uri->segment(3));
       $data['content_view'] = 'Transaksi/Detail_Transaksi_v';
       $this->template->call_admin_template($data);
    }

  }
 ?>
