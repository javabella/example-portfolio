<?php
    session_start(); 
    include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
    require $_SERVER['DOCUMENT_ROOT'] .'/PHPMailer-master/PHPMailerAutoload.php';

    $securimage = new Securimage();
    $phpmailer = new PHPMailer;

 
    define("CONTACT_MAIL", 'isuzu69@gmail.com');
 
    function ValidateEmail($value){
        $regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
 
        if($value == '') { 
            return false;
        } else {
            $string = preg_replace($regex, '', $value);
            echo $string;
        }
 
        return empty($string) ? true : false;
    }
 
    $post = (!empty($_POST)) ? true : false;
 
    if ($post) {
        $name = stripslashes($_POST['client-name']);
        $email = stripslashes($_POST['client-email']);
        $mes = stripslashes($_POST['client-message']);

        
        $subject = 'Заявка';
        $error = '';    
        $message = '
            <html>
                    <head>
                            <title>Заявка</title>
                    </head>
                    <body>
                            <p>Имя: '.$name.'</p>
                            <p>Email : '.$email.'</p> 
                            <p>Сообщение : '.$mes.'</p>
                    </body>
            </html>';
 
        if (!ValidateEmail($email)) {
            $error = 'Email введен неправильно!';
        }

        if ($securimage->check($_POST['captcha_code']) == false) {
            $error = 'Код с картинки введен неправильно!';
        }
 
        if (!$error) {

            $phpmailer->setLanguage('ru', 'language/');
            $phpmailer->CharSet  = 'UTF-8';
            $phpmailer->Port = 2525;
            $phpmailer->From = $email;
            $phpmailer->FromName = $name;
            $phpmailer->addAddress('isuzu69@gmail.com', 'Lena Pavlova');
            $phpmailer->isHTML(true);                                  
            $phpmailer->Subject = 'Сообщение из pro-verstalka.ru';
            $phpmailer->Body    = $message;


            if(!$phpmailer->send()) {
                echo 'Сообщение не отправилось. ';
                echo 'Ошибка: ' . $mail->ErrorInfo;
            } else {
                echo 'OK';
            }

        }else{
            echo '<div class="bg-danger">'.$error.'</div>';
        }
 
    }
?>