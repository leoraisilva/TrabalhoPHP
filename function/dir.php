<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styleFunc.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <navbar class="corpo">
            <div>
                <span class="material-symbols-outlined php">php</span>
                <span class="material-symbols-outlined responsive">more_horiz</span>
            </div>
            <nav class="links">
            <a href="index.html"><span class="material-symbols-outlined"> keyboard_return </span></a>
            </nav>
        </navbar>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="descricao">
                    <h2>Função dir() </h2>
                    <?='<p>A função dir() retorna o a instancia da class Diretório.</p>' ?>
                </div>
                <div class="sintaxe">
                    <h2>Sintaxe</h2>
                    <?='<p class="func">Diretorio::dir(string $directory, resource $context = ?)</p>'?>
                    <?='<p>Diretorio que será aberto e o paramêtro dos dado do Diretório que será aberto</p>'?>
                </div>
                <div class="exemplo">
                    <h2>Exemplo</h2>
                    <?php
                        echo "<p> echo getcwd(); </p>";
                        echo '<h4 class="result14">' . getcwd() . '</h4>';
                             $d = dir(getcwd());
                        echo "<p> variavel = dir(getcwd()); </p>";
                        echo '<h4 class="result1"> Handle: ' . $d->handle . '</h4>';
                        echo '<h4 class="result2"> Path: ' . $d->path . '</h4>';
                        echo "<p>while ((varivel_arquivo = variavel->read()) !== false){</p>";
                            $var = 3;
                        while (($file = $d->read()) !== false){
                        echo '<h4 class="result'. $var++.'"> filename: ' . $file . '</h4>';
                        }
                        echo "<p>variavel->close()</p>";
                        $d->close();
                        ?>
                </div>
            </div>
        </section>
    </main>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>
</html>