<?php
 $errorMessage = '';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$messageVal = $_POST['message'];

	$message = $messageVal;
	$message .= "\n\n" . $name  . ", " . $phone;

$headers = 'From: '. $email . "\r\n" .


    'Reply-To: '. $email .  "\r\n" .
    'X-Mailer: PHP/' . phpversion();
       
$success =  mail('example@email.co.uk', 'Information Enquiry', $message, $headers);
if (!$success) {
    $errorMessage = error_get_last()['message'];
}

echo $errorMessage;
?>