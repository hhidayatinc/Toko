
<?php
include 'koneksi.php';

$id_barang=$_GET['id_barang'];

$query="DELETE FROM barang WHERE id_barang='$id_barang'";
$result=mysqli_query($connect,$query);

if ($result) {
	echo "<script> alert('Data berhasil dihapus!'); window.location.href='daftar_barang.php'; </script>";
	?>
	
	<?php
} else{
	echo "<script> alert('Data gagal dihapus!'); window.location.href='daftar_barang.php'; </script>";
	?>
	
	<?php
}
?>
