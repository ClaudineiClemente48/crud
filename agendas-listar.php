<?php 
include "header.php"; 
include "conexao.php";
?>

<main>
    <h2>Todas as agendas</h2>
    <a href="agendas-cadastrar.php">Adicionar nova agendas</a>
    <table border="2">
        <tr>
            <th>FUNCIONARIO</th>
            <th>DATA</th>
            <th>HORARIO</th>
            <th>SERVICO</th>
            
        </tr>
    <?php
    $sql = "select * from agendas";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br><br>";

    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>"; //começo coluna
        echo "<td> {$linha['funcionario']} </td>"; // {} => interpolação de strings
        echo "<td> {$linha['data']} </td>";
        echo "<td> {$linha['horario']} </td>";
        echo "<td> {$linha['servico']} </td>";

        echo "<td>"; //começo ações
        // excluir linhas de serviços
        echo "<a href='agendas-excluir.php?id={$linha['id']}'>";
        echo "<img src='img/lixeira.svg' alt=''>";
        echo "</a>";
        // fim excluir linhas de serviços
        
        //editar linhas de serviços
        echo "<a href='agendas-editar.php?id={$linha['id']}'>";
        echo "<img src='img/editar.svg' alt=''>";
        echo "</a>";
        //fim //editar linhas de serviços

        echo "</td>"; // fim ações
        echo "</tr>"; // fim coluna
    }

    mysqli_close($conexao);

    //para debugar
    // echo "<pre>";
    // print_r($resultado);
    // echo "</pre>";
    //fim debug
    ?>
    </table>
</main>

<?php include "footer.php"; ?>