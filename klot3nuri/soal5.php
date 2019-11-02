
<?php
if(!isset($_POST['proses'])){
echo'
<form action="" method="POST">
 <table>
<tr><td>Masukkan Jumlah Generate</td><td><input type="text" name="jumlah"></td></tr>
<tr><td></td><td><input type="submit" name="proses" value="proses"></td></tr>
</table>
 </form>';
}if(isset($_POST['proses'])){
$jumlah = $_POST['jumlah'];

function random($length, $chars = '')
{
	if (!$chars) {
		$chars = implode(range('a','z'));
		$chars .= implode(range('0','9'));
	}
	$shuffled = str_shuffle($chars);
	return substr($shuffled, 0, $length);
}
function serialkey()
{
	return random(4).'-'.random(4).'-'.random(4).'-'.random(4);
}
echo "Jumlah Generate = $jumlah <br>"."<br>"."<br>";
for ($i=1; $i <=$jumlah ; $i++) { 
	# code...

echo serialkey()."<br>"."<br>";
}
}

?>
