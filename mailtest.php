<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '/var/www/html/googlefile/PHPMailer/src/Exception.php';
require '/var/www/html/googlefile/PHPMailer/src/PHPMailer.php';
require '/var/www/html/googlefile/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch $mail->IsSMTP(); // telling the class to use SMTP
$mail->IsSMTP(); // telling the class to use SMTP
try {
$mail->CharSet = "utf-8"; //한글이 안깨지게 CharSet 설정
$mail->Encoding = "base64";
$mail->Host = "smtp.gmail.com"; // email 보낼때 사용할 서버를 지정
$mail->SMTPAuth = true; // SMTP 인증을 사용함
$mail->Port = 465; // email 보낼때 사용할 포트를 지정
$mail->SMTPSecure = "ssl"; // SSL을 사용함
$mail->Username = "메일주소@gmail.com"; // Gmail 계정
$mail->Password = "메일 PW"; // 패스워드
$mail->SetFrom('보내는 사람 메일 주소', '표시될이름'); // 보내는 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
$mail->AddAddress('받는사람@gmail.com'); // 받을 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
$mail->Subject = 'Test email'; // 메일 제목
$mail->Body =
"Test email 발송"; // 내용
$mail->Send(); // 발송

echo "Message Sent OK //발송 확인
\n";
}
catch (phpmailerException $e) {
echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
echo $e->getMessage(); //Boring error messages from anything else!
}
?>
