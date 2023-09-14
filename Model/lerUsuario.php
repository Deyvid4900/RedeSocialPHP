<?php
// Verifique se há um registro correspondente
if ($stmt->num_rows === 1) {
    $stmt->bind_result($dbUsername, $dbPassword);
    $stmt->fetch();

    // Verifique se a senha fornecida corresponde à senha no banco de dados
    if (password_verify($password, $dbPassword)) {
        // Autenticação bem-sucedida
        session_start();
        $username = $_SESSION['username'];
        header('Location: ../view/Home/home.php ');
        // Redirecione para a página de sucesso ou área restrita
    } else {
        // Senha incorreta
        echo "Senha incorreta!";
    }
} else {
    // Usuário não encontrado
    echo "Usuário não encontrado!";
}
?>