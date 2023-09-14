<?php
// Insere as informações na tabela usuarios do banco de dados
session_start();

$PDO = conecta_bd();
$sql = "INSERT INTO  comentarios(nomeUsuario,comentario ) VALUES(:nName,:ncomentario)";
$stmt = $PDO -> prepare($sql);
$stmt -> bindParam(':nName',$_SESSION['username']);
$stmt -> bindParam(':ncomentario',$post);


if ($stmt -> execute()) {
    header('Location: ../../view/Home/home.php');
}
else{
    echo "Ocorreu um erro na inclusão do registro";
    print_r($stmt->errorInfo());
}


?>