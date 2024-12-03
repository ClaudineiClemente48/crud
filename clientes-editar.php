<?php 
    include "header.php" ;
?>
<?php
    include "conexao.php";
    $id = $_GET["id"];
    $sql = "select * from clientes where id = $id";
    $nome = $telefone = $email = $senha = "";

    $resultado = mysqli_query($conexao, $sql);
    while($linha = mysqli_fetch_assoc($resultado)){
        $nome = $linha['nome'];
        $telefone = $linha['telefone'];
        $email = $linha['email'];
        $senha = $linha['senha'];
    }
    mysqli_close($conexao);
?>
<main>

    <h2>Editar serviço</h2>
    <form method="post" action="nome-atualizar.php?id=<?=$id;?>">
        <label>Nome: <input name="nome" value="<?=$nome;?>"></label> <br>
        <label>Telefone: <input name="telefone"  value="<?=$telefone;?>"></label> <br>
        <label>Email: <input name="email"  value="<?=$email;?>"></label> <br>
        <label>Senha: <input name="senha"  value="<?=$senha;?>"></label> <br>

        <button type="submit">Editar</button>
    </form>


</main>
<?php include "footer.php"?>