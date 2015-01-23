<?php
	require $_SERVER['DOCUMENT_ROOT'] .'/PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;
    $mail->setLanguage('ru', 'language/');
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	// $mail->isSMTP();                                      // Set mailer to use SMTP
	// $mail->Host = 'mx1.hostinger.ru';  // Specify main and backup SMTP servers
	// $mail->SMTPAuth = true;                               // Enable SMTP authentication
	// $mail->CharSet  = 'UTF-8';
	// $mail->Username = 'isuzu69@gmail.com';                 // SMTP username
	// $mail->Password = 'reiybh69';                           // SMTP password
	//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 2525;                                    // TCP port to connect to

	$mail->From = '"'.$_POST["client-email"].'"';
	$mail->FromName = '"'.$_POST["client-name"].'"';
	$mail->addAddress('isuzu69@gmail.com', 'Lena Pavlova');     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	//$mail->SetFrom('isuzu69@gmail.com', 'версталка');
	$mail->Subject = 'Here is the subject';
	$mail->Body    = '"'.$_POST["client-message"].'"';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo 'Сообщение не отправилось. ';
	    echo 'Ошибка: ' . $mail->ErrorInfo;
	} else {
	    echo 'Сообщение было успешно отправлено';
	}

?>

