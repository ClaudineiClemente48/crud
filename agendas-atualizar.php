<?php
    $id = $_GET['id'];
    $funcionario = $_POST['funcionario'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $servico = $_POST['servico'];

    // montar um sql de update
    $sql = "update agendas set funcionario = '$funcionario', data = '$data', horario = '$horario', servico = '$servico' where id = $id";
    // incluir o arquivo de conexão
    include "conexao.php";

    // executar o sql update 
    $resultado = mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    header("Location: agendas-listar.php");
?>