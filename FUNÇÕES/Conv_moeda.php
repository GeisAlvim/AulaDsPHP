<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Moedas</title>
</head>
<body>
<form action=" " method="post">
        <label for="Conversao Moedas">Conversão de Moedas: </label>
        <input type="number" id="Moeda" name="Moeda"> <br><br>
        <button type="submit">Converter</button>
        <button type="reset">Limpar</button>
    </form>

    <?php 
    $Moeda=$_POST["Moeda"] ?? 0; 
   
        function Dolar ($Moeda){
                        
           1/1.81;

           return ;
        } 

       $Temp= Conversao($F); 
        echo "<br>A temperatura $F °F vale em Celsius: $Temp °C ";
    ?>

</body>
</html>