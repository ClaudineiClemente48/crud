<?php 
    include "header.php" ;
?>
<main>

    <h2>Adicionar nova Agendas</h2>
    <form method="post" action="agendas-salvar.php">
        <label>FUNCIONARIO: <input name="funcionario"></label> <br>
        <label>Data: <input name="data"></label> <br>
        <label>HORARIO: <input name="horario"></label> <br>
        <label>servico: <input name="servico"></label> <br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"?>