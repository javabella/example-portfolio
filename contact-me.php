<?php session_start(); ?>

<?php 
	include 'header.php';  
	include 'nav.php';
	require $_SERVER['DOCUMENT_ROOT'] .'/PHPMailer-master/PHPMailerAutoload.php';
	include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
    $securimage = new Securimage();
	
    $mail = new PHPMailer;
    $mail->setLanguage('ru', 'language/');
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'user@example.com';                 // SMTP username
	$mail->Password = 'secret';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->From = 'from@example.com';
	$mail->FromName = 'Mailer';
	$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
	$mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo('info@example.com', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');

	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}



?>

<div id="content" id="call-me">
	<div class="block callme">
		<h1>У вас интересный проект? Напишите мне</h1>
		<form action="" method="">
			<div class="clearfix">
				<div class="left">
					<p>Имя</p> 
					<div class="input-wrapper cli-name">
						<input id="error" type="text" name="client-name" placeholder="Как к Вам обращаться" required>
						<div class="tooltip">Вы не ввели имя<div class="icon arrow to-right"></div></div>
					</div>
					
				</div>
				<div class="right">
					<p>Email</p>
					<div class="input-wrapper cli-email">
						<input id="error" type="email" name="client-email" placeholder="Куда мне писать" required>	
						<div class="tooltip">Вы не ввели email<div class="icon arrow to-left"></div></div>
					</div>
					
				</div>
			</div>
			
			<p>Сообщение</p>
			<div class="input-wrapper cli-message">
				<textarea id="error" name="client-message" placeholder="Кратко в чем суть" required></textarea>	
				<div class="tooltip">Ваш вопрос<div class="icon arrow to-right"></div></div>
			</div>
			

			<p class="smaller">Введите код, указанный на картинке</p>
			<div class="clearfix capcha-row">
				<div class="left">
					<div class="capcha">
						<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image">
					</div>	
				</div>
				<div class="right">
					<div class="input-wrapper cli-capcha">
						<input id="error" type="text" placeholder="Введите код" name="captcha_code">
						<div class="tooltip one">Вы не ввели код<div class="icon arrow to-left"></div></div>
						<div class="tooltip two">Неправильный код<div class="icon arrow to-left"></div></div>	
					</div>
					<a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ другое изображение ]</a>
				</div>
			</div>

			<div class="clearfix btn-row">
				<div class="left">
					<input class="btn" type="submit" value="Отправить">
				</div>
				<div class="right">
					<input class="btn" type="reset" value="Очистить">
				</div>
			</div>
			
			
			
		</form>
	</div>
</div>

<?php include 'footer.php' ?>

<?php
if ($securimage->check($_POST['captcha_code']) == false) {
  // the code was incorrect
  // you should handle the error so that the form processor doesn't continue

  // or you can use the following code if there is no validation or you do not know how
  echo "The security code entered was incorrect.<br /><br />";
  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
  exit;
}

?>