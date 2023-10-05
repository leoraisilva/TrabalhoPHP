<?php include("php/criar_txt.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container-entrada">
            <h2>Seleciona a Escolha</h2>
            <form action="index.php" method="post">
                <div class="filmes">
                    <img src="img/entrada/filmes.jpg" alt="">
                    <div class="layout-entrada">
                        <input type="submit" name="Filmes" value="Filmes">
                    </div>
                </div>
                <div class="series">
                    <img src="img/entrada/series.png" alt="">
                    <div class="layout-entrada">
                        <input type="submit" name="Series" value="Series">
                    </div>
                </div>
            </form>
        </div>
    </section>
    
</body>
</html>
    
    