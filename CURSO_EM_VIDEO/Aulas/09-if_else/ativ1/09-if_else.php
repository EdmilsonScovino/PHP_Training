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
        echo "Voce nasceu em $a e tera $i anos";
        if($i >= 18){
            $v = "Já pode Votar";
            $d = "Já pode Dirigir";
        }else{
            $v = "N pode Votar";
            $d = "N pode Dirigir";
        } 
        echo "Com essa idade você $v e tambem $d";
    
    ?>
    
</body>
</html>