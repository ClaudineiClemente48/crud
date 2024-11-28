<?php
//requisitar os dados
$id = $_GET['id'];

//montar um sql de delete
$sql = "delete from agenda where id = $id";

//incluir o arquivo de conexão
include "conexao.php";

//executar o sql delete no BD
$resultado = mysqli_query($conexao, $sql);

//fechar a coxeão
mysqli_close($conexao);

//redirecionar para a página listar
header("Location: agenda-listar.php");

?>