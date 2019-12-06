<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_register extends CI_Model {

    function input_data($u,$e,$p,$n){
      $query=$this->db->query("insert into pelanggan values('','$u','$e','$p','$n','','')");
    }

    function cek_data($username)
    {
        $this->db->where('username_pelanggan',$username);
        $query1 = $this->db->get('pelanggan');
        if ($query1->num_rows() == 0){
            return true;
        }
        else{
            return false;
        }
    }

}
