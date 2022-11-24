<?php

include_once('./connection.php');

$sql = "INSERT INTO endereco (rua, bairro, cidade, uf, numero, cep)  VALUES(";
$sql .= "'" . $_POST['rua_cadastro'] . "',";
$sql .= "'" . $_POST['bairro_cadastro'] . "',";
$sql .= "'" . $_POST['cidade_cadastro'] . "',";
$sql .= "'" . $_POST['uf_cadastro'] . "',";
$sql .= "'" . $_POST['numero_cadastro'] . "',";
$sql .= "'" . $_POST['cep_cadastro'] . "'";
$sql .= ");";

$query = mysqli_query($link, $sql);

// $consulta = "SELECT id from endereco";  

$id = mysqli_insert_id($link);

$sql2 = "INSERT INTO clientes (nome, telefone, email, id_endereco)  VALUES(";
$sql2 .= "'" . $_POST['nome_cadastro'] . "',";
$sql2 .= "'" . $_POST['telefone_cadastro'] . "',";
$sql2 .= "'" . $_POST['email_cadastro'] . "',";
$sql2 .= "'" . $id . ",'";
$sql2 .= ");";


$query2 = mysqli_query($link, $sql2);

if (!$query2) {
    echo mysqli_error($link);
} else {
    $response = array("Cliente cadastrado com sucesso");
    echo json_encode($response);
}
