

<?php 
    /*Desenvolver um algoritmo para ler o número do dia da semana e imprimir o seu respectivo nome por extenso. Considerar o número 1 como domingo, 2 para segunda etc. Caso o dia da semana não exista (menor do que 1 ou maior do que 7), exibir a mensagem Dia da semana invalido”.*/
    echo " Para saber o número correspondente do dia da semana, digite de 1 até 7:<br>";
    $number = $_GET["number"];
    echo "$number <br>";

    switch($number){
        case '1':
            echo "Domingo";
        break;

        case '2':
            echo "Segunda";
        break;

        case '3':
            echo "Terca";
        break;

        case '4':
            echo "Quarta";
        break;

        case '5':
            echo "Quinta";
        break;

        case '6':
            echo "Sexta";
        break;

        case '7':
            echo "Sabado";
        break;  

        default:
            echo " Dia da semana não existe.";
        break;
            
    }




?> 