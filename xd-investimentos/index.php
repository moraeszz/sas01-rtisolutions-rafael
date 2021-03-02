<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xd</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <form method="GET" action="conversao.php">
        <h1>Cálculo Conversão</h1>

        <div class="input-group">
         <label for="valorReal">Valor em Real</label>
         <input type="number" name="valorReal" id="valorReal" required/>
        </div>    

        <div class="euro">  
        <label for="euro">Euro</label>
        <input type="radio" name="moeda" id="euro" required/>  
        </div>

        
        <div class="dolar">
        <label for="dolar">Dólar</label>
         <input type="radio" name="moeda" id="dolar" required/>
        </div>

        <button>Calcular</button>
    </form>
</body>
</html>