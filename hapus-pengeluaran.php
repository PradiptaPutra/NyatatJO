<?php

include('koneksi.php');

$id = $_GET['id_pengeluaran'];


$query = mysqli_query($koneksi,"DELETE FROM `pengeluaran` WHERE id_pengeluaran = '$id'");

if ($query) {

 header("location:pengeluaran.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

?>