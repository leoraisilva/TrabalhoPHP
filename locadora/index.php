
<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Style importado-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/style.css">
    <!--Style importado-->

    <title>Filmes</title>
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
        <div class="container">
            <div class="main-intro">
                <div class="layout-TextField">
                    <h2>Importa o valor do  .<scan> Filmes</scan></h2>
                    <form action="formulario.php" method="post">
                        <div class="search" >
                                <?php include("php/selector.php") ?>
                            <button type="submit" class="bnt">Importar</button>
                        </div> 
                    </form>
                </div>
            </div>
            <div class="main-abstract">
                <?php include("php/leituraTXT.php") ?>
            </div>
        </div>    
    </main>
</body>
</html>