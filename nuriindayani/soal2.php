<?php
if(!isset($_POST['proses']) && !isset($_POST['bayar'])){
  echo '
 <center>
 <h1>DumbWays Mall</h1>
 <h2>Promo Potongan Harga Voucher</h2>
 <p><i>silahkan masukkan kode voucher anda !!</p>
 <form action="" method="POST">
 <table>
 <tr><td>Nama Barang</td><td><input type="text" name="nama"></td></tr>
 <tr><td>Harga Barang</td><td><input type="text" name="harga"></td></tr>
 <tr><td>Jumlah Barang</td><td><input type="text" name="jumlah"></td></tr>
 <tr><td>Kode Voucher Barang</td><td><input type="text" name="kode"></td></tr>
 <tr><td></td><td><input type="submit" name="proses" value="proses"></td></tr>
 </table>
 </form>
 </center>';  
//jumlah bayar
}elseif(isset($_POST['proses'])){
 $nama = $_POST['nama'];
 $harga = $_POST['harga'];
 $jumlah = $_POST['jumlah'];
 $kode = $_POST['kode'];
 $total_harga = $harga*$jumlah;
 if ($kode="DumbWays Asik") {
 	if ($total_harga>=20000) {
 	$pot=0.5*$total_harga;
 	if ($pot>=20000) {
 		$potb=20000;
 	}else{
 		$pott=0;
 	}
 }
 }else{
 	$pot=0;
 }

 
 if($kode="DumbWays Mantap"){
 	if ($total_harga>=40000) {
 	$pot=0.2*$total_harga;
 	if ($pot>=40000) {
 		$potc=40000;
 	}else{
 		$pott=0;
 	}
 }
 }else{
 	$pot=0;
 
}
if($kode="DumbWays Asik"){
	$poto=$potb;
}else{
	$poto=$potc;
}


 $total_bayar=$total_harga-$poto;
 
echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <p><i>silahkan masukkan uang pembayaran</p>
 <form action="" method="POST">
 <table>
 <tr><td>Total Harga</td><td><input type="text" name="total_harga1" value="'.$total_harga.'"></td></tr>
 <tr><td>Diskon</td><td><input type="text" name="$pot2" value="'.$poto.'"></td></tr>
 <tr><td>Total Bayar</td><td><input type="text" name="total_bayar1" value="'.$total_bayar.'"></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahUang"></td></tr>
 <tr><td></td><td><input type="submit" name="bayar" value="bayar"></td></tr>
 </table>
 </form>
 </center>';
//jumlah bayar,jumlah uang,kembali
}elseif(isset($_POST['bayar'])){
 $total_harga1 = $_POST['total_harga1'];
 $pot2   =$_POST['pot2'];
 $total_bayar1=$_POST['total_bayar1'];
 $jumlahUang = $_POST['jumlahUang'];
 $kembalian = $jumlahUang - $total_bayar1;
 

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