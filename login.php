<?php

include_once('./connection.php');

if (isset($_POST['user']) || isset($_POST['pwd'])) {



    if (strlen($_POST['user']) == 0) {
        echo "Preencha o campo Usuario!";
    } else if (strlen($_POST['pwd']) == 0) {
        echo "Preencha o campo de Senha!";
    } else {

        $user = mysqli_real_escape_string($link, $_POST['user']);
        $senha = mysqli_real_escape_string($link, $_POST['pwd']);

        $sql = "select * from users where user = '$user' AND senha = '$senha'";

        $query = mysqli_query($link, $sql) or die('Erro na query' . mysqli_error($link));

        $quantidade = mysqli_num_rows($query);

        if ($quantidade == 1) {
            $usuario = mysqli_fetch_assoc($query);
            
            // cria sessão
            if (!isset($_SESSION)) {
                session_start();
            }
            
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['user'] = $usuario['user'];
            
            header("Location: ./index.php");
        } else {
            echo "Falha ao logar! Email ou senha incorretos";
        }
    }
}
