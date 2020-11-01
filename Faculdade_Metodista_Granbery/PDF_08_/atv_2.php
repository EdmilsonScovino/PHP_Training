

<?php 
/*Faça um programa que recebe dois números e efetua a adição. Caso o valor somado seja maior que 20, este deverá ser apresentado somando-se a ele 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5 */
    
    echo " Informe o primeiro número :<br>";
    $number = $_GET["number"];
    echo $number;

    echo "<br> Informe o segundo número :<br>";
    $number2 = $_GET["number2"] ;
    echo $number2;

    $numberC = $number + $number2;

    if($numberC >= 20){
    $numberC = $numberC + 8;
    echo "<br>RESPOSTA: $numberC";
    }else{
    $numberC = $numberC - 5;
    echo "<br>RESPOSTA: $numberC";
    }


?> 
