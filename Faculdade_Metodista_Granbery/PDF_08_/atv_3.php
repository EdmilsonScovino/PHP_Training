

<?php 
    echo " Para saber o número correspondente do dia da semana, digite de 1 até 7:";
    $number = fgets ( handle: STDIN, length: 1024) ;
    echo $number;

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
    echo " Dia da semana não existe."
    break;
        
    }




?> 