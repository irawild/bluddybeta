<?php	
	if(empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['message']))
	{
		return false;
	}
	
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Bluddy.";
	$email_body = "You have received a new message. \n\n".
				  ": $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \n: $ \nMessage: $message \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>