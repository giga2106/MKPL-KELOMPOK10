<h2 class="text-center"> Data Pelanggan</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No. </th>
			<th>Nama Pelanggan</th>
			<th>Telepon Pelanggan</th>
			<th>Alamat Pelanggan</th>
			<th>Tombol </th>
		</tr>
	</thead>
	<tbody>
		<?php
			if (count($pelanggan)) {
				$nomor = 1;
				foreach ($pelanggan as $key => $value) { ?>
					<tr>
					<td> <?php  echo $nomor;?> </td>
					<td> <?php  echo $value->nama_pelanggan?></td>
					<td> <?php echo $value->telepon_pelanggan?></td>
					<td> <?php echo $value->alamat_pelanggan?></td>
					<td>
						<a href="<?php echo base_url()."Pelanggan/Hapus/"?><?php echo $value->id_pelanggan?>"
							onclick="return confirm ('apakah anda yakin ingin menghapus pelanggan ini ?')" class="btn btn-danger"> Hapus </a>
					</td>
					</tr>
				<?php	$nomor++;
				}
			}	else{
			?>
			<tr>
				<td class="center"><center> Tidak Ada Data Pelanggan</center></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
