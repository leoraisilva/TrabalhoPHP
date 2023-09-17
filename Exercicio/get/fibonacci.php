<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="tabuada">
        <div class="content">
            <?php
                echo '<h2>Fibonacci</h2>';
                if($_GET['n']){
                    $a =  $_GET['n'];
                }
                else{
                    $a = 0;
                }
                $n1 = 1;
                $n2 = 1;
                for ($i=0; $i < $a; $i++) { 
                    if($i == 0){
                        echo '<p>' . $i .' </p>'; 
                    }
                    else if($i % 2 != 0){
                        echo '<p>' . $n1 .' </p>'; 
                        $n1 += $n2;
                    }
                    else{
                        echo '<p>' . $n2 .' </p>'; 
                        $n2 += $n1;
                    }
                }
            ?>        
        </div>
    </div>
</body>
</html>