
<?php include "header.php";?>
<main>
    <h1>Adicionar novos clientes</h1>
    <form method="post" action="clientes-salvar.php">
    
       <label>Nome:<input name="nome"></label><br>
       <label>Idade:<input name="idade"></label><br>
       <label>Endereco:<input name="endereco"></label><br>
       <label>Telefone:<input name="telefone"></label><br>
       
       <button type="submit">Salvar</button>
    </form>
</main>
<?php include "footer.php"?>
