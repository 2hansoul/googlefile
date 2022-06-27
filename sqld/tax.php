<?php 
$money = 890;

echo "고객지불돈:".$money."\n";

$tax  = $money*0.1;

echo "세금:".$tax,3;

$result = $money-round($tax,3);

echo "\n결과:".$result."\n";

$ee =$result/100 ;

echo $ee."\n";

?>