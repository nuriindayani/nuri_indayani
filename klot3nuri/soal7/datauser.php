<!DOCTYPE html>
<html>
<head>
	<title>Halaman Data</title>
</head>
<body>
 
	<h2>Data User</h2>
	<br/>
	<a href="user.php">+ Tambah User</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID User</th>
			<th>Nama User</th>
			<th>Email</th>
			<th>Jabatan</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'db.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['iduser']; ?></td>
				<td><?php echo $d['name']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['role']; ?></td>
				<td>
					<a href="edit.php?iduser=<?php echo $d['id']; ?>">Edit</a>
					<a href="hapus.php?iduser=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>