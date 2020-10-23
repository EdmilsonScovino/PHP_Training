<?php 
   /* Desenvolver um algoritmo para ler o valor inteiro da idade de uma pessoa
    e imprimir uma das mensagens: se idade < 13: Criança, se 13 idade < 20: Adolescente,
     se 20 idade < 60: Adulto e se idade 60: Idoso.*/
     
     echo "Digite sua idade";
     $idade = fgets (handle: STDIN, lenght:1024);

     if($idade < 13){
         echo "Criança";
     }elseif($idade = 13 < 20){
         echo "Adolescente";

     }elseif($idade = 20 < 60){
         echo "Adulto";
     }else{
         echo "Idoso";
     }
     







?>