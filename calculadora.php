<?php
    if (isset($_POST["num1"])) {
        $num1 = $_POST["num1"];          
    } else {
        $num1 = 0;
    }
 
    if (isset($_POST["num2"])) {
        $num2 = $_POST["num2"];
    } else {
        $num2 = 0;
    }
    if (isset($_POST["operacao"])) {
        $operacao = $_POST["operacao"];
    } else {
        $operacao = "";
    }
    $resul = 0;
 
    if ($operacao == "soma"){
        $resul = $num1 + $num2;
    }else if($operacao == "subtrai"){
        $resul =  $num1 - $num2;
    }else if($operacao == "multiplica"){
        $resul = $num1 * $num2;
    }else if($operacao == "divide"){
        $resul = $num1 / $num2;
    }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados</h1>
    <p>Resultado: <?php echo $resul; ?></p>
 
   
</html>