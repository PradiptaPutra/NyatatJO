<?php

include('koneksi.php');

$id = $_GET['id_pemasukan'];


$query = mysqli_query($koneksi,"DELETE FROM `pemasukan` WHERE id_pemasukan = '$id'");

if ($query) {

 header("location:pendapatan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}


?>