<?php
//requisitar dados formulario
$funcionario = $_POST["funcionario"];

$data = $_POST["data"];

$hora = $_POST["hora"];

$servico = $_POST["servico"];

//montar um sql insert
$sql = "insert into agenda(funcionario, data, hora, servico)
values ('$funcionario', '$data', '$hora', '$servico')";

//incluir um arquivo de conexao
include "conexao.php";

//executar o sql insert no BD
$resultado = mysqli_query($conexao, $sql);

//fechar conexao
mysqli_close($conexao);

//redirecionar para a página listar
header("Location: agenda-listar.php");

?>