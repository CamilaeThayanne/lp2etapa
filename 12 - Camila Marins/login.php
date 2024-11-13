<?php
session_start();

// Dados do usuário simulado
$valid_username = 'admin';
$valid_password = '1234';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o usuário e a senha são válidos
    if ($username === $valid_username && $password === $valid_password) {
        // Sessão válida
        $_SESSION['user_logged_in'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        // Redireciona com erro
        header("Location: index.php?error=1");
        exit;
    }
}
