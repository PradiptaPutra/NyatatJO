<?php

include('koneksi.php');

$id = $_GET['id_karyawan'];


$query = mysqli_query($koneksi,"DELETE FROM `karyawan` WHERE id_karyawan = '$id'");

if ($query) {

 header("location:karyawan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}


?>