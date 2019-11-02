<?php 
// PHP program to sort an array  
// in standard and natural ways. 
  
// function to print array 
function printArray ($arr)
{ 
    foreach ($arr as $value) { 
        echo "$value "; 
    } 
} 
  
  
// declare array 
$arr =['angka1'=>[2,3,4,5],'angka2'=>[1,3,4,5],'angka3'=>[1,2,4,5],'angka4'=>[1,2,3,5],'angka5'=>[1,2,3,4]]; 
  
// Standard sort 
$jumlah1=array_sum($arr['angka1']);
$jumlah2=array_sum($arr['angka2']);
$jumlah3=array_sum($arr['angka3']);
$jumlah4=array_sum($arr['angka4']);
$input="input : [1,2,3,4,5] ";
$input1="angka 1 : 2+3+4+5 = ";
$input2="angka 2 : 1+3+4+5 = ";
$input3="angka 3 : 1+2+4+5 = ";
$input4="angka 4 : 1+2+3+5 = ";
$input5="angka 5 : 1+2+3+4 = ";
$ket1="Maka angka terkecilnya adalah ";
$ket2="Maka angka terbesarnya adalah ";
$max=max($jumlah1,$jumlah2,$jumlah3,$jumlah4);
$min=min($jumlah1,$jumlah2,$jumlah3,$jumlah4);
/*
echo "Array after Standard sorting: "; 
printArray($data1);

*/
echo "$input <br><br>";
echo "$input1 $jumlah1<br>
      $input2 $jumlah2<br>
      $input3 $jumlah3<br>
      $input4 $jumlah4<br><br>";
// natural sort 

echo "$ket1 $max <br>";
echo "$ket1 $min ";

?>