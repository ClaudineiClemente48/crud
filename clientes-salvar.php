<?php
//requisitar dados formulario
$nome = $_POST["nome"];

$idade = $_POST["idade"];

$endereco = $_POST["endereco"];

$telefone = $_POST["telefone"];

//montar um sql insert

$sql = "insert into clientes(nome, idade, endereco, telefone)
values ('$nome', '$idade', '$endereco', '$telefone')";

//incluir um arquivo de conexao
include "conexao.php";

//executar o sql insert no BD
$resultado = mysqli_query($conexao, $sql);

//fechar conexao
mysqli_close($conexao);

//redirecionar para a página listar
header("Location: clientes-listar.php");

?>