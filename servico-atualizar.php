<?php
//requisitar os dados do formulário
$id = $_GET['id'];
$servico = $_POST['servico'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

//montar um sql de update
$sql = "update servicos set servico = '$servico', descricao = '$descricao', preco = '$preco'"
?>