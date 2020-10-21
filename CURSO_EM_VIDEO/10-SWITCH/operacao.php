<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["Ope"])?$_GET["Ope"]:1;
        
        switch($o){
            case 1:
                $r = $n * 2;
            break;
            case 2:
                $r = $n ^ 3;
            break;
            case 3:
                $r = sqrt($n); // $n ^(1/2);
                        
        }
         echo "O resultado foi $r";

        
    ?>
    <a href="index.html" >Voltar</a>
    
</body>
</html>