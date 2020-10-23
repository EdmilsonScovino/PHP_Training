<?php 
    /*Os funcionários de uma empresa receberam um aumento de salario: técnicos (código = 1),
     50%; gerentes (código = 2), 30%; demais funcionários (código = 3), 20%.
      Escrever um algoritmo para ler o código do cargo de um funcionário e o 
      valor do seu salario atual, calcular e imprimir o novo salario após o aumento. */

    echo "Escolha o seu cargo:<br>";
    echo "TECNICO (COD = 1)<br>";
    echo "GERENTE (COD = 2)<br> ";
    echo "FUNCIONARIO (COD = 3)<br>";
    $cargo = fgets (handle: STDIN length: 1024);
    echo "$cargo";

    echo "Digite o seu salário:<br>";
    $salario = fgets ( handle: STDIN length:1024);
    echo "$salario";

    switch($cargo){
        case '1':
            $aumento = $salario * 0.50;
            echo "Novo salario $aumento";
        
        case '2':
            $aumento = $salario * 0.30;
            echo "Novo salario $aumento";
        
        case '3':
            $aumento = $salario * 0.20;
            echo "Novo salario $aumento";
    }




    

    



?>