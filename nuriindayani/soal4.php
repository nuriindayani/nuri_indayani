<?php
if(!isset($_POST['proses']) && !isset($_POST['bayar'])){
  echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <p><i>silahkan masukkan uang pembayaran</p>
 <form action="" method="POST">
 <table>
 <tr><td>Nama Barang</td><td><input type="text" name="nama"></td></tr>
 <tr><td>Harga Barang</td><td><input type="text" name="harga"></td></tr>
 <tr><td>Jumlah Barang</td><td><input type="text" name="jumlah"></td></tr>
 <tr><td></td><td><input type="submit" name="proses" value="proses"></td></tr>
 </table>
 </form>
 </center>';  
//jumlah bayar
}elseif(isset($_POST['proses'])){
 $nama = $_POST['nama'];
 $harga = $_POST['harga'];
 $jumlah = $_POST['jumlah'];
 $total_harga = $harga*$jumlah;
 if ($total_harga>= 20000)  { 
	$cashback=0.1*$total_harga;
}  else  {
	$cashback=0;
}
 $total_bayar=$total_harga-$cashback;
echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <p><i>silahkan masukkan uang pembayaran</p>
 <form action="" method="POST">
 <table>
 <tr><td>Total Harga</td><td><input type="text" name="total_harga1" value="'.$total_harga.'"></td></tr>
 <tr><td>Bonus Cashback</td><td><input type="text" name="cashback1" value="'.$cashback.'"></td></tr>
 <tr><td>Total Bayar</td><td><input type="text" name="total_bayar1" value="'.$total_bayar.'"></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahUang"></td></tr>
 <tr><td></td><td><input type="submit" name="bayar" value="bayar"></td></tr>
 </table>
 </form>
 </center>';
//jumlah bayar,jumlah uang,kembali
}elseif(isset($_POST['bayar'])){
 $total_harga1 = $_POST['total_harga1'];
 $cashback1   =$_POST['cashback1'];
 $total_bayar1=$_POST['total_bayar1'];
 $jumlahUang = $_POST['jumlahUang'];
 $kembalian = $jumlahUang - $total_bayar1;
 if (($kembalian>95000)&&($kembalian<100000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	2 x 20.000 <br>
 	1 x  5.000 <br>
 	2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
 }elseif($kembalian=95000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	2 x 20.000 <br>
 	1 x  5.000 <br>";
 }elseif(($kembalian>90000)&&($kembalian<95000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	2 x 20.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=90000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	2 x 20.000 <br>";
 }elseif(($kembalian>85000)&&($kembalian<90000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 20.000 <br>
 	1 x 10.000 <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=85000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 20.000 <br>
 	1 x 10.000 <br>
 	1 x  5.000 <br>";
 }elseif(($kembalian>80000)&&($kembalian<85000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 20.000 <br>
 	1 x 10.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=80000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 20.000 <br>
 	1 x 10.000 <br>";
 }elseif(($kembalian>75000)&&($kembalian<80000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 20.000 <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=75000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 20.000 <br>
 	1 x  5.000 <br>";
}elseif(($kembalian>70000)&&($kembalian<750000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 20.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=70000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 20.000 <br>";
 }elseif(($kembalian>65000)&&($kembalian<70000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 10.000 <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=65000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 10.000 <br>
 	1 x  5.000 <br>";
}elseif(($kembalian>60000)&&($kembalian<65000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 10.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=60000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x 10.000 <br>";
}elseif(($kembalian>55000)&&($kembalian<60000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=55000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 	1 x  5.000 <br>";
}elseif(($kembalian>50000)&&($kembalian<55000)){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=50000){
 	$ket="kembalian : <br>
 	1 x 50.000 <br>";
}elseif(($kembalian>45000)&&($kembalian<50000)){
 	$ket="kembalian : <br>
 	2 x 20.000 <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=45000){
 	$ket="kembalian : <br>
 	2 x 20.000 <br>
 	1 x  5.000 <br>";
}elseif(($kembalian>40000)&&($kembalian<45000)){
 	$ket="kembalian : <br>
 	2 x 20.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=40000){
 	$ket="kembalian : <br>
 	2 x 20.000 <br>";
}elseif(($kembalian>35000)&&($kembalian<40000)){
 	$ket="kembalian : <br>
 	1 x 20.000 <br>
 	1 x 10.000 <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=35000){
 	$ket="kembalian : <br>
 	1 x 20.000 <br>
 	1 x 10.000 <br>
 	1 x  5.000 <br>";
}elseif(($kembalian>30000)&&($kembalian<35000)){
 	$ket="kembalian : <br>
 	1 x 20.000 <br>
 	1 x 10.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=30000){
 	$ket="kembalian : <br>
 	1 x 20.000 <br>
 	1 x 10.000 <br>";
 }elseif(($kembalian>25000)&&($kembalian<30000)){
 	$ket="kembalian : <br>
 	1 x 20.000 <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=25000){
 	$ket="kembalian : <br>
 	1 x 20.000 <br>
 	1 x  5.000 <br>";
}elseif(($kembalian>20000)&&($kembalian<25000)){
 	$ket="kembalian : <br>
 	1 x 20.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=20000){
 	$ket="kembalian : <br>
 	1 x 20.000 <br>";
}elseif(($kembalian>15000)&&($kembalian<20000)){
 	$ket="kembalian : <br>
 	1 x 10.000 <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=15000){
 	$ket="kembalian : <br>
 	1 x 10.000 <br>
 	1 x  5.000 <br>";
}elseif(($kembalian>10000)&&($kembalian<15000)){
 	$ket="kembalian : <br>
 	1 x 10.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=10000){
 	$ket="kembalian : <br>
 	1 x 10.000 <br>";
}elseif(($kembalian>5000)&&($kembalian<10000)){
 	$ket="kembalian : <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
}elseif($kembalian=5000){
 	$ket="kembalian : <br>
 	1 x  5.000 <br>";
 }else{
 	$ket="kembalian : <br>
 	1 x  5.000 <br>
 2000 disumbangkan karena tidak ada pecahan dibawah 5.000";
 }
 

 echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <form action="" method="POST">
 <table>
 <tr><td>Total Bayar</td><td><input type="text" name="total_bayar1" value="'.$total_bayar1.'" readonly></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahuang" value="'.$jumlahUang.'" readonly></td></tr>
 <tr><td>Kembali</td><td><input type="text" name="jumlahuang" value="'.$kembalian.'" readonly></td></tr>
 
 </table>
 </form>
 <br>
 </center>';
 echo "<center> $ket </center>";
}
?>