<?php


$ukuran=5;
echo "Panjang = $ukuran <br/><br/>";
for($a=1; $a<=$ukuran; $a++){
	for($b=1; $b<=$ukuran; $b++){ if(($a==2&&$b>=2&&$b<$ukuran)||($a==4&&$b>=2&&$b<$ukuran)){
			echo " = ";
        }
		else{
			echo " * ";
		}
	}
	echo "<br/>";
}

?>

