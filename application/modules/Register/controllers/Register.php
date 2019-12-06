<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends My_Controller{

    public function __construct() {
        parent::__construct();

        // Load models for all functions in this class to use
        $this->load->library('session');
        $this->load->model('Register/M_register');
        $this->load->helper('url');
        $this->load->library(array('form_validation'));
        $this->load->helper('security');
    }

    public function index(){
        // $this->load->view('register_v');
        $this->form_validation->set_message('required', '%s Harus diisi');
        $this->form_validation->set_message('min_length', '%s Minimal 6 karakter');
        $this->form_validation->set_message('matches', '{field} {param} Harus Sama');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('repassword', 'Confirm Password', 'required|matches[password]');
        if ($this->form_validation->run() == TRUE) {
          $u=$this->input->post('username');
          if ($this->M_register->cek_data($u) == true) {
            $u=$this->input->post('username');
            $e=$this->input->post('email');
            $n=$this->input->post('nama');
            $p1=$this->input->post('password');
            $p2=$this->input->post('repassword');
            $p = md5($p1);

            $this->M_register->input_data($u,$e,$p,$n);
            redirect('Login');
          }else {
            $this->session->set_flashdata('reg', 'Username sudah terdaftar');
          }
        }
        // $this->load->view('register_v');
        $data['content'] = 'register/register_v';
        $this->template->main_page2_template($data);
        $this->session->sess_destroy();
    }

    public function register(){
      // $this->load->view('register_v');

    }

    public function cek_data() {
     }

     function cek_email($ee)
      {
          $this->M_register->role_exists($ee);
      }

}
