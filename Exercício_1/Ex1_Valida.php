<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacao</title>
</head>
<body>
    <?php 
        $nome = $_GET["Nome"];
        $idade = $_GET["Idade"];

        if($idade<18){
            echo"ATENÇÃO!!!
            Cadastro Não Autorizado!
            Acesso Permitido somente para maiores de 18 anos.";
        } else {
            echo "Cadastro Realizado com Sucesso!";
        }
    ?>
</body>
</html>