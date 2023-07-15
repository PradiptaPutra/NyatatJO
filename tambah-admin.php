<?php

include('koneksi.php');

$nama = $_GET['nama'];
$email = $_GET['email'];
$pass = $_GET['pass'];



$query = mysqli_query($koneksi,"INSERT INTO `admin` (`nama`, `email`, `pass`) VALUES ('$nama', '$email', '$pass')");

if ($query) {

 header("location:profile.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}


?>