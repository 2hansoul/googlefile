<?php

	 include "loginsession.php";
	 include "dbconnMS.php";
	 include "password.php";
/*
	 $host="localhost";
	 $user="root";
	 $pass="1111";
	 $dbname= "user_login";

	$conn=mysqli_connect($host,$user,$pass,$dbname);
*/
	//null 값인지 체크 null값이면 입력 값이 없으니 닫는다
	if($login_session){
	   echo "<script> alert('이미 로그인 되었습니다'); location.href='../test/_index.php'; </script>";
	}else{
	$id=$_POST['id'];
	$pwd=$_POST['password'];
	//$sql1 = "SELECT*FROM login where id='$id' AND pass='$pwd'";
    $sql ="SELECT pass FROM userlogin WHERE id = '" . $id . "';";
	$row=mysqli_query($conn,$sql);
	$result=mysqli_fetch_array($row);
	//암호화 한 비밀번호 체크

    //$result[0]으로 판별을 해도 되는건지 사실 잘 모르겠다 어떻게 하다가 되긴한건데
     //password_verify(입력한값,암호화된 비밀번호);
	if(password_verify($pwd, $result[0])){
	//세션에 받아온 아이디값을 저장
	$_SESSION['id'] = $id;
	echo "<script>alert('환영합니다');location.href='../test/_index.php';</script>";
	}else{
    echo "<script> alert('아이디나 패스워드 확인하세요'); history.back(); </script>";
	}
	}//session if

?>


