<?php


$ukuran=5;
echo "Panjang = $ukuran <br/><br/>";
for($a=1; $a<=$ukuran; $a++){
	for($b=1; $b<=$ukuran; $b++){ if(($a==3&&$b==3)||(($a==2&&$b==2)||($a==2&&$b==4))||
	                                 ($a==1&&$b==3)||(($a==4&&$b==2)||($a==4&&$b==4))||
	                                 ($a==5&&$b==3)){
			echo "  =  ";
        }
		else{
			echo "  *  ";
		}
	}
	echo "<br/>";
}

?>

