<?php 


$name = $_POST['name'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$mail->SMTPDebug = 3;             

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'vlad.polishhuk.2018@mail.ru';
$mail->Password = 'CevRyffyevyitt0';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
 
$mail->setFrom('vlad.polishhuk.2018@mail.ru', '8 Марта');
$mail->addAddress('vlad.polishchuk.2021@mail.ru');
$mail->isHTML(true);                                 

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>