<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message']) AND !empty($_POST['phone'])){
	
	$headers = 'From: GammaFlex\r\n'.
				'Reply-To: ivanko.v05@mail.ru\r\n'.
				'X-Mailer: PHP/'. phpversion();
	$theme = 'Новое сообщение';

	$letter = 'Данные сообщения:\r\n';
	$letter .='Имя:'.$_POST['name'].'\r\n';
	// $letter .='E-mail:'.$_POST['email'].'\r\n';
	$letter .='Телефон:'.$_POST['phone'].'\r\n';
	$letter .='Сообщение:'.$_POST['message'].'\r\n';

	if (mail('ivanko.v05@mail.ru', $theme, $letter, $headers )){
	  header('Location:/thankyou.php');
} 


else {
	header ('Location:/error.php');
}
else {
	header ('Location:/');
}