<?php

if(!isset($_GET["nome"]) 
|| !isset($_GET["endereco"])
|| !isset($_GET["quilowatts"])){

  header("location: index.php");
}

$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$consumo = $_GET["quilowatts"];

$consumoAcima = ($consumo * 0.42);
$consumoAte = ($consumo * 0.32);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calculo Salário</title>
</head>
<body>

  <!-- Se o valor do salário for maior que 5000 -->
  <?php
    if($consumo > 120){
      echo "<h1> Conta de Luz de $nome</h1>";
      echo "<h1> Endereço: $endereco </h1>";
        echo "<h1  style='color: red'> Consumo: $consumo kWh</h1>";
      echo "<h1> Valor a pagar: $consumoAcima reais</h1>";
    }else {
        echo "<h1> Conta de Luz de $nome</h1>";
        echo "<h1> Endereço: $endereco </h1>";
        echo "<h1 style='color: red'> Consumo: $consumo kWh</h1>";
        echo "<h1> Valor a pagar: $consumoAte reais</h1>";
    }
  ?>
</body>
</html>