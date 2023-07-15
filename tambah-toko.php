<?php

include('koneksi.php');

$nama = $_GET['nama'];
$jenis = $_GET['jenis'];
$alamat = $_GET['alamat'];
$nomor= $_GET['nomor'];
$pemilik = $_GET['pemilik'];


$query = mysqli_query($koneksi,"INSERT INTO `toko` (`id_toko`, `nama`, `jenis`, `alamat`, `nomor`, `pemilik`) VALUES ('$id_toko', '$nama', '$jenis', '$alamat', '$nomor', '$pemilik')");

if ($query) {

 header("location:toko.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}


?>