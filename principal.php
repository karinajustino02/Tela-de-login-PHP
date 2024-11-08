<?php
session_start();


    include('validalogin.php');

    $nome = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include('links.php');
        ?><br><br>
        Olá, <?php echo($nome); ?>
</body>
<html>