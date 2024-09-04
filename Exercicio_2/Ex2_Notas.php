<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2_Notas</title>
</head>
<body>
<?php 
    $nome = $_POST["Nome"];
    $nota = $_POST["Nota"];

    switch($nota){
        case 10:
            echo "Nota A";
            break;
        
        case 9:
            echo "Nota B";
            break;

        case 8:
            echo "Nota C";
            break;

        case 7:
            echo "Nota C";
            break;
        
        case 6:
            echo "Nota D";
            break;

        case 5:
            echo "Nota D";
            break;

        case ($nota>0 && $nota<=4);
            echo "Nota E";
            break;


    }
    ?>
</body>
</html>