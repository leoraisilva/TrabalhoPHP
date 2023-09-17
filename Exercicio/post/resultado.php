<?php

    $value = 0;
    if(isset($_POST["valA"])){
        $a = $_POST["valA"];
        if(!is_numeric($a)){
            $a = 0.0;
        }
    }
    else{
        $a = 0.0;
    }
    
    if(isset($_POST["valB"])){
        $b = $_POST["valB"];
        if(!is_numeric($b)){
            $b = 0.0;
        }
    }
    else{
        $b = 0.0;
    }

    if(isset($_POST["operador"])){
        $op = $_POST["operador"];
        if($op =='multiplica'){
            $value = $a * $b;
        }
        elseif ('soma' == $op){
            $value = $a + $b;
        }
        elseif ('subtrai' == $op) {
            $value = $a - $b;
        }
        elseif($op =='divide') {
            if($b == 0){
                $value = 'null';
            }
            else {
                $value = $a / $b;
            }
        }
        else {
            if($b == 0){
                $value = 1;
            }
            else {
                $value = $a ** $b;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="arquivo">
            <div class="result">
                <div class="dados">
                    <h1><?php echo "Resultado de " . $a . " " . $op . " " . $b . " é " . $value ?>  </h1>
                </div>
            </div>
        </div>
    </body>
</html>