<?php 

			$sb = "XAC NHAN THONG TIN DAT HANG THANH CONG ";
			// $name = $_POST['name'];
$email = $_POST["email"];
$body = "Bạn đã thanh toán mua hàng thành công ! <BR> với địa chỉ :".$diachi."<br> Họ Và Tên :".$hovaten."<br> Số điện thoại ".$dienthoai."<br>Hãy kiểm tra lại thông tin của bạn và liên lạc với chúng tôi nếu có bất kỳ sai sót <br> theo số điện thoại :0363877693";

date_default_timezone_set('Etc/UTC');


require 'PHPMailer/PHPMailerAutoload.php';



ini_set( 'display_errors', 1 );

$mail = new PHPMailer;


$mail->isSMTP();

// $mail->SMTPDebug = 2;


$mail->Debugoutput = 'html';


$mail->Host = 'smtp.gmail.com';

$mail->Port = 587		;

$mail->SMTPSecure = 'tls';


$mail->SMTPAuth = true;


$mail->Username = "trandoandat38@gmail.com";


$mail->Password = "dat15011995";

$mail->Subject = 'PHPMailer GMail SMTP test';

$mail->msgHTML($body);

$mail->AltBody = 'This is a plain-text message body';
$mail->addAddress($email,$name);
$mail->Subject = $sb;



if (!$mail->send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "<script> gui mail that bai  </script>";
	
}
?>