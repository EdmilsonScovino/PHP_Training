<?php
    // Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número
    echo "Digite o número correspondente ao mês correto:<br>";

    $num = $_GET["num"];

    if($num <= 12){
        switch ($num) {
            case 1:
              echo "Janeiro";
              break;
            case 2:
                echo "Fevereiro";
              break;
            case 3:
                echo "Março";;
              break;
            case 4:
                echo "Abril";
              break;
            case 5:
                echo "Maio";
              break;
            case 6:
                echo "Junho";
              break;
            case 7:
                echo "Julho";
              break;
            case 8:
                echo "Agosto";
              break;
            case 9:
                echo "Setembro";
              break;
            case 10:
                echo "Outubro";
              break;
            case 11:
                echo "Novembro";
              break;
              case 12:
                echo "Dezembro";
              break;  
        }

    }else{
        echo "Não existe o mês";
    }



?>