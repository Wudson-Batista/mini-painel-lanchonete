<?php

$hostname = "localhost";
$bd = "lanchonete";
$user = "root";
$psw = "";

$link = mysqli_connect($hostname, $user, $psw, $bd) or die ('Não foi possivel conectar' + mysqli_error($link));

