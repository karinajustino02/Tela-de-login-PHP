<?php

$con = mysqli_connect('localhost', 'root', '', 
'seguranca_noite', '3306');

if (!$con) {
    die("Não foi possivel conectar");
}

?>