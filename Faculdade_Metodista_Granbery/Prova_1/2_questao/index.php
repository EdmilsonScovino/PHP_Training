<?php
    /*Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.*/
    
    echo "Digite na URL  e o seu nome, junto com seu sexo(M = Masculino / F = Femenino) e idade:<br><br>";
    $nome = $_GET["nome"];
    $sexo = $_GET["sexo"]; // M e F
    $idade = $_GET["idade"];

    switch ($sexo) {
        case "M":
            echo "Fim";
            break;
        case "F":
            if($idade <= 25){
                echo "ACEITA";
            }else{
                echo " NÃO ACEITA";
            }
            break;
        
    }


?>