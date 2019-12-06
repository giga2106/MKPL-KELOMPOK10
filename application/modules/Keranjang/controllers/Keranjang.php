 <?php
 class Keranjang extends MY_Controller {

   function __construct() {
     parent::__construct();
     $this->load->library('session');
     $this->load->model('Keranjang/M_keranjang');
     if($this->session->userdata('status_pelanggan') != "login"){
         redirect(base_url(""));
       }
     $this->load->library(array('cart','form_validation'));
   }

   function index() {
     $this->cart->contents();
     // echo "<pre>";
     // print_r($items);
     // echo "</pre>";

     // echo $this->cart->total();
     // echo "<br>";
     // echo $this->cart->total_items();

     // $data['nama_profil'] = $nama_profil;
     // $data['data_peralatan'] = $this->lihat_peralatan();
     $data['content'] = 'Keranjang/Keranjang_v';
     $this->template->main_page2_template($data);
   }

  function add() {
    if (is_numeric($this->uri->segment(3)))	{
      $id = $this->uri->segment(3);
      $get = $this->M_keranjang->get_peralatan_by($id);
      $data = array(
        'id'    => $get->id_peralatan,
        'qty'   => 1,
        'stock' => $get->stock_peralatan,
        'price' => $get->harga_peralatan,
        'name'  => $get->nama_peralatan,
        'weight'=> $get->berat_peralatan
      );
      $d=$this->cart->insert($data);
      echo '<script type="text/javascript">window.history.go(-1);</script>';
    }else {
      echo "Peralatan tidak dapat ditambahkan";
    }
  }

  function delete() {
    if ($this->uri->segment(3)) {
       $rowid = $this->uri->segment(3);
       $this->cart->remove($rowid);
       redirect('Keranjang');
    } else {
       redirect('Keranjang');
    }
    $this->cart->update($data);
  }

  public function update() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('banyak', 'Jumlah Pesanan', 'required|numeric');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
              'rowid' => $this->input->post  ('row'),
              'qty' => $this->input->post('banyak', TRUE)
            );
            $this->cart->update($data);
            redirect('Keranjang');
          }else {
            redirect('Keranjang');
          }
  }

  public function bayar() {
     $items = $this->cart->contents();
    // $cust_id = $this->session->userdata('id_pelanggan');
    // $order = array(
    //     'id_pelanggan' => $cust_id,
    //     'tanggal_pembelian' => date('Y-m-d'),
    //     'total_pembelian' => $this->cart->total()
    //     );
    // $ord_id = $this->M_keranjang->insert_order($order);
    // if ($cart = $this->cart->contents()):
    //   foreach ($cart as $item):
    //   $order_detail = array(
    //       'id_order' => $ord_id,
    //       'id_produk' => $item['id'],
    //       'banyak' => $item['qty'],
    //       'biaya' => $item['subtotal']
    //       );
    //   $cust_id = $this->M_keranjang->insert_order_detail($order_detail);
    //   endforeach;
    // endif;
    $this->session->unset_userdata('id_order');
    $id = $this->session->userdata('id_pelanggan');
    $data['data_profil'] = $this->M_keranjang->get_profil_pengguna($id);
    $data['content'] = 'Keranjang/Alamat_v';
    $this->template->main_page2_template($data);
  }

  public function pembayaran(){
    $this->cart->contents();
    $var_total_byr = $this->cart->total();
    if ($var_total_byr != 0) {
      $cust_id = $this->session->userdata('id_pelanggan');
      $id = $this->session->userdata('id_pelanggan');
      $n=$this->input->post('nama_pelanggan');
      $t=$this->input->post('telepon_pelanggan');
      $a=$this->input->post('alamat_pelanggan');
      $tot = $this->cart->total();
      $tgl = date('Y-m-d');
      $tgl_batas = date("Y-m-d", mktime(0,0,0, date("m"), date("d") + 3, date("Y")));
      $ord_id = $this->M_keranjang->insert_order($id,$n,$t,$a,$tgl,$tgl_batas,$tot);
      $this->session->set_userdata('id_order', $ord_id);
      $this->session->set_userdata('total_bayar', $this->cart->total());
      if ($cart = $this->cart->contents()):
        foreach ($cart as $item):
          $order_detail = array(
            'id_order' => $ord_id,
            'id_peralatan' => $item['id'],
            'banyak' => $item['qty'],
            'biaya' => $item['subtotal']
          );
          $id= $item['id'] ;
          $sisa = $item['stock'] -  $item['qty'];
          $data = array(
            'stock_peralatan' => $sisa
            // 'tgl_diubah' =>$item['tgl']
          );
          $order_id = $this->M_keranjang->insert_order_detail($order_detail);
          $this->M_keranjang->update_stock($id,$data);
        endforeach;
      endif;
      $this->cart->destroy();
    }
    $data['data_OrderId'] = $this->session->userdata('id_order');
    $data['data_TotPembayaran'] = $this->session->userdata('total_bayar');
    $data['content'] = 'Keranjang/TransaksiBerhasil_v';
    $this->template->main_page2_template($data);
  }


 }

  ?>
