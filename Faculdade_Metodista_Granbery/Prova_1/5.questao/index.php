<?php
    echo " Digite um número para calcular o fatorial<br>";
    $num = $_GET["num"];
      $fatorial = $num;
      for($i = ($fatorial - 1); $i > 0; $i--){
        $fatorial = $fatorial * $i;
        
      }
      echo "Valor de Saída : $fatorial";
      
?>