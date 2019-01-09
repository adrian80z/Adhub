<?php
	require_once('phpmailer/class.phpmailer.php');
	include('phpmailer/class.smtp.php');
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure ="tls";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->Username = "admarket373@gmail.com";
	$mail->Password = "#admark3t!";
	$mail->SetFrom("admarket373@gmail.com", "Ad Market");
	$mail->AddReplyTo("admarket373@gmail.com", "Ad Market2");
	$mail->Subject = "Welcome!";
	//$mail->AltBody = = "To view the message, please use an HTML compatible email viewer!"; 
	// optional, comment out and test
	
	
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	$body = "'.$message.'";
	$body = ereg_replace("[\]", '', $body);
	
	$mail->MsgHTML($body);
	$mail->AddAddress("adrian.ziolkowski@gmail.com", "Adrian");
	//$mail = AddAttachment("path/filename.ext");
	
	
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  echo "Message sent!";
	  #echo $body;
	}
	
?>