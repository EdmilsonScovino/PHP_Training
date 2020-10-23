<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["Nome"] ;
        $sobrenome = $_GET["Sobrenome"];
        $idade = $_GET["Idade"];
        $telefone = $_GET["Telefone"];
        $endereco = $_GET["Endereco"]; 

        echo " O $nome $sobrenome, tem a idade de $idade, o seu telefone para contato <br> (32)$telefone e mora no endereço $endereco ";
    
    
    
    
    ?>
    
</body>
</html>