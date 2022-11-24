<?php
require_once('./connection.php');

$nome_select = json_encode($_POST['dados']);

$pattern = '/"/';
$replace = '';

$new_nome = preg_replace($pattern, $replace, $nome_select);



// echo json_decode($json);
$sql = "SELECT
clientes.id,
clientes.nome,
clientes.telefone,
clientes.email,
endereco.rua,
endereco.bairro, 
endereco.cidade,
endereco.uf,
endereco.numero, 
endereco.cep

FROM
clientes INNER JOIN endereco ON clientes.id_endereco = endereco.id
WHERE
clientes.nome like '%$new_nome%';";

$resultado = mysqli_query($link, $sql) or die('erro na query');

$rows = mysqli_num_rows($resultado);

if ($rows > 0) {
    $row = mysqli_fetch_assoc($resultado);
    // echo $row; 
    echo json_encode($row);
} else {
    $erro = array('erro' => 'N achou');
    echo json_encode($erro);
}
