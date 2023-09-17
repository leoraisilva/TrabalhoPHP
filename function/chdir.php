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
                    <h2>Função chdir() </h2>
                    <?='<p>A função chdir() no PHP usada para mudar o diretório atual do PHP para um novo caminho de diretório.
                     Leva apenas um único argumento como novo caminho de diretório.</p>' ?>
                </div>
                <div class="sintaxe">
                    <h2>Sintaxe</h2>
                    <?='<p class="func">bool chdir(string $new_directory_path)</p>'?>
                    <?='<p>Possui um unico paramêtro, consite receber o novo diretorio adicionado</p>'?>
                </div>
                <div class="exemplo">
                    <h2>Exemplo</h2>
                    <?php
                        echo "<p>// diretório antes de mudar </p>
                            <p> echo getcwd(); </p>";
                        echo '<h4 class="result1">' .getcwd() . '</h4>';
                            chdir('function');
                        echo "<p> chdir('function'); </p>
                            <p> // diretório depois da mudança </p>
                            <p> echo getcwd(); </p>";
                        echo '<h4 class="result2">' . getcwd() . '</h4>';
                        ?>
                </div>
            </div>
        </section>
    </main>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>
</html>