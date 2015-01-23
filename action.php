<?php
	require $_SERVER['DOCUMENT_ROOT'] .'/PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;
    $mail->setLanguage('ru', 'language/');

	$mail->Port = 2525;                                    // TCP port to connect to

	$mail->From = '"'.$_POST["client-email"].'"';
	$mail->FromName = '"'.$_POST["client-name"].'"';
	$mail->addAddress('isuzu69@gmail.com', 'Lena Pavlova');     // Add a recipient
	
	$mail->isHTML(true);                                  // Set email format to HTML

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

