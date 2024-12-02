<?php
    //incluir o arquivo de conexão 
    include "conexao.php";

    //requisição de dados do formulário
    $funcionarios = $_POST["funcionario"];
    $data = $_POST["data"];
    $horario = $_POST["horario"];
    $servicos = $_POST["servico"];

    //montar um sql de insert 
    $sql = "insert into agendas(funcionario, data, horario, servico) values('$funcionario', '$data', '$horario', '$servico')";

    //executar o sql insert no BD
    $resultado = mysqli_query($conexao, $sql);

    //fechar a conexão
    mysqli_close($conexao);

    //redirecionar para a página iniciar
    header("location: agendas-listar.php");
?>