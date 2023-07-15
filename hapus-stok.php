<?php

include('koneksi.php');

$id = $_GET['id_stok'];


$query = mysqli_query($koneksi,"DELETE FROM `stok` WHERE id_stok = '$id'");

if ($query) {

 header("location:stokbarang.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}


?>

