<?php

include('koneksi.php');

$id = $_GET['id_toko'];


$query = mysqli_query($koneksi,"DELETE FROM `toko` WHERE id_toko = '$id'");

if ($query) {

 header("location:toko.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}


?>

