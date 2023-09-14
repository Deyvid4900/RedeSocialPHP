<?php
// Insere as informações na tabela usuarios do banco de dados
$PDO = conecta_bd();
$sql = "INSERT INTO  comentarios(nomeUsuario,comentario ) VALUES(:nName,:ncomentario)";
$stmt = $PDO -> prepare($sql);
$stmt -> bindParam(':nName',$nName);


if ($stmt -> execute()) {
    header('Location: ../Login.php');
}
else{
    echo "Ocorreu um erro na inclusão do registro";
    print_r($stmt->errorInfo());
}


?>