<?php

require_once('./connection.php');

$id = $_POST['id'];

$sql = "DELETE clientes, endereco FROM clientes
INNER JOIN endereco ON clientes.id_endereco = endereco.id
WHERE
clientes.id = $id;";

$query = mysqli_query($link, $sql);

if ($query) {
    echo json_encode("Cliente deletado com sucesso");
} else {
    echo json_encode("ERRO" . mysqli_error($link));
}
