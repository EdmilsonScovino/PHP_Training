<?php
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