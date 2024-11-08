<?php
    include('conexao.php');
    include('funcoes.php');
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    $cripto = criptografar($senha);
    $select = "SELECT nome, login, nivel, senha
    FROM usuario
    WHERE login = '$login'
    AND senha = '$cripto'";

    $query = mysqli_query($con, $select);
    $dados = mysqli_fetch_row($query);
    if ($login == isset($dados[1]) && $senha == isset($dados[3])) {
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $dados[0];
        $_SESSION['nivel'] = $dados[2];
        header('location: principal.php');
    } else {
        echo '<script>alert("Usuario ou Senha Invalido");
        window.location="index.php";
        </script>';
    }

?>