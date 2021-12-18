
		<?php
include 'koneksi.php';

$id_karyawan=$_GET['id_karyawan'];

$query="DELETE FROM pegawai WHERE id_karyawan='$id_karyawan'";
$result=mysqli_query($connect,$query);

if ($result) {
	echo "<script> alert('Data berhasil dihapus!'); window.location.href='daftar_karyawan.php'; </script>";
	?>
	
	<?php
} else{
	echo "<script> alert('Data gagal dihapus!'); window.location.href='daftar_karyawan.php'; </script>";
	?>
	
	<?php
}
?>
		