<?php
require_once "./dbconnSQLD.php";
$p=1;

$sql = "insert into info
(id,pass,name,phone)
value
('af','a1111','한솔','011-1114-4134')";


 for($i=1; $i<30; $i++){
       $sql+=$i;
}

$row=mysqli_query($conn,$sql);


?>