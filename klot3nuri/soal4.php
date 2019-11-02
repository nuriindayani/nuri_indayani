<?php
if(!isset($_POST['proses']) && !isset($_POST['bayar'])){
  echo '
 <center>
 <h1>Promo Sesuai Kode Kualitas Barang</h1>
 <h2>Daftar Kode Kualitas Barang</h2>
 <p>Barang A <br> Barang B <br> Barang C</p>
 <form action="" method="POST">
 <table>
 <tr><td>Nama Pelanggan</td><td><input type="text" name="nama"></td></tr>
 <tr><td>Kode Kualitas Barang</td><td><input type="text" name="kode"></td></tr>
 <tr><td></td><td><input type="submit" name="proses" value="proses"></td></tr>
 </table>
 </form>
 </center>';  
//jumlah bayar
}elseif(isset($_POST['proses'])){
 $nama = $_POST['nama'];
 $kode = $_POST['kode'];

 if ($kode=="Barang A"){
 	$harga=3000;
 }elseif($kode=="Barang B"){
    $harga=3500;
 }elseif ($kode=="Barang C"){
 	$harga=5000;
 }else{
 	echo "Kode yang Anda Masukkan Salah";
 }

 
echo '
 <center>
 <h1>Perhitungan Barang</h1>
 <p><i>Mohon Menunggu ya...!!</p>
 <form action="" method="POST">
 <table>
 <tr><td>Kode Kualitas Barang</td><td><input type="text" name="kode1" value="'.$kode.'"></td></tr>
 <tr><td>Harga</td><td><input type="text" name="harga1" value="'.$harga.'"></td></tr>
 <tr><td>Jumlah Beli</td><td><input type="text" name="jumlah"></td></tr>
 <tr><td></td><td><input type="submit" name="bayar" value="bayar"></td></tr>
 </table>
 </form>
 </center>';
//jumlah bayar,jumlah uang,kembali
}elseif(isset($_POST['bayar'])){
 $kode1=$_POST['kode1'];
 $harga1=$_POST['harga1'];
 $jumlah=$_POST['jumlah'];
 $total_harga=$harga1*$jumlah;
 
 if ($kode1=="Barang A") {
 	if ($jumlah>10) {
 		$pot=500/3000 * $total_harga;
 	}else{
 		$pot=0;
 	}
 	
 } elseif ($kode1=="Barang B"){
 	if ($jumlah>5) {
 	   $pot=0.5 * $total_harga;
 	}else{
 		$pot=0;
 	}  
 }elseif ($kode1=="Barang C") {
 	$pot=0;
 }else{
 	echo "Kode yang anda masukkan salah !!!";
 }
$totbay=$total_harga-$pot;

 echo '
 <center>
 <h1>Total Pembayaran</h1>
 <form action="" method="POST">
 <table>
 <tr><td>Total Harga</td><td><input type="text" name="total_harga1" value="'.$total_harga.'" readonly></td></tr>
 <tr><td>Potongan Harga</td><td><input type="text" name="pot1" value="'.$pot.'" readonly></td></tr>
 <tr><td>Jumlah Harus Dibayar</td><td><input type="text" name="totbay1" value="'.$totbay.'" readonly></td></tr>
 
 </table>
 </form>
 <br>
 </center>';
}
?>