<?php
    session_start();
	$to = 'andrew@andrew-lord.co.uk';
	$msgSubject = 'Portfolio contact form enquiry';
	$confirmSubject = 'Confirmation of message sent from Andrew Lord\'s Portfolio';
	$confirmBody = "An email was sent from this address to me, Andrew Lord, through the contact form on my portfolio.\nIf you did not, then someone may have used your email address.\nThank you for contacting me and I will get back to you as soon as possible.\nHere is a copy of the message that was sent to me: \n\n";
	$from = '';
	$email = '';
	$url = '';
	$body = '';
	$msgBody = '';
	
	if($_POST) {
		$from = $_POST['name'];
		$email = $_POST['email'];
		$url = $_POST['url'];
		$body = $_POST['message'];
		$validEmail = eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$', $email);
    	$crack = eregi("(\r|\n)(to:|from:|cc:|bcc:)", $body);
    	if ($email && $body && $validEmail && !$crack) {
        	if (mail($to, $msgSubject, $body, 'From: '.$email."\r\n")
          		&& mail($email, $confirmSubject, $confirmBody.$body, 'From: '.$to."\r\n")) {
                $_SESSION['contactResult'] = 'success';
                $_SESSION['contactText'] = 'Message Sent Successfully';
          		header("location: ../index.php#contact");
          	} else {
          		//Failure
                $_SESSION['contactResult'] = 'failure';
                $_SESSION['contactText'] = 'Message Sending Failed';
          		header("location: ../index.php#contact");
          	}
        } else if($crack) {
        	//Email headers were found in the body. Cracking attempt.
            $_SESSION['contactResult'] = 'crack';
            $_SESSION['contactText'] = 'Cracking Attempt';
      		header("location: ../index.php#contact");
        } else {
        	//Form not complete.
            $_SESSION['contactResult'] = 'incomplete';
            $_SESSION['contactText'] = 'Form Incomplete';
      		header("location: ../index.php#contact");
        }
    }
?>
