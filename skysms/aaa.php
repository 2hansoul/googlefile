<?php
include "/var/www/html/googlefile/skysms/lib/lib.php";
/*
aws_db();

$sql = "select count(*) from test";
$row = mysqli_query($connect,$sql);
$result=mysqli_num_rows($row);

echo $result;
$date = new DateTime(date("Y-m-01")); #DateTime 오브젝트변수를 생성
//echo "이달 1일:" . $date->format("Y-m-d") . "\n";
$date->add(new DateInterval('P1M')); # 생성한 변수에 한달을 더함
$date->sub(new DateInterval('P1D')); # 변수에 하루를 뺌
//echo "이달 말일:" . $date->format("Y-m-d") . "\n";

function get_this_month_firstday() {
    $date = new DateTime(date("Y-m-01"));
    return $date;
}
function get_this_month_lastday() {
    $date = new DateTime(date("Y-m-01"));
    $date->add(new DateInterval('P1M'));
    $date->sub(new DateInterval('P1D'));
    return $date;
}
*/


$timestamp = strtotime("-1 week");
echo "현재로부터 1주 뒤 : ".date("Ymdhis", $timestamp)."<br/>";

$now_date = date('ymdhis');

echo $now_date;
?>