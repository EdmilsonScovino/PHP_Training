<?php
        /*Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. 
        Ex: Entrada = 3
        Processamento: (3 * 2) * 1
        Saída: 6
        */
        
    echo " Digite um número para calcular o fatorial<br>";
    $num = $_GET["num"];
      $fatorial = $num;
      for($a = ($fatorial - 1); $a > 0; $a--){
        $fatorial = $fatorial * $a;
        
      }
      echo "Valor de Saída : $fatorial";
      
?>