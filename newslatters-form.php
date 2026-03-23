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

// Sanitizar e validar email
$email = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));

if (empty($email)) {
    $errors[] = 'Por favor insira um email válido.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'E-mail inválido.';
} elseif (preg_match('/[\r\n]/', $email)) {
    $errors[] = 'Dados inválidos.';
}

if (empty($errors)) {
    $subject = 'Nova subscrição de Newsletter';
    $body    = "Nova subscrição de newsletter.\n\nEmail: {$email}";
    $headers = "From: {$myemail}\r\nReply-To: {$email}";

    mail($myemail, $subject, $body, $headers);

    // Regenerar token após uso bem-sucedido
    unset($_SESSION['csrf_token']);

    header('Location: index.php?subscribed=1');
    exit;
}

// Em caso de erro, voltar à página anterior
header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'index.php') . '?newsletter_error=1');
exit;
