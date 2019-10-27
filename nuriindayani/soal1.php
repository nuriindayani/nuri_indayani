<?php
$word=" dumbways";
$keyword = array(
        1=>"dumb",
        2=>"ways",
        3=>"the",
        4=>"best");
$hasil=strpos($word,$keyword[1]);
if ($hasil ==TRUE){
  echo "$keyword[1] ==> true";
}
else {
  echo "$keyword[1] ==> false";
}

print("<br>");

$hasil=strpos($word,$keyword[2]);
if ($hasil ==TRUE){
  echo "$keyword[2] ==> true";
}
else {
  echo "$keyword[2] ==> false";
}

print("<br>");

$hasil=stripos($word,$keyword[3]);
if ($hasil == TRUE){
  echo "$keyword[3] ==> true";
}
else {
  echo "$keyword[3] ==> false";
}

print("<br>");

$hasil=strpos($word,$keyword[4]);
if ($hasil == TRUE){
  echo "$keyword[4] ==> true";
}
else {
  echo "$keyword[4] ==> false";
}

?>