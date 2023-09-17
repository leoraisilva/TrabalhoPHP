<?php
    $arquivo = "arquivo.txt";
    $FILES = fopen($file, 'a');
    $conteudo = "Construindo um arquivo text";
    fwrite($FILES, $conteudo);
    fclose($FILES);
    echo "arquivo criado com sucesso";
