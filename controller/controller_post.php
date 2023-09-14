<?php
 require_once '../Model/config.php';
 //  Coleta as informações do form no login
 
 $post = isset($_POST['nPost']) ? $_POST['nPost']:null;



//  Verifica se o usuario preencheu todos os campos do formulario

if (empty($post) ) {
    echo 'n envio';
    exit;
}
echo $_USUARIO;
require_once '../Model/insereComentario.php'
?>