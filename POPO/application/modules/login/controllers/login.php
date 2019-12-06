<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller{

    public function __construct() {
        parent::__construct();

        // Load models for all functions in this class to use
        $this->load->model('Home/M_home');
        $this->load->library('session');
        $this->load->library(array('cart'));
        $this->load->library('session');
        $this->load->model('login/M_login');
        $this->load->library(array('form_validation'));
    }

    function index(){
      echo "<pre>";
      print_r($this->session->userdata());
      echo "</pre>";

      $this->form_validation->set_message('required', '%s Harus diisi');
      $this->form_validation->set_message('min_length', '%s Minimal 6 karakter');
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
      if ($this->form_validation->run() == TRUE) {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $whereAdmin = array(
          'username' => $username,
          'password' => md5($password)
        );
        $wherePelanggan = array(
          'username_pelanggan' => $username,
          'password_pelanggan' => md5($password)
        );

        $cekAdmin = $this->M_login->cek_login("admin",$whereAdmin)->num_rows();
        $cekPengguna = $this->M_login->cek_login("pelanggan",$wherePelanggan)->num_rows();

        if ($cekAdmin == 1){
          $nama = $this->M_login->get_nama_admin($username);
          $id = $this->M_login->get_id($username);
          $data_session = array(
            'id' => $id->id,
            'nama' => $username,
            'status' => "login",
            'nama_profil' => $nama->nama
          );
          $this->session->set_userdata($data_session);
          redirect('Admin');
        } else if ($cekPengguna == 1){
          $id_pelanggan = $this->M_login->get_id_pelanggan($username);
          $nama_pelanggan = $this->M_login->get_nama_pelanggan($username);

          $data_session2 = array(
            'id_pelanggan' => $id_pelanggan->id_pelanggan,
            'nama_pelanggan' => $nama_pelanggan->nama_pelanggan,
            'status_pelanggan' => "login"
          );
          $this->session->set_userdata($data_session2);
          echo '<script type="text/javascript">window.history.go(-2);</script>';
        } else {
          $this->session->set_flashdata('log', 'Username atau Password salah');
        }
      }
        // $this->load->view('login_v');
        $data['content'] = 'login/login_v';
        $this->template->main_page2_template($data);
    }

    function login(){
      // $this->load->view('login_v');

    }

    function logout(){
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('nama_profil');
        redirect('');
    }

}
