<?php

	/************************************************************************************************
	*
	* PHP ???? ???? ???
	*
	* ????? ?? returnURL?? ????? ?? ????.
	* sendMsg?? sendDate urlencode()?? ?????? ??????? ??????.
	* file_get_contents() ??? ???? ?????? ??????? ???
    * php.ini ??????? allow_url_fopen ???? On ???? ??? ????? ??????????.
	*
	* allow_url_fopen = On?? ????? socket ??? html?????? ?????? ??????? ???? ??????.
	*
	* ?????? ?????? | ???????? | ??????? | ???а?? | ??????? | ??????????????^?????? | ??????????????^?????? ... ???·? ???
	* ?????????? ????? | ?? ??????? ?????ø? ????.
	*
	* ??? ??? ?????? ???? ??????? ??????.
	* ???? ???? ?? ?????????? ??????? ?????? ?? ???????? ??????.
	* ????????? ??????? ???????? ??????.
	*
	* charset ?? EUC-KR ?? ??? http://www.skysms.co.kr/apiSend/sendApi.php
	* charset ?? UTF-8 ?? ??? http://www.skysms.co.kr/apiSend/sendApi_UTF8.php
	*aaaaaaaaaaa������������������???????????????????
	* ???????�?????.
	*ssss���� 
	* ???????? 02-3430-5074 ?????????? ????�?????.?????????????ㅁㅁㅁㅁㅁㅁㅁㅁㅁ
	*
	****************************************************************************************************/
			//??????? ??? ????
			function SendMsgApiToUrl($sendUrl){

				$sendResult = file_get_contents($sendUrl);
		
				$sendResult = trim($sendResult);
		
				return $sendResult;
			}

	

			echo "111";
			exit;



	
	$sUserid = "2hansoul";										//??????? ???adaf�������� ??????? ID
	$authKey = "Nw986fHeek6hvUtvTuYpCqwdaHe8U9D9";						//??????? ?????????? ?? ?????? ????? ?????????
	$sendMsg = urlencode('jjjjjjjjjjjjjjj');										//?????? ????? ????
	$destNum = $_GET['destNum'];													//??º? ????????. ?�??????? | ?? ??????? ??? ??) 01000000000|01000000001|01000000002...
	$callNum = $_GET['callNum'];												//?????º? ??????. ??????,????? ?????? ?? ?????????°? ??? ????? ????? ?? ??????? ???????? ??????.(??????????)
	$sMode = "Test";												//????????? ?????????? ??????? ????. Test(????????) ??? Real(??????). ???? : Test
	$sendDate = urlencode(date("NOW()"));							//???????? urlencode('???')
	$sType = $sType;													//ª?????? ??? ??????? ??????? ????. SMS(?F??????) ??? LMS(??????). ???? : SMS
	$customVal = "name^$sUserid|tel^$destNum";									//????? ???? ????. ??????^??|??????^?? ???·? ????.
	$sSubject = urlencode("");										//sType?? (??????)LMS?? ??�?? ???. ????????????. ???? ?????? "???????"?? ????

	$sendUrl = "http://www.skysms.co.kr/apiSend/sendApi_UTF8.php";

	$sendParam = "?sUserid=".$sUserid."&authKey=".$authKey."&sendMsg=".$sendMsg."&destNum=".$destNum."&callNum=".$callNum."&sMode=".$sMode.
	"&sendDate=".$sendDate."&sType=".$sType."&sSubject=".$sSubject."&customVal=".$customVal;

	$sendParamURL = $sendUrl.$sendParam;
	
	$sendResult = SendMsgApiToUrl($sendParamURL);

		echo "111";
	//echo $sendResult;
	
?>