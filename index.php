<?php

	if( isset($_REQUEST['submit']) ){
		require 'PHPMailerAutoload.php';

				$mail = new PHPMailer;

				//$mail->SMTPDebug = 1 ;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'niteshmangla1992@gmail.com';                 // SMTP username
				$mail->Password = 'lkmloiriyipwisho';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to
				$mail->SMTPOptions = array(
			    'ssl' => array(
			        'verify_peer' => false,
			        'verify_peer_name' => false,
			        'allow_self_signed' => true
			    )
			);
				$mail->setFrom('niteshmangla1992@gmail.com', 'PhpMailer');
				$mail->addAddress('niteshmangla1992@gmail.com');     // Add a recipient
				
				
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = 'PHPMAILER TEST EXAMPLE';
				$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if(!$mail->send()) {
				    echo 'Message could not be sent.';
				    echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
				    echo 'Message has been sent';
				}
					}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mail sender</title>
</head>
<body>
	<form action="index.php" mathod="post">
	<input type="submit" name="submit" value="SEND MAIL" class="btn btn-primary">
</form>
</body>
</html>
