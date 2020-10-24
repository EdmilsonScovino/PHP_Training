<?php
    /*
    Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
    Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]
    */
    echo "Digite a nota do aluno:<br>";

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $notas = array($n1, $n2, $n3);
    $media = array_sum($notas)/3;

    

    if($media >= 6){
        echo "<b>APROVADO</b><br>";
        echo "A media das notas  são: <b>$media</b><br>";
    }else{
        echo "<b>REPROVADO</b><br>";
        echo "A media das notas  são:<b>$media</b><br>";
    }
    
?>