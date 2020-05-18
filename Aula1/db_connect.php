<?php

/* Credencias de Acesso a BD */

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBNAME','conteudo');
$conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';',USER,PASS);

?>