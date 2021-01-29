<title>Consultar</title>

<style>
table{
    border: 2px solid rgb(17, 17, 17);
    border-collapse:collapse;
    padding: 4px;
    text-align: center
}
tr {
    border: 2px solid rgb(248, 244, 244);
    border-collapse:collapse;
}
td {
    padding: 4px;
    color: rgb(13, 13, 14);
    text-align: center;
}
caption {
    color: rgb(248, 248, 246);
    font: outline;
    font-size: 15px;
    background: rgb(12, 12, 12);
    border-radius: 8px;
}
#div1 {
    display: flex;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}
</style>

<?php

    require_once 'pdoconfig.php';

    $consulta = $conn->query("SELECT id, valor1, operacao, valor2, resultado FROM calculadora;");

?>


  


<table>
    <?php while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>

    <tr>
        <td><?php echo $linha['id']; ?></td>
        <td><?php echo $linha['valor1']; ?></td>
        <td><?php echo $linha['operacao']; ?></td>
        <td><?php echo $linha['valor2']; ?></td>
        <td><?php echo $linha['resultado']; ?></td>
    </tr>
    <?php } ?>
</table>
