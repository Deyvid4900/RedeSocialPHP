<?php
// Insere as informações na tabela usuarios do banco de dados
$senhaHash= password_hash($nSenha, PASSWORD_DEFAULT);
$PDO = conecta_bd();
$sql = "INSERT INTO  usuarios(nomeUsuario,emailUsuario,senhaUsuario ) VALUES(:nName,:nEmail,:nSenha)";
$stmt = $PDO -> prepare($sql);
$stmt -> bindParam(':nName',$nName);
$stmt -> bindParam(':nEmail',$nEmail);
$stmt -> bindParam(':nSenha',$senhaHash);

if ($stmt -> execute()) {
    header('Location: ../Login.php');
}
else{
    echo "Ocorreu um erro na inclusão do registro";
    print_r($stmt->errorInfo());
}


?>