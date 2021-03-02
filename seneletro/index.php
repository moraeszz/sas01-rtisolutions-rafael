<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seneletro</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <form method="GET" action="contaLuz.php">
        <h1>Cálculo Conta de Luz</h1>

        <div class="input-group">
         <label for="nome">Nome Cliente</label>
         <input type="text" name="nome" id="nome" required/>
        </div>    

        <div class="input-group">
        <label for="endereco">Endereço</label>
         <input type="text" name="endereco" id="endereco" required/>
        </div>

        <div class="input-group">  
        <label for="quilowatts">Quilowatts (hora)</label>
        <input type="number" name="quilowatts" id="quilowatts" required/>  
        </div>

        <button>Enviar</button>
    </form>
</body>
</html>