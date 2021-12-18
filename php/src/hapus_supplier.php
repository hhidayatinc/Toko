
<?php
include 'koneksi.php';

$id_supplier=$_GET['id_supplier'];

$query="DELETE FROM supplier WHERE id_supplier='$id_supplier'";
$result=mysqli_query($connect,$query);

if ($result) {
	echo "<script> alert('Data berhasil dihapus!'); window.location.href='daftar_supplier.php'; </script>";
	?>
	
	<?php
} else{
	echo "<script> alert('Data gagal dihapus!'); window.location.href='daftar_supplier.php'; </script>";
	?>
	
	<?php
}
?>
