<?php 
include "/var/www/html/googlefile/skysms/lib/lib.php";




//테이블 날짜 
$table = substr(date("Ym"),2);    
$table2 = substr(date("Ym"),0,4); //2022

//월 처음,마지막 
$frist_date = date( "Ym01000000" ); 
$last_date = date( "Ymt235959"  );

$now_date = date("Y-m-d H:i:s");

//한주 데이터 
$W_timestamp = strtotime($now_date);

$N_day = date("Ymd000000", $W_timestamp);

$W_timestamp1 = $W_timestamp - 604800;


$week_date = date("Ymd000000", $W_timestamp1);

$H_timestamp = strtotime($frist_date); //20221001 타임스탬프로 변환 계산 위해
$hour_date = date("Ymd000000", $H_timestamp);



$date1=date('Y-m-d H:i:s',strtotime($now_date."-1 month"));
$date2=date('Y-m-d H:i:s',strtotime($now_date."-3 month"));
$date3=date('Y-m-d H:i:s',strtotime($now_date."-90 day"));   
$date4=date('Y-m-d H:i:s',strtotime($now_date."-1 year"));    
$date5=date('Y-m-d H:i:s',strtotime($now_date."+3 day"));   


echo "timestamp자료형 : ".gettype(strtotime($now_date."+3 day"))."<br>";
echo "date자료형 : ".gettype($date1)."<br>"; 
echo "현재시간 : ".$now_date."<br>";
echo "현재시간 -1달 : ".$date1."<br>";
echo "현재시간 -3달 : ".$date2."<br>"; 
echo "현재시간 -90일 : ".$date3."<br>"; 
echo "현재시간 +1년 : ".$date4."<br>"; 
echo "현재시간 +3일 : ".$date5."<br>"; 

$date6=date('Y',strtotime($now_date."-1 month"));
$date7=date('Ymd000000',strtotime($now_date."-3 month"));

echo $date7;



/*
//-----------------------------------한주 데이터 차단()----------------------- 
$sql3 = "SELECT reg_date,filter_ver,osp_id,remote_ip,s_hash from TB_CMC_VIDEO_LOG$table where OSP_ID='SHINHAN' AND reg_date >= date_format(date_sub( now(), INTERVAL 6
		DAY),'%Y%m%d000000')	
UNION 
SELECT reg_date,'3.0.0.14',osp_id,remote_ip,u_hash from TB_DIGITAL_GENDER_LOG$table2 where osp_id='SHINHAN' AND reg_date >= date_format(date_sub( now(), INTERVAL 6 DAY),'%Y%m%d000000')
UNION 
SELECT reg_date,'3.0.0.14',osp_id,remote_ip,u_hash from TB_IMAGE_LOG$table2 where osp_id='SHINHAN' AND result='15' AND reg_date >= date_format(date_sub( now(), INTERVAL 6 DAY),'%Y%m%d000000')";

		echo "한주 데이터 차단(ex) 10/17~10/11):".$sql3."<br><br>";
//-----------------------------------한주 데이터()----------------------- 
$sql4 = "SELECT reg_date,filter_ver,osp_id,remote_ip,s_hash from TB_CMC_VIDEO_LOG$table where OSP_ID='SHINHAN' AND reg_date >= $frist_date AND reg_date <= $last_date
AND reg_date >= $week_date  AND reg_date <= $now_date  
UNION 
SELECT reg_date,'3.0.0.14',osp_id,remote_ip,u_hash from TB_DIGITAL_GENDER_LOG$table2 where osp_id='SHINHAN' AND reg_date >= $frist_date AND reg_date <= $last_date
AND reg_date >= $week_date  AND reg_date <= $now_date  
UNION 
SELECT reg_date,'3.0.0.14',osp_id,remote_ip,u_hash from TB_IMAGE_LOG$table2 where osp_id='SHINHAN' AND  reg_date >= $frist_date AND reg_date <= $last_date
AND reg_date >= $week_date  AND reg_date <= $now_date ";
		 
		 echo "한주 데이터(ex) 10/17~10/11):".$sql4."<br><br>";
*/
?>