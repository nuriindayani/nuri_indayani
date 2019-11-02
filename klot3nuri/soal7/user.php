<?php
include 'db.php';
?>
</!DOCTYPE html>
<html>
<head>
	<title>Halaman Input User</title>
</head>
<body>
	<h2>Silahkan Input Data</h2>
	<br/>
	<a href="datauser.php">Lihat Data User</a>
	<br/>
	<br>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>ID User</td>
				<td>:</td>
				<td><input type="text" name="iduser"></td>
			</tr>
			<tr>
				<td>Nama User</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email User</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><input type="text" name="role"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="Submit" name="kirim" value="kirim"></td>
			</tr>
		</table>
	</form>
	<?php
	if (isset($_POST['kirim'])) {
		$iduser = $_POST['iduser'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$role = $_POST['role'];
		
		$insert=mysqli_query($conn,"INSERT INTO user VALUES(
	    '$iduser','$name','$email','$role')");
	    if ($insert) {
	    	echo "Berhasil ..!!";
	    }else{
	    	echo "Gagal..!!";
	    }
	}

	?>


</body>
</html>