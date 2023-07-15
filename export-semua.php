    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Pemasukan_Pengeluaran.xls");
	?>
	<h3>Data Pemasukan</h3>    
	<table border="1" cellpadding="5"> 
	<tr>    
	<th>ID Pemasukan</th>
    <th>Tgl Pemasukan</th>
    <th>Jumlah</th>    
	<th> ID Sumber</th> 
	</tr>  
	<?php  

	include "koneksi.php";    

$query = mysqli_query($koneksi, "SELECT * FROM pemasukan");

	while($data = mysqli_fetch_array($query)){ 

	echo "<tr>";    
	echo "<td>".$data['id_pemasukan']."</td>";   
	echo "<td>".$data['tgl_pemasukan']."</td>";    
	echo "<td>".$data['jumlah']."</td>";    
	echo "<td>".$data['id_sumber']."</td>";      
	echo "</tr>";        
	}  ?></table>
	<br>
	<br>
		<h3>Data Pengeluaran</h3>    
	<table border="1" cellpadding="5"> 
	<tr>    
	<th>ID Pengeluaran</th>
    <th>Tgl Pengeluaran</th>
    <th>Jumlah</th>    
	<th> ID Sumber</th> 
	</tr>  
	<?php     

$query = mysqli_query($koneksi, "SELECT * FROM pengeluaran");

	while($data = mysqli_fetch_array($query)){ 

	echo "<tr>";    
	echo "<td>".$data['id_pengeluaran']."</td>";   
	echo "<td>".$data['tgl_pengeluaran']."</td>";    
	echo "<td>".$data['jumlah']."</td>";    
	echo "<td>".$data['id_sumber']."</td>";      
	echo "</tr>";        
	}  ?></table>