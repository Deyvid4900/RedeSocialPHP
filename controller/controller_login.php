<?php
require_once '../Model/config.php';
// Supondo que você já tenha uma conexão ao banco de dados ($conecta_bd)
$username = $_POST['nName'];
$password = $_POST['nSenha'];
$dbUsername = DB_USER;
$dbPassword = DB_PASS;

// Use uma consulta preparada para evitar injeção de SQL
$stmt = $conn->prepare("SELECT  nomeUsuario, senhaUsuario FROM usuarios WHERE nomeUsuario = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

require_once '../Model/lerUsuario.php';
?>

