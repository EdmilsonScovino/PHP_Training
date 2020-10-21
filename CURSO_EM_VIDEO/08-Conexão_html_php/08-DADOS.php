<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
</head>
<body>
    <div>
        <?php

            $valor = $_GET["V"];
            $rq = sqrt($valor);
            echo "A raiz de  $valor e igual a ". number_format($rq,2);




        ?>
    </div>
    
</body>
</html>