
<?php 
    /*Fazer um algoritmo para ler dois números e um número para indicar o tipo de operação: 1 para soma, 2 para subtração, 3 para multiplicação e 4 para divisão. Imprimir o resultado da operação efetuada sobre os números lidos.*/
    echo "Digite o primeiro número :<br>";
    $number = $_GET["number"];
    echo "$number";

    echo "<br> Digite o segundo número :<br>";
    $number2 = $_GET["number2"];
    echo "$number2";

    echo "<br>Escolha o tipo de operação: (1 = +), (2 = - ), (3 = Multi), (4 = /):<br>";
    $ope = $_GET["ope"];   

    switch ($ope){
        case '1':
            $resultado = $number + $number2;
            echo "<br>$resultado"; 
        break;
        case '2':
            $resultado = $number - $number2;
            echo "<br>$resultado"; 
        break;
        case '3':
            $resultado = $number *  $number2;
            echo "<br>$resultado"; 
        break;
        case '4':
            $resultado = $number / $number2;
            echo "<br>$resultado"; 
        break;
        default:
            echo "<br>Operação incorreta";
        break;
    }





?> 
