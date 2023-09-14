<?php
// Constantes com as informações para acesso ao Banco mysql
define("DB_HOST","localhost");
define('DB_NAME', 'redesocial');
define('DB_USER', 'root');
define('DB_PASS', '');



// Habilita as mensagens de erro 

ini_set('display_errors',true);
error_reporting(E_ALL);

// Inclui o arquivo de funções 
require_once "functions.php";



?>