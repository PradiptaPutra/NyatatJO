
<?php

include('koneksi.php');

$id = $_GET['id_toko'];
$nama = $_GET['nama'];
$jenis = $_GET['jenis'];
$alamat = $_GET['alamat'];
$nomor = $_GET['nomor'];    
$pemilik = $_GET['pemilik'];


$query = mysqli_query($koneksi,"UPDATE toko SET nama='$nama' , jenis='$jenis', alamat='$alamat', nomor='$nomor', pemilik='$pemilik' WHERE id_stok='$id' ;");

if ($query) {

 header("location:toko.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}


?>