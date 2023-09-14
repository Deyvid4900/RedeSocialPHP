<?php
 require_once '../Model/config.php';
 //  Coleta as informações do form no login
 
 $nName = isset($_POST['nName']) ? $_POST['nName']:null;
 $nEmail = isset($_POST['nEmail']) ? $_POST['nEmail']:null;
 $nSenha = isset($_POST['nSenha']) ? $_POST['nSenha']:null;


//  Verifica se o usuario preencheu todos os campos do formulario

if (empty($nName) || empty($nEmail) || empty($nSenha) ) {
    echo "É preciso preencher todos os campos do formulário de cadastro! <br>";
    echo $nName;
    echo $nEmail;
    echo $nSenha;
    exit;
}
require_once '../Model/insereUsuario.php'
?>