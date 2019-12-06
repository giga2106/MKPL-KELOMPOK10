<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->database();
?>
<h2 class="text-center"> Data Produk</h2>
<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th>No. </th>
			<th>Nama </th>
			<th>Harga </th>
			<th>Berat </th>
			<th>Foto </th>
			<th>Tombol </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1;?>
		<?php $data = $this->db->query('SELECT * FROM produk'); ?>
		<?php foreach ($data->result_array() as $pecah ) { ?>
		<tr>
			<td><?php echo $nomor ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
			<td><?php echo $pecah['berat_produk']; ?> (Gr)</td>
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100" height="50">
			</td>
			<td>
				<a href="index.php?halaman=tambah_produk&id=<?php echo $pecah['id_produk'] ?>"class="btn btn-primary"> Ubah </a>
				<a href="index.php?halaman=hapus_produk&id=<?php echo $pecah['id_produk'] ?>"
					onclick="return confirm ('apakah anda yakin ingin menghapus produk ini ?')" class="btn btn-danger"> Hapus </a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_produk" class="btn btn-primary"> Tambah Data </a>
