<?php	
	if(empty($_POST['nomebanco']) || empty($_POST['emailbanco']) || empty($_POST['pais']) || empty($_POST['estado']) || empty($_POST['cidade']) || empty($_POST['endereco']) || empty($_POST['responsavel']) || empty($_POST['cargo']) || empty($_POST['username']) || empty($_POST['passwordbanco']) || empty($_POST['passwordconfirmbanco']) || empty($_POST['chkaceite']))
	{
		return false;
	}
	
	$nomebanco = $_POST['nomebanco'];
	$emailbanco = $_POST['emailbanco'];
	$pais = $_POST['pais'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$endereco = $_POST['endereco'];
	$responsavel = $_POST['responsavel'];
	$cargo = $_POST['cargo'];
	$username = $_POST['username'];
	$passwordbanco = $_POST['passwordbanco'];
	$passwordconfirmbanco = $_POST['passwordconfirmbanco'];
	$chkaceite = $_POST['chkaceite'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Bluddy.";
	$email_body = "You have received a new message. \n\n".
				  "Nomebanco: $nomebanco \nEmailbanco: $emailbanco \nPais: $pais \nEstado: $estado \nCidade: $cidade \nEndereco: $endereco \nResponsavel: $responsavel \nCargo: $cargo \nUsername: $username \nPasswordbanco: $passwordbanco \nPasswordconfirmbanco: $passwordconfirmbanco \nChkaceite: $chkaceite \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $emailbanco";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>