<?php 
    $nome = $_GET["nome"];
    $ano = $_GET["ano"];
    $sexo = $_GET["sexo"];
    $idade = date("Y") - $ano;
    echo "$nome e  $sexo e tem $idade anos";




?>