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
                echo '<h2>Tabuada</h2>';
                if($_GET['n']){
                    $a =  $_GET['n'];
                }
                else{
                    $a = 0;
                }
                for ($i = 0; $i < 11; $i++) { 
                    echo '<p>' . $i . ' x ' .  $a . ' = <span>' .$a*$i . '</span></p>';
                }
            ?>
        </div>
    </div>
</body>
</html>