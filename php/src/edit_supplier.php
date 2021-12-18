<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Page Admin Stuff Shop!</title>
    
  </head>
  <?php
  include 'head.php';
  ?>
  <body>
  <?php 
  include 'koneksi.php';

  $id_supplier = $_GET['id_supplier'];
  $qry = mysqli_query($connect, "SELECT * FROM supplier WHERE id_supplier='$id_supplier'");
  $row = mysqli_fetch_array($qry);

  if(isset($_POST['update'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
   

    $edit = mysqli_query($connect, "
    UPDATE supplier SET 
    nama='$nama',
    email='$email',
	alamat='$alamat',
	no_telp='$no_telp'
	WHERE id_supplier='$id_supplier'
    ");

    if($edit){
      mysqli_close($connect);
      echo "<script> alert('Data berhasil diperbarui!'); window.location.href='daftar_supplier.php'; </script>";
    } else{
      echo mysqli_error();
    }
  }
 
?>
  <h2 style="margin-top: 50px; margin-left: 80px;"> Update Supplier</h2>
      <form class="row g-3" style="margin-left:80px; margin-top:50px;"  method="POST" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama'];?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">No Telp</label>
    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $row['no_telp'];?>">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat'];?>">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>">
  </div>
  <div class="col-12" style="margin-top: 30px;">
    <button type="submit" name="update" class="btn btn-primary">Perbarui Data</button>
  </div> 

			
	</form>
  </body>
  </html>