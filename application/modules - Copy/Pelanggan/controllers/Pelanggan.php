<?php

  class Pelanggan extends MY_Controller
  {

    function __construct()
    {
      parent::__construct();
          $this->load->model('M_Pelanggan');
    }

    function index()
    {
      $nama_profil = $this->session->userdata('nama_profil');
      $data['nama_profil'] = $nama_profil;
      $data['pelanggan'] = $this->M_Pelanggan->get_pelanggan();
      $data['content_view'] = 'Pelanggan/Pelanggan_v';
      $this->template->call_admin_template($data);
    }

    public function hapus($id) {
       $this->M_Pelanggan->delete(['pelanggan'] , ['id_pelanggan' => $id]);
       redirect('Admin/Pelanggan');
    }

  }

 ?>
