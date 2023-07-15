
<?php

include('koneksi.php');

$id = $_GET['id_stok'];
$nama = $_GET['nama'];
$Stok = $_GET['stok'];
$HargaBeli = $_GET['HargaBeli'];
$HargaJual = $_GET['HargaJual'];
$Expired = $_GET['Expired'];


$query = mysqli_query($koneksi,"UPDATE Stok SET nama='$nama' , stok='$Stok', HargaBeli='$HargaBeli', HargaJual='$HargaJual', Expired='$Expired' WHERE id_stok='$id' ; ");

if ($query) {

 header("location:stokbarang.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}


?>