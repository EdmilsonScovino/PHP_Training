<?php 
    /*Os funcionários de uma empresa receberam um aumento de salario: técnicos (código = 1),
     50%; gerentes (código = 2), 30%; demais funcionários (código = 3), 20%.
      Escrever um algoritmo para ler o código do cargo de um funcionário e o 
      valor do seu salario atual, calcular e imprimir o novo salario após o aumento. */

    echo "Escolha o seu cargo:<br>";
    echo "TECNICO (COD = 1)<br>";
    echo "GERENTE (COD = 2)<br> ";
    echo "FUNCIONARIO (COD = 3)<br>";

    $cargo = $_GET["cargo"];
    echo "Cargo Atual: $cargo<br>";

    echo "Digite o seu salário: ";
    $salario = $_GET["salario"];
    echo "$salario<br>";

    switch($cargo){
        case '1':
            $salario = $salario + ($salario * 0.50);            
            echo "Novo salario: $salario";
        break;
        case '2':
            $salario = $salario + ($salario * 0.30);
            echo "Novo salario: $salario";
        break;
        case '3':
            $salario = $salario + ($salario * 0.20);
            echo "Novo salario: $salario";
        break;
    }




    

    



?>