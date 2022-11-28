<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("Você não pode acessar essa pagina pois não está logado. <a href=\"./login.html\">Logar</a>");
}

?>