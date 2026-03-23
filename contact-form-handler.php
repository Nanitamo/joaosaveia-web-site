<?php
session_start();
require_once 'includes/csrf.php';

// Validar token CSRF
if (!csrf_validate()) {
    http_response_code(403);
    die('Pedido inválido.');
}

$errors = [];
$myemail = 'jmsaveia@joaosaveia.ao';

// Sanitizar entradas
$name    = trim(strip_tags($_POST['name'] ?? ''));
$email   = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
$message = trim(strip_tags($_POST['message'] ?? ''));

// Validar campos obrigatórios
if (empty($name))    $errors[] = 'Nome é obrigatório.';
if (empty($message)) $errors[] = 'Mensagem é obrigatória.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'E-mail inválido.';
}

// Bloquear header injection
if (preg_match('/[\r\n]/', $name) || preg_match('/[\r\n]/', $email)) {
    $errors[] = 'Dados inválidos.';
}

if (empty($errors)) {
    $subject = 'Submissão de formulário de contacto: ' . $name;
    $body    = "Você recebeu uma nova mensagem.\n\nNome: {$name}\nEmail: {$email}\n\nMensagem:\n{$message}";
    $headers = "From: {$myemail}\r\nReply-To: {$email}";

    mail($myemail, $subject, $body, $headers);

    // Regenerar token após uso bem-sucedido
    unset($_SESSION['csrf_token']);

    header('Location: contact.php?sent=1');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Erro no formulário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container" style="margin-top:60px;">
    <div class="alert alert-danger">
        <h4>Ocorreu um erro ao enviar a mensagem:</h4>
        <ul>
            <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="contact.php" class="btn btn-default">Voltar</a>
    </div>
</div>
</body>
</html>
