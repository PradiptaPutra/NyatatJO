<?php

include('koneksi.php');

$nama = $_GET['nama'];
$stok = $_GET['Stok'];
$HargaBeli = $_GET['HargaBeli'];
$HargaJual = $_GET['HargaJual'];
$Expired = $_GET['Expired'];


$query = mysqli_query($koneksi,"INSERT INTO `stok` (`id_stok`, `nama`, `stok`, `HargaBeli`, `HargaJual`, `Expired`) VALUES ('$id_stok', '$nama', '$Stok', '$HargaBeli', '$HargaJual', '$Expired')");

if ($query) {

 header("location:stokbarang.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}


?>