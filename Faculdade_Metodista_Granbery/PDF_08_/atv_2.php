

<?php 
    echo " Informe o primeiro número :";
    $number = fgets ( handle: STDIN, length: 1024) ;
    echo $number;

    echo " Informe o segundo número :";
    $number2 = fgets ( handle: STDIN, length: 1024) ;
    echo $number2;

    $numberC = $number + $number2;

    if($numberC > 20){
    $numberC = $numberC + 8;
    echo "$numberC" ;
    }else{
    $numberC = $numberC - 5;
    echo "$numberC";
    }


?> 
