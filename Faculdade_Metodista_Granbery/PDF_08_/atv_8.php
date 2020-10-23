<?php 
/*
    Elabore um programa que, dada a idade de um nadador, classifique-o em uma das seguintes categorias: 
    infantil A = 5
    infantil B = 8
    juvenil A = 11
    juvenil B = 14
    adulto = 18
    sênior = maiores de 18 anos
    */

    echo "Digite sua idade:";
    $idade = fgets ( handle: STDIN, length: 1024);
    
    switch ($idade){
        case '$idade < 5':
        
            echo '$infantil A'; 
    
        case '$idade = 5 < 8':
        
            echo '$Infantil B'; 
    
        case '$idade = 8 < 11':
        
            echo '$juvenil '; 
    
        case '$idade = 11 < 14':
        
            echo '$Juvenil B';
        
        case '$idade = 14 < 18':
        
            echo '$Adulto';

        case '$idade > 18':
        
            echo '$Senior';
    
        default:
            echo "Operação incorreta";
        break;
        }

?>