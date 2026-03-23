<?php 
$errors = '';
$myemail = 'jmsaveia@joaosaveia.ao';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: Todos os campos devem ser preenchidos";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: E-mail Invalido";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Submissão de formulário de contato: $name";
	$email_body = "Você recebeu uma nova mensagem.".
	" Aqui estão os detalhes:\n Nome: $name \n Email: $email_address \n Mensagem \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
    echo nl2br($errors);
?>


</body>
</html>