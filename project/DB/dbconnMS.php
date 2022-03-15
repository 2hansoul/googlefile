<?php

$host="192.168.5.128";
$user="hansol";
$pass="hansol";
$dbname= "sms";

$conn=mysqli_connect($host,$user,$pass,$dbname);

//한글 입력 하게
mysqli_set_charset($conn,"utf8");


 if($conn){
        echo "성공";
}else{
       echo "실패";
}


?>
