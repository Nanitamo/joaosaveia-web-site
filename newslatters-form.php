<?php 
$errors = '';
$myemail = 'jmsaveia@joaosaveia.ao';//<-----Put Your email address here.
if( empty($_POST['email']))
{
    $errors .= "\n Error: Preencher com um email válido";
}


$email_address = $_POST['email']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: E-mail Invalido";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Newslatters: $email";
	$email_body = "Você recebeu uma nova submissão de newslatter".
	" Aqui estão os detalhes:\n\n Email: $email_address "; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header('Location: index.html');
} 
?>