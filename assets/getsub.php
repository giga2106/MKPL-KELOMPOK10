<?php
	$koneksi = new mysqli("localhost" , "root" , "" , "popo"); 
    $category = $_POST['groupid'];

  $sql = "SELECT * FROM kategori WHERE id_parent=".$category;
  $result = $koneksi->query($sql);   	  
  if ($category=="null") {
  	
  } else {
	  while($row = $result->fetch_array(MYSQLI_ASSOC)) { 
	    echo '<option value="'.$row["id_kategori"].'">'.$row['nama_kategori'].'</option>';
	  }
  }
  

  $koneksi->query($sql) or die("Error: ".$koneksi->connect_error);
?>
