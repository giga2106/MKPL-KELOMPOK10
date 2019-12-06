<!DOCTYPE html>
<html lang="en">
<div class="x_panel">
  <div class="x_title">
    <h2 class="text-center"> Data Peralatan </h2><br>
    <!-- <div class="clearfix"></div> -->
  </div>
  <?php if($this->session->flashdata('msg')): ?>
    <div class="text-center alert alert-success alert-dismissible" ><?php echo $this->session->flashdata('msg'); ?></div>
<?php endif; ?>
<div class="x_content">
      <a href="<?php echo base_url()."Admin/Peralatan/Tambah_Peralatan"; ?>" class="btn btn-primary"> Tambah Data </a>
    <table class="table table-bordered text-center">
        <thead>
      		<tr>
      			<th> No. </th>
      			<th> Nama </th>
      			<th> Harga </th>
            <th> Stock </th>
      			<th> Berat </th>
      			<th> Foto </th>
      			<th> Tombol </th>
      		</tr>
      	</thead>
        <tbody>

          <?php  if (count($data_peralatan)) { ?>
            <?php $nomor = 1;?>

            <?php foreach ($data_peralatan as $key => $pecah): ?>
              <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $pecah->nama_peralatan; ?></td>
                <td>Rp. <?php echo number_format($pecah->harga_peralatan); ?></td>
                <td><?php echo $pecah->stock_peralatan; ?></td>
                <td><?php echo $pecah->berat_peralatan; ?> (Gr)</td>
                <td>
                  <img src="../foto_peralatan/<?php echo $pecah->foto_peralatan; ?>" height="60">
                </td>
                <td>
                  <a href="<?php echo base_url()."Peralatan/Ubah_Peralatan/{$pecah->id_peralatan}" ?>" class="btn btn-primary"> Ubah </a>
                  <a href="<?php echo base_url()."Peralatan/hapus_peralatan/{$pecah->id_peralatan}" ?>"
                    onclick="return confirm ('apakah anda yakin ingin menghapus peralatan ini ?')" class="btn btn-danger"> Hapus </a>
                </td>
              </tr>
            <?php  $nomor++;
            endforeach;
           }else { ?>
            <tr>
            <td class="center"><center> Tidak Ada Data </center></td>
            <td class="center"><center> Tidak Ada Data </center></td>
            <td class="center"><center> Tidak Ada Data </center></td>
            <td class="center"><center> Tidak Ada Data </center></td>
            <td class="center"><center> Tidak Ada Data </center></td>
            <td class="center"><center> Tidak Ada Data </center></td>
          </tr>
        <?php } ?>
    	</tbody>
    </table>
  </div>
</div>
