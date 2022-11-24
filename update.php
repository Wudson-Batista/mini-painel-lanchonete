<?php

require_once('./connection.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];


$sql = "UPDATE clientes AS c
INNER JOIN endereco as e ON (c.id_endereco = e.id)";

$sql .= "SET c.nome = '$nome', c.telefone = '$telefone', c.email = '$email',";

$sql .= "e.rua = '$rua', e.bairro = '$bairro', e.cidade = '$cidade', e.uf = '$uf', e.numero = '$numero', e.cep = '$cep'";


$sql .= "WHERE
c.id = $id;";

// echo json_encode($sql);

$query = mysqli_query($link, $sql);

if ($query) {
    echo json_encode("Cliente editado com sucesso");
} else {
    echo json_encode("ERRO" . mysqli_error($link));
}


// WHERE
// clientes.id = $id;";
// UPDATE     tabela1
// INNER JOIN tabela2 ON tabela1.id = tabela2.id
// SET        tabela1.dado1 = tabela1.dado1 + tabela2.dado2;
