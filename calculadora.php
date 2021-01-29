<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Calculadora Simples em PHP</title>
</head>
<body>
<style>
    #div1 {
        display: flex;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        border: 5px solid grey;
        padding: 4px;
    }

    input {
        background: rgb(255, 255, 153);
            }

 

</style>
<div id = "div1">
<div id = "p.borda1">

 <form method="get" action="calcular.php">
        Valor 1:
            <input type="text" name="valor1" size="5" />
                <select name="tipo">
                    <option selected="selected">Somar</option>
                    <option>Subtrair</option>
                    <option>Multiplicar</option>
                    <option>Dividir</option>
                </select>
        Valor 2:
            <input type="text" name="valor2" size="5" />
            <input type="submit" name="calcularbnt" value="calcular" />
            </form>

 </div>
 </body>
</html>
