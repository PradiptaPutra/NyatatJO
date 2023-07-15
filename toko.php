<?php
require 'cek-sesi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Toko - AdminJO</title>

  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>

    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body id="page-top">

<?php 
require 'koneksi.php';
require ('sidebar.php'); ?>   

      <div id="content">

<?php require ('navbar.php'); ?> 


        
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Kelola Toko</h6>
                </div>
                <div class="card-body">

              
        <div class="container-fluid">
 
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Toko</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                    <thead>
                    <tr>
                       <th>Nama Toko</th>
                      <th>Jenis Usaha</th>
                      <th>Alamat Toko</th>
                      <th>Nomor Telepon</th>
                      <th>Nama Pemilik</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                
                  <button type="button" class="btn btn-success" style="margin:5px" data-toggle="modal" data-target="#myModalTambah"><i class="fa fa-plus"> Edit Toko </i></button><br>
                 
                  </thead>
                  
				  <?php 
                  $query = mysqli_query($koneksi,"SELECT * FROM toko");
                  $no = 1;
                  while ($data = mysqli_fetch_assoc($query)) 
                  {
                  ?>
                                      <tr>
                                        <td><?=$data['nama']?></td>
                                        <td><?=$data['jenis']?></td>
                                        <td><?=$data['alamat']?></td>
                                        <td><?=$data['nomor']?></td>
                                        <td><?=$data['pemilik']?></td>
                                        <td>
                                      
                  <a href="#" type="button" class=" fa fa-edit btn btn-primary btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['id_toko']; ?>"></a>
                  </td>
                  </tr>
                
                  <div class="modal fade" id="myModal<?php echo $data['id_toko']; ?>" role="dialog">
                  <div class="modal-dialog">
                  
                  
                  <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title">Ubah Data Toko</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  <form role="form" action="proses-edit-toko.php" method="get">
                  
                  <?php
                  $id = $data['id_toko']; 
                  $query_edit = mysqli_query($koneksi,"SELECT * FROM toko WHERE id_toko='$id'");
                  
                  while ($row = mysqli_fetch_array($query_edit)) {  
                  ?>
                  <input type="hidden" name="id_toko" value="<?php echo $row['id_toko']; ?>">

<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">      
</div>

<div class="form-group">
<label>Jenis</label>
<input type="text" name="jenis" class="form-control" value="<?php echo $row['jenis']; ?>">      
</div>

<div class="form-group">
<label>Alamat</label>
<input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">      
</div>

<div class="form-group">
<label>Nomor Telepon</label>
<input type="text" name="nomor" class="form-control" value="<?php echo $row['nomor']; ?>">      
</div>

<div class="form-group">
<label>Nama Pemilik</label>
<input type="text" name="pemilik" class="form-control" value="<?php echo $row['pemilik']; ?>">      
</div>

<div class="modal-footer">  
<button type="submit" class="btn btn-success">Ubah</button>
<a href="hapus-toko.php?id_toko=<?=$row['id_toko'];?>" Onclick="confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-danger">Hapus</a>
<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
</div>
<?php 
}

?>  
       
</form>
</div>
</div>

</div>
</div>




  <div id="myModalTambah" class="modal fade" role="dialog">
    <div class="modal-dialog">


      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Tambah toko</h4>
		    <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      
		<form action="tambah-toko.php" method="get">
        <div class="modal-body">
		Nama : 
         <input type="text" class="form-control" name="nama">
		Jenis Usaha : 
         <input type="text" class="form-control" name="jenis">
		Alamat : 
         <input type="text" class="form-control" name="alamat">
		Nomor Telepon : 
         <input type="number" class="form-control" name="nomor">
		Nama Pemilik : 
         <input type="text" class="form-control" name="pemilik">
        </div>
    
        <div class="modal-footer">
		<button type="submit" class="btn btn-success" >Tambah</button>
		</form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        </div>
      </div>

    </div>
  </div>


<?php               
} 
?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
		  

        </div>
     

      </div>
   

<?php require 'footer.php'?>

    </div>


  </div>



  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<?php require 'logout-modal.php';?>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 
  <script src="js/sb-admin-2.min.js"></script>


  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
