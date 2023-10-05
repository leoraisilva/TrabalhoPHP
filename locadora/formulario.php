<?php include("php/leituraXMLJSON.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Style importado-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/style.css">
    <!--Style importado-->

    <title>Document</title>
</head>
<body>

    <!--Cabeçario-->
    <nav class="navbar-menu">
        <div class="navbar-content">
            <span class="logo material-symbols-outlined">php</span>
            <span class="barra material-symbols-outlined">view_headline</span>
            <div class="menu-nav">
                <a> <?php include("php/data.php"); ?> </a>
                <span class="material-symbols-outlined">flare</span>
            </div>
        </div>
    </nav>      
    <!--Cabeçario-->
    <main>
        <div class="container-form">
            <form action="entrada.php" method="post">
                <div class="layout-form">
                    <h2>Cadastro do Filme</h2>
                    <div class="titulo">
                        <label>Titulo</label>
                        <input type="text" name="titulo" value="<?= $art[0] ?>">
                    </div>
                    <div class="genero">
                        <label>Genero</label>
                        <input type="text" name="genero" value="<?= $art[1] ?>">
                    </div>
                    <div class="duracao">
                        <label>Duracao</label>
                        <input type="text" name="duracao" value="<?= $art[2] ?>">
                    </div>
                    <div class="ano">
                        <label>Data de lançamento</label>
                        <input type="text" name="ano" value="<?= $art[3] ?>">
                    </div>
                    <div class="url">
                        <label>Local da imagem</label>
                        <input type="text" name="url" value="<?= $art[4] ?>">
                    </div>
                    <div class="data">
                        <label>Data do Aluguel</label>
                        <input type="text" name="data" value="<?= 'Jundiai, ' . $exp ?>">
                    </div>
                    <div class="valor">
                        <label>valor do Aluguel</label>
                        <input type="text" name="valor" value="">
                    </div>
                    <div>
                        <input type="hidden" name="tipo" value="<?= $art[5]?>">
                    </div>
                </div>
                <input type="submit" name="gravar" value="Gravar">
            </form>
        </div>
    </main>
</body>
</html>