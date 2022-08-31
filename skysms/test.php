<?php 
$day = date('Ymd');

//$timestamp=strtotime(date('2022-08-25 14:35:00')) - strtotime("now");	


	//echo strtotime(date('2022-08-25 15:00:00'))."<br>";
	//echo strtotime("20220825");

	//$timestamp = strtotime("+1 minutes");
	//echo "현재로부터 1분 뒤 : ".date("Y-m-d H:i:s", $timestamp)."<br/>";

	$timestamp =strtotime(date('now')) - strtotime(date('now'));
	
echo  $timestamp;


echo "8/31 0909 aws->git"


?>