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
$arr =[['a','c','b','e','d'],['g','e','f']]; 
  
// Standard sort 
$data1 = $arr[0]; 
$bb=sort($data1); 
$jlh1=count($arr[0]);
/*
echo "Array after Standard sorting: "; 
printArray($data1);

*/

// natural sort 
$data2 = $arr[1]; 
$ba=sort($data2); 
$jlh2=count($arr[1]);
/*
echo "\nArray after Natural sorting: "; 
printArray($data2); 
*/
if ($jlh1>$jlh2) {
echo "var data=[['a','c','b','e','d'],['g','e','f']]<br><br>";
 echo "[";
printArray($data1);
 echo "]";
 echo "<br>";
echo "[";
    printArray($data2);
echo "]";
}else{
    printArray($data2);
    echo "<br><br>";
    printArray($data1);
}

?>