<?php 
include "/var/www/html/googlefile/skysms/lib/lib.php";

if (!$connect) $connect = aws_db();

$arry = array('1','2','3');

echo "기본 foreach 방식<br>";
foreach($arry as $value){
	echo $value."<br>";
}

echo "key foreach 방식<br>";
$arry = array(
	"A" => '1',
	"B" => '2',
	"C" => '3'
);

foreach($arry as $key => $value){
	echo "$key : $value"."<br>";
}


?>