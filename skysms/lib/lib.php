<?php
function aws_db(){

    global $connect;

    $host = "13.125.0.94";
    $id   = "hansol"; 
    $pw   = "1234";
    $dbname = "dbro";

    if(!$connect){
        $connect = mysqli_connect($host, $id, $pw,$dbname);
    }else{
       echo "DB ���ӽ� ������ �߻��߽��ϴ�";
    }
    
    return $connect;
}

?>