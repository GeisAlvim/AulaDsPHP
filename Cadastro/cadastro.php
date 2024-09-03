<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo CadastroPHP</title>
</head>
<body>
    <main>
        <?php
           $nome = $_GET["Nome"];
           $email = $_GET["Email"];
           $senha = $_GET["Senha"];
           
           echo "É um prazer ter você aqui $nome!";
        ?>
        <p><a href="javascript:history.go(-1)">
            Voltar para a página anterior
        </a></p>
    </main>
</body>
</html>