<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

</head>


<body>

    <?php
    $inteiros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    ?>

    <h1><center style="color:red">Tabela  - Teste e treino</center></h1>
    <div id = "div1">
  

    <table style="width:auto" bgcolor=#fcfcfc>
        <caption>Tabuada do 1</caption>
        
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>1</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 1; ?></td>
        </tr>
        <?php } ?>
    </table>
        <table style="width:auto"  bgcolor=#ece4e4>
            <caption>Tabuada do 2</caption>
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>2</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 2; ?></td>
        </tr>
        <?php } ?>
  
    </table>

    <table style="width:auto" bgcolor=#fcfcfc>
        <caption>Tabuada do 3</caption>
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>3</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 3; ?></td>
        </tr>
        <?php } ?>
        
    </table>

    <table style="width:auto" bgcolor=#ece4e4>
        <caption>Tabuada do 4</caption>
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>4</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 4; ?></td>
        </tr>
        <?php } ?>
    </table>

    <table style="width:auto" bgcolor=#fcfcfc>
        <caption>Tabuada do 5</caption>
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>5</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 5; ?></td>
        </tr>
        <?php } ?>
    </table>

    <table style="width:auto" bgcolor=#ece4e4>
        <caption>Tabuada do 6</caption>
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>6</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 6; ?></td>
        </tr>
        <?php } ?>
    </table>

    <table style="width:auto" bgcolor=#fcfcfc>
        <caption>Tabuada do 7</caption>
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>7</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 7; ?></td>
        </tr>
        <?php } ?>
    </table>

    <table style="width:auto" bgcolor=#ece4e4>
        <caption>Tabuada do 8</caption>
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>8</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 8; ?></td>
        </tr>
        <?php } ?>
    </table>

    <table style="width:auto" bgcolor=#fcfcfc>
        <caption>Tabuada do 9</caption>
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>9</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 9; ?></td>
        </tr>
        <?php } ?>
    </table>

    <table style="width:auto" bgcolor=#ece4e4>
        <caption>Tabuada do 10</caption>
        <?php foreach ($inteiros as $i) { ?>
        <tr>
            <td>10</td>
            <td>X</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo $i * 10; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
