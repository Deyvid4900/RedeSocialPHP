<?php
    // A função faz a conexao com o mysql atravez de pdo

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    };
    

    function conecta_bd(){
        $PDO =  new PDO("mysql:host=" .DB_HOST.';dbname=' . DB_NAME.';charset=utf8', DB_USER , DB_PASS);
        return $PDO;
    }

?>