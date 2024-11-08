<?php

$nivel = $_SESSION['nivel'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="dados.php">Meu Cadastro</a> |
    <?php if($nivel == 1) { ?>
    <a href="cadastro.php">Novo Usuario</a> |
    <a href="todos.php">Usuarios</a> |
    <?php } ?> 
    <a href="logout.php">Sair</a>
</body>
</html>