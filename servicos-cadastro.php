<?php include "header.php";?>
<main>
    <h1>Adicionar novos serviços</h1>
    <form method="post" action="servicos-salvar.php">
    
       <label>Serviço:<input name="servico"></label><br>
       <label>Descrição:<input name="descricao"></label><br>
       <label>Preço:<input name="preco"></label><br>
       <label>Categoria:<input name="categoria"></label><br>
       <button type="submit">Salvar</button>
    </form>
</main>
<?php include "footer.php"?>