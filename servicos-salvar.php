<?php
//requisitar dados formulario
$servico = $_POST["servico"];

$descricao = $_POST["descricao"];

$preco = $_POST["preco"];

$categoria = $_POST["categoria"];

//montar um sql insert
$sql = "insert into servicos(servico, descricao, preco, categoria)
values ('$servico', '$descricao', '$preco', '$categoria')";

//incluir um arquivo de conexao
include "conexao.php";

//executar o sql insert no BD
$resultado = mysqli_query($conexao, $sql);

//fechar conexao
mysqli_close($conexao);

//redirecionar para a página listar
header("Location: servicos-listar.php");

?>