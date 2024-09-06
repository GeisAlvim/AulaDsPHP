<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida Login</title>
</head>
<body>
<?php
 
$nome = $_POST["nome"];
$senha = $_POST["senha"];



if ($nome == "admin" && $senha == 1234 ) {
    
    echo "Login bem-sucedido!, Seja Bem Vindo";
   
} else{
    echo "Login ou Senha Incorretos";
}

?>
</body>
</html>