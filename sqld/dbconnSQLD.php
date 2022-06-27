<?php

$host="localhost";
$user="hansol";
$pass="1234";
$dbname= "sqld";

$conn=mysqli_connect($host,$user,$pass,$dbname);
//한글 입력 하게
mysqli_set_charset($conn,"utf8");

if($conn){
   echo "성공";
}else{
 echo "실패";     
}

?>