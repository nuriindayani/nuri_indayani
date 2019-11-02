<?php
include 'db.php';
?>
</!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Berita</title>
</head>
<body>
	<h2>Silahkan Input Data</h2>
	<br/>
	<a href="datanews.php">Lihat Data Berita</a>
	<br/>
	<br>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>ID Berita</td>
				<td>:</td>
				<td><input type="text" name="idnews"></td>
			</tr>
			<tr>
				<td>Judul Berita</td>
				<td>:</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>:</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="text" name="create_time"></td>
			</tr>
			<tr>
				<td>ID User</td>
				<td>:</td>
				<td><input type="text" name="iduser"></td>
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
		$idnews = $_POST['idnews'];
		$title = $_POST['title'];
		$deskripsi = $_POST['deskripsi'];
		$create_time = $_POST['create_time'];
		$iduser = $_POST['iduser'];
		$image = $_FILES['image']['name'];
		$source =$_FILES['image']['tmp_name'];
		$folder ='./gambar/';
		move_uploaded_file($source,$folder.$image);
		$insert=mysqli_query($conn,"INSERT INTO news VALUES(
	    '$idnews','$title','$image','$deskripsi','$create_time','$iduser')");
	    if ($insert) {
	    	echo "Berhasil ..!!";
	    }else{
	    	echo "Gagal..!!";
	    }
	}

	?>


</body>
</html>