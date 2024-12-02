<?php include "header.php";?>
<main>
    <h1>Adicionar nova agenda</h1>
    <form method="post" action="agendas-salvar.php">
    
       <label>Funcionario:<input name="funcionario"></label><br>
       <label>Data:<input name="data"></label><br>
       <label>Horario:<input name="horario"></label><br>
       <label>Servico:<input name="servico"></label><br>
       <button type="submit">Salvar</button>
    </form>
</main>
<?php include "footer.php"?>