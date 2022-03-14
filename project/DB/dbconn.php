<?php
$host="localhost";
$user="root";
$pass="1234";
$dbname= "mysql";

$conn=mysqli_connect($host,$user,$pass,$dbname);
//한글 입력 하게
mysqli_set_charset($conn,"utf8");

//vmware 8번 사용중 7번에 모듈 깔려있고 참고
/*
 if($conn){
        echo "db성공";
}else{
       echo "db실패";
}
*/


?>
