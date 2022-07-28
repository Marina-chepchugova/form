<?php
      use  PHPMailer\PHPMailer\PHPMailer;
		use  PHPMailer\PHPMailer\Exseption;

		require "PHPMailer/src/PHPMailer/php";
		require "PHPMailer/src/Exseption/php";

		$mail = new PHPMailer(true);
		$mail -> CharSet =UTF-8;


		$pilotname = $_POST['pilotname'];
		$pilotbirth = $_POST['pilotbirth'];
		$pilotemail = $_POST['pilotemail'];

		$body =$pilotname .'  ' . $pilotbirth . '  ' . $pilotemail;
		$theme ="[Заявка]" ;

		$mail-> addAdress('chepchugova.m82@gmail.com');

		$mail->Subject = $theme;
		$mail->body = $body;

		$mail->send();