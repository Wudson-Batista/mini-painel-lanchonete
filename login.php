<?php

include_once('./connection.php');

header('Access-Control-Allow-Origin: http://localhost/aula-php/lanchonete/login.js');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

$pwd = $_POST['pwd'];
$user = $_POST['user'];

// echo json_encode($pwd);

if (isset($_POST['user']) || isset($_POST['pwd'])) {

    if (strlen($_POST['user']) == 0) {
        echo json_encode("Preencha o campo Usuario!");
    } else if (strlen($_POST['pwd']) == 0) {
        echo json_encode("Preencha o campo de Senha!");
    } else {

        $user = mysqli_real_escape_string($link, $user);
        $senha = mysqli_real_escape_string($link, $pwd);

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

            echo json_encode("Sucesso");
        } else {
            echo json_encode("Falha ao logar! Email ou senha incorretos");
        }
    }
}
