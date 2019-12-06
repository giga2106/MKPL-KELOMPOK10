<script type="text/javascript">
function confirm_delete() {
  return confirm('are you sure?');
}
</script>

<?php

  class Peralatan extends MY_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->library('session');
      if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
    $this->load->library(array('form_validation'));
    $this->load->model('M_Peralatan');
    $this->load->module([
      'peralatan',
      'tambah'
    ]);
    }

// ================================ LIHAT PRODUK ==============================
    function index()
    {
      $nama_profil = $this->session->userdata('nama_profil');
      $data['nama_profil'] = $nama_profil;
      $data['data_peralatan'] = $this->M_Peralatan->get_peralatan();
      $data['content_view'] = 'Peralatan/Tampil_peralatan_v';
      $this->template->call_admin_template($data);
    }
    // function lihat_peralatan()
    // {
    //   $this->load->model('Peralatan/M_Peralatan');
    //   $peralatan="";
    //   $data_peralatan = $this->M_Peralatan->get_peralatan();
    //   return $data_peralatan;
    // }

//========================== TAMBAH PRODUK PARENT =============================
    function tambah_peralatan() {
      $this->form_validation->set_message('required', '%s harus diisi');
      $this->form_validation->set_rules('nama_peralatan', 'Nama', 'required');
      $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
      $this->form_validation->set_rules('id_merek', 'Merek', 'required');
      $this->form_validation->set_rules('stock_peralatan', 'Stock', 'required|numeric');
      $this->form_validation->set_rules('harga_peralatan', 'Harga', 'required|numeric');
      $this->form_validation->set_rules('berat_peralatan', 'Berat', 'required|numeric');
      $this->form_validation->set_rules('deskripsi_peralatan', 'Deskripsi', 'required');
      if ($this->form_validation->run() == TRUE) {
          $data['id_kategori'] = $this->input->post('id_kategori');
          $data['id_merek'] = $this->input->post('id_merek');
          $data['nama_peralatan'] = $this->input->post('nama_peralatan');
          $data['stock_peralatan'] = $this->input->post('stock_peralatan');
          $data['harga_peralatan'] = $this->input->post('harga_peralatan');
          $data['berat_peralatan'] = $this->input->post('berat_peralatan');
          $data['deskripsi_peralatan'] = $this->input->post('deskripsi_peralatan');

          $this->do_upload();
          $upload_data = $this->upload->data();
          $file_name = $upload_data['file_name'];
          $data['foto_peralatan'] = $file_name;
          $this->M_Peralatan->tambah_peralatan($data);
          $this->session->set_flashdata('msg', 'Peralatan Berhasil Ditambahkan');
          redirect ('Admin/Peralatan');
        } else {
      }
      $nama_profil = $this->session->userdata('nama_profil');
      $data['nama_profil'] = $nama_profil;
      $data['content_view'] = 'Peralatan/Tambah_Peralatan_v';
      $data['kategori'] = $this->membuat_select_kategori();
      $data['merek'] = $this->membuat_select_merek();
      $this->template->call_admin_template($data);
    }

    function membuat_select_kategori() {
      $this->load->model('Peralatan/M_Peralatan');

      $kategori = $this->M_Peralatan->get_aktif_kategori();
      $option = "";
      if (count($kategori)) {
        foreach ($kategori as $key => $value) {
          $option.="<option value='{$value->id_kategori}'>{$value->nama_kategori}</option>";
        }
      }
      return $option;
    }

    function membuat_select_merek()
    {
      $this->load->model('Peralatan/M_Peralatan');

      $merek = $this->M_Peralatan->get_aktif_merek();
      $option = "";
      if (count($merek)) {
        foreach ($merek as $key => $value) {
          $option.="<option value='{$value->id_merek}'>{$value->nama_merek}</option>";
        }
      }
      return $option;
    }

//========================== UPDATE PRODUK =============================
    public function ubah_peralatan($id)
  	{
    $data['data']= $this->M_Peralatan->tampil_data_byid($id);
    $data['kategori'] = $this->M_Peralatan->get_aktif_kategori();
    $data['value_kategori'] = $this->M_Peralatan->get_value_kategori($id);
    $data['value_merek'] = $this->M_Peralatan->get_value_merek($id);
    $data['merek'] = $this->M_Peralatan->get_aktif_merek();

    $nama_profil = $this->session->userdata('nama_profil');
    $data['nama_profil'] = $nama_profil;
    $data['content_view'] = 'Peralatan/Ubah_Peralatan';
    $this->template->call_admin_template($data);
  	}

    function update_peralatan($id){
      $this->form_validation->set_message('required', '%s harus diisi');
      $this->form_validation->set_rules('nama_peralatan', 'Nama', 'required');
      $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
      $this->form_validation->set_rules('id_merek', 'Merek', 'required');
      $this->form_validation->set_rules('stock_peralatan', 'Stock', 'required|numeric');
      $this->form_validation->set_rules('harga_peralatan', 'Harga', 'required|numeric');
      $this->form_validation->set_rules('berat_peralatan', 'Berat', 'required|numeric');
      $this->form_validation->set_rules('deskripsi_peralatan', 'Deskripsi', 'required');
      if ($this->form_validation->run() == TRUE) {
        $n=$this->input->post('nama_peralatan');
        $h=$this->input->post('harga_peralatan');
        $s=$this->input->post('stock_peralatan');
        $b=$this->input->post('berat_peralatan');
        $k= $this->input->post('id_kategori');
        $m= $this->input->post('id_merek');
        $d = $this->input->post('deskripsi_peralatan');
        // $ff = $this->input->post('foto_peralatan');
        if ($this->do_upload()==TRUE) {
          unlink('foto_peralatan/'.$this->input->post('old_pict', TRUE));
          $upload_data = $this->upload->data();
          $file_name = $upload_data['file_name'];
          $f = $file_name;
          $this->M_Peralatan->update_data_dan_image($n,$h,$s,$b,$k,$d,$m,$f,$id);
        }else {
          $this->M_Peralatan->update_data($n,$h,$s,$b,$k,$d,$m,$id);
        }
        // echo $ff;
        // print_r($_POST);
        // print_r($_POST);
        redirect("Admin/Peralatan");
      } else {
        $data['data']= $this->M_Peralatan->tampil_data_byid($id);
        $data['kategori'] = $this->M_Peralatan->get_aktif_kategori();
        $data['value_kategori'] = $this->M_Peralatan->get_value_kategori($id);
        $data['value_merek'] = $this->M_Peralatan->get_value_merek($id);
        $data['merek'] = $this->M_Peralatan->get_aktif_merek();

        $nama_profil = $this->session->userdata('nama_profil');
        $data['nama_profil'] = $nama_profil;
        $data['content_view'] = 'Peralatan/Ubah_Peralatan';
        $this->template->call_admin_template($data);
      }

    }
//========================== INSERT GAMBAR PRODUK =============================
    public function do_upload(){
      $ff = 0;
     $config['upload_path'] = './foto_peralatan';
     $config['allowed_types'] = 'gif|jpg|png';
     $config['max_size'] = '102400';
     $config['file_name'] = 'gambar-'.trim(str_replace(" ","",date('dmYHis')));

     $this->load->library('upload', $config);

     if (!$this->upload->do_upload('foto_peralatan')){
      // $error = array('error' => $this->upload->display_errors());
         // var_dump($error);
         // $ff = 1;
         return FALSE;
     }else{
      $data = array('upload_data' => $this->upload->data());
         var_dump($data);
         return TRUE;
     }
   }
//========================== HAPUS PRODUK =============================
   public function hapus_peralatan($id){
     $this->load->model('Peralatan/M_Peralatan');
     $gambar= $this->M_Peralatan->get_image($id);
     $nama_file = $gambar->foto_peralatan;
     $path =  './foto_peralatan/'.$nama_file;
     $this->load->helper("file");
     unlink($path);
     $this->M_Peralatan->hapus_data($id);
     redirect("Admin/Peralatan");
   }
  }
 ?>
