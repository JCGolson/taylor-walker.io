Thanks for your message!

<?php
	
	$userName 		= $_POST['myName'];
    $userEmail	 	= $_POST['myEmail'];
    $userPhone      = $_POST['myPhone'];
	$userMessage 		= $_POST['myMessage'];

	$to 			= "martin@martingolson.com";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $userName;
    $body .= "\r\n Email: " . $userEmail;
    $body .= "\r\n Phone: " . $userPhone;
	$body .= "\r\n Message: " . $userMessage;

	mail($to, $subject, $body);
?>