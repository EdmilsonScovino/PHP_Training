<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e tera $i anos"
        if($i >=16){
            $tipoVoto = "nao vota";
        }else{
            if($i >= 16 && $i <8){
                $tipoVoto = "voto opcional";

            }
            else{
                $tipoVoto = "voto obrigatorio";
            }
        } 
        echo "Para essa idade, $tipoVoto";
    
    ?>
    
</body>
</html>