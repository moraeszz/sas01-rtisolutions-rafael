<?php

if(!isset($_GET["valorReal"])){

  header("location: index.php");
}

$valorReal = $_GET["valorReal"];
$dolar = 5.41;
$euro =  6.57;


$ConversaoParaEuro = ($valorReal * $euro);
$ConversaoParaDolar = ($valorReal * $dolar);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calculo Conversão</title>
</head>
<body>

  <!-- Se a conversão for pra dólar -->
  <?php
    if($valorReal = $ConversaoParaDolar){
      echo "<h1> Valor total em dólar: R$ <em> $ConversaoParaDolar </em></h1>";
    }if ($valorReal = $ConversaoParaEuro){
      echo "<h1> Valor total em euro: R$ <em> $ConversaoParaEuro </em></h1>";
    }
  ?>

</body>
</html>