<?php	
	if(empty($_POST['nome']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['idade']) || empty($_POST['optapos']) || empty($_POST['optaneg']) || empty($_POST['optbpos']) || empty($_POST['optbneg']) || empty($_POST['optabpos']) || empty($_POST['optabneg']) || empty($_POST['optopos']) || empty($_POST['optoneg']) || empty($_POST['']) || empty($_POST['email4']) || empty($_POST['password']) || empty($_POST['passwordconfirm']))
	{
		return false;
	}
	
	$nome = $_POST['nome'];
	$ = $_POST[''];
	$ = $_POST[''];
	$idade = $_POST['idade'];
	$optapos = $_POST['optapos'];
	$optaneg = $_POST['optaneg'];
	$optbpos = $_POST['optbpos'];
	$optbneg = $_POST['optbneg'];
	$optabpos = $_POST['optabpos'];
	$optabneg = $_POST['optabneg'];
	$optopos = $_POST['optopos'];
	$optoneg = $_POST['optoneg'];
	$ = $_POST[''];
	$email4 = $_POST['email4'];
	$password = $_POST['password'];
	$passwordconfirm = $_POST['passwordconfirm'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Bluddy.";
	$email_body = "You have received a new message. \n\n".
				  "Nome: $nome \n: $ \n: $ \nIdade: $idade \nOptapos: $optapos \nOptaneg: $optaneg \nOptbpos: $optbpos \nOptbneg: $optbneg \nOptabpos: $optabpos \nOptabneg: $optabneg \nOptopos: $optopos \nOptoneg: $optoneg \n: $ \nEmail4: $email4 \nPassword: $password \nPasswordconfirm: $passwordconfirm \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email4";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>