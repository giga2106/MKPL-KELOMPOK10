<?php

  class Admin extends MY_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->library(array('form_validation'));
      $this->load->model('M_admin');
      $this->load->library('session');
      if($this->session->userdata('status') == "login"){
    } else {
      redirect(base_url("login"));
    }
      $this->load->module([
        // 'produk',
        'pelanggan'
        // 'pembelian',
        // 'tambah_produk',
        // 'tambah'
      ]);
    }

    function index() {
      $nama_profil = $this->session->userdata('nama_profil');
      $data['data_peralatan'] = $this->M_admin->get_count('peralatan');
      $data['data_pelanggan'] = $this->M_admin->get_count('pelanggan');
      $data['data_transaksi'] = $this->M_admin->get_count('order');
      $data['nama_profil'] = $nama_profil;
      $data['content_view'] = 'Admin/Admin_v';
      $this->template->call_admin_template($data);
    }


    function pelanggan()
    {
      $this->pelanggan->index();
    }

    function Profil()
    {
      $data['nama_profil'] = $this->session->userdata('nama_profil');
      $id_admin =  $this->session->userdata('id');
      $data['data_profil'] = $this->M_admin->get_Profil_by($id_admin);
      $data['content_view'] = 'Admin/Profil_admin';
      $this->template->call_admin_template($data);
    }
    function Update_profil(){
      if ($this->session->flashdata('reg')) {
        $this->session->unset_userdata('reg');
      }elseif ($this->session->flashdata('saran')) {
        $this->session->unset_userdata('saran');
      }
      $this->form_validation->set_message('required', '%s Harus diisi');
      $this->form_validation->set_message('min_length', '%s Minimal 6 karakter');
      $this->form_validation->set_rules('nama','Nama','required');
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password', 'Password Lama', 'required|min_length[6]');
      $this->form_validation->set_rules('repassword', 'Password Baru', 'required|min_length[6]');
      if ($this->form_validation->run() == TRUE) {
        $cekp=$this->input->post('password');
        $pmd5= md5($cekp);
        if ($this->M_admin->cek_data($pmd5) == true) {
          $id =  $this->session->userdata('id');
          $u=$this->input->post('username');
          $n=$this->input->post('nama');
          $p1=$this->input->post('password');
          $p2=$this->input->post('repassword');
          $p = md5($p2);

          $this->M_admin->update_data($id,$n,$u,$p);
          $this->session->set_flashdata('saran', 'Silahkan Login Ulang');
          // redirect('Admin');
        }else {
          $this->session->set_flashdata('reg', 'Password lama anda salah');
        }
      }
      $this->Profil();
    }


  }

 ?>
