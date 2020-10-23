
<?php 
    echo "Digite o primeiro número :";
    $number = fgets ( handle: STDIN, length: 1024) ;
    echo $number;

    echo " Digite o segundo número :";
    $number2 = fgets ( handle: STDIN, length: 1024) ;
    echo $number2;

    echo "Escolha o tipo de operação: (1 = +), (2 = - ), (3 = Multi), (4 = /)";
    $ope = fgets ( handle : STDIN, length: 1024);

    switch ($ope){
    case '1':
    $resultado = $number + $number2;
    echo '$resultado'; 

    case '2':
    $resultado = $number - $number2;
    echo '$resultado'; 

    case '3':
    $resultado = $number  $number2;
    echo '$resultado'; 

    case '4':
    $resultado = $number / $number2;
    echo '$resultado'; 

    default:
    echo "Operação incorreta";
    break;
    }





?> 
