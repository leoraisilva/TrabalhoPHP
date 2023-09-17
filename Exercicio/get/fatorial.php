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
                echo '<h2>Fatorial</h2>';
                if($_GET['n']){
                    $a =  $_GET['n'];
                }
                else{
                    $a = 0;
                }
                $n = 1;
                for ($i=$a; $i > 0; $i--) { 
                    $n*=$i;
                }
                echo '<p> Fatorial é <span>'. $n. '</span></p>';
            ?>
        </div>
    </div>
</body>
</html>