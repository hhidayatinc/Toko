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

  $id_barang = $_GET['id_barang'];
  $qry = mysqli_query($connect, "SELECT * FROM barang WHERE id_barang='$id_barang'");
  $row = mysqli_fetch_array($qry);

  if(isset($_POST['update'])){
    $nama=$_POST['nama'];
    $stok=$_POST['stok'];
    $ket=$_POST['ket'];
    $kategori=$_POST['kategori'];
    $harga=$_POST['harga'];

    $edit = mysqli_query($connect, "
    UPDATE barang SET 
    nama='$nama',
    stok='$stok',
	ket='$ket',
	kategori='$kategori',
	harga='$harga'
	WHERE id_barang='$id_barang'
    ");

    if($edit){
      mysqli_close($connect);
      echo "<script> alert('Data berhasil diperbarui!'); window.location.href='daftar_barang.php'; </script>";
    } else{
      echo mysqli_error();
    }
  }
 
?>
  <h2 style="margin-top: 50px; margin-left: 80px;"> Update Barang</h2>
      <form class="row g-3" style="margin-left:80px; margin-top:50px;"  method="POST" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama'];?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Stok</label>
    <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $row['stok'];?>">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="ket" name="ket" value="<?php echo $row['ket'];?>">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Kategori</label>
    <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $row['kategori'];?>">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $row['harga'];?>">
  </div>
  
  <div class="col-12" style="margin-top: 30px;">
    <button type="submit" name="update" class="btn btn-primary">Perbarui Data</button>
  </div> 

			
	</form>
  </body>
  </html>