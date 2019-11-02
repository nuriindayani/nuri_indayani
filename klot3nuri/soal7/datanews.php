<!DOCTYPE html>
<html>
<head>
	<title>Halaman Data Berita</title>
</head>
<body>
 
	<h2>Data Berita</h2>
	<br/>
	<a href="news.php">+ Tambah Berita</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID Berita</th>
			<th>Judul Berita</th>
			<th>Gambar</th>
			<th>Deskripsi</th>
			<th>Tanggal</th>
			<th>ID User</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'db.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from news");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['idnews']; ?></td>
				<td><?php echo $d['title']; ?></td>
				<td><img src="gambar/<?php echo $d['image'];?>" width="150px" heigth="150px"></td>
				<td><?php echo $d['deskripsi']; ?></td>
				<td><?php echo $d['create_time']; ?></td>
				<td><?php echo $d['iduser']; ?></td>
				<td>
					<a href="edit.php?idnews=<?php echo $d['idnews']; ?>">Edit</a>
					<a href="hapus.php?idnews=<?php echo $d['idnews']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>