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
  <div class="container"  style="margin-top: 50px;">
    <h1 style="margin-bottom: 30px;">Tabel Barang</h1>
    <a href="tambah_barang.php" >
        <button type="button" class="btn btn-primary" style="margin-bottom: 30px;">Tambah</button>
</a>
        <table class="table table-striped ">
  <thead>
    <tr>
      <th >Id</th>
      <th >Nama</th>
      <th >Stok</th>
      <th >Keterangan</th>
      <th >Kategori</th>
      <th >Harga</th>
      <th >Aksi</th>
    </tr>
  </thead>
  <?php
		include 'koneksi.php';

		$query="SELECT*FROM barang";
		$result=mysqli_query($connect,$query);

		if (mysqli_num_rows($result)>0) {
			while ($row=mysqli_fetch_assoc($result)) {
				?>
                 <tbody>
   
				<tr>
					<td><?php echo $row["id_barang"]?></td>
					<td><?php echo $row["nama"]?></td>
					<td><?php echo $row["stok"]?></td>
					<td><?php echo $row["ket"]?></td>
					<td><?php echo $row["kategori"]?></td>
                    <td><?php echo $row["harga"]?></td>
					<td>
						<a href="edit_barang.php?id_barang=<?php echo $row['id_barang'];?>"><input type="submit" class="button" value="Edit"></a>
						<a href="hapus_barang.php?id_barang=<?php echo $row['id_barang'];?>"><input type="submit" class="button" value="Hapus"></a>
					</td>
				</tr>
                </tbody>
				<?php
				}
			}else{
				echo "0 results";
			}
			?>
 
</table>
    </div>
  </body>
  </html>