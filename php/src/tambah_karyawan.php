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
include 'koneksi.php';
//menangkap data yang dikirim dari form login

if(isset($_POST["add"])){//jika tombol login di klik
	
$nama=$_POST['nama'];
$email=$_POST['email'];

$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$jabatan=$_POST['jabatan'];


$sql="INSERT INTO pegawai (nama,no_telp,alamat,email, jabatan)
	VALUES('$nama','$no_telp','$alamat','$email', '$jabatan')";
 if (mysqli_query($connect, $sql)){
    echo "<script> alert('Data berhasil ditambahkan!'); window.location.href='daftar_karyawan.php'; </script>";?>
        
        <?php
    }else{
        echo "<script> alert('Data gagal ditambahkan!'); window.location.href='tambah_karyawan.php'; </script>"; ?>
        
        <?php
    }

    mysqli_close($connect);
}
?>

  <body>

  <div class="container">
      <h2 style="margin-top: 50px;"> Tambah Karyawan</h2>
      <form class="row g-3" style="margin:50px;" action="" method="POST" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">No Telp</label>
    <input type="text" class="form-control" id="no_telp" name="no_telp">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Jabatan</label>
    <input type="text" class="form-control" id="jabatan" name="jabatan">
  </div>
  
  <div class="col-12" style="margin-top: 30px;">
    <button type="submit" name="add" class="btn btn-primary">Tambah Data</button>
  </div>
</form>
    </div>
  </body>
  </html>