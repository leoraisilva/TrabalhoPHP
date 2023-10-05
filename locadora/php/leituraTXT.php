<?php
    $url_lista = "txt/lista.txt";
    $lista_midia = fopen($url_lista, "r");
    $midia = array();
    while(($linha = fgets($lista_midia)) !== false){
        $midia[] = trim($linha); 
    }
    fclose($lista_midia);

    for ($i=0; $i < count($midia); $i++) { 
        $valor_midia = fopen($midia[$i], "r");
        $valor = array();
        while(($texto = fgets($valor_midia)) !== false){
            $valor[] = trim($texto);
        }
        fclose($valor_midia);


        $valor[0] = trim($valor[0]);
        $valor[0] = substr($valor[0], 8, strlen($valor[0]) - 8);
        $valor[1] = trim($valor[1]);
        $valor[2] = trim($valor[2]);
        $valor[3] = trim($valor[3]);
        $valor[4] = trim($valor[4]);
        $valor[4] = substr($valor[4], 5, strlen($valor[4]) - 5);
        $valor[5] = trim($valor[5]);
        $valor[5] = substr($valor[5], 17, strlen($valor[5]) - 17);
        $valor[6] = trim($valor[6]);

        echo '<div class="main-content">';
        echo '<img src="'. $valor[4] .'">';
        echo '<div class="main-layout">';
        echo '<h2>' . $valor[0] . '</h2>';
        echo '<p>' . $valor[1] . '</p>';
        echo '<p>' . $valor[2] . '</p>';
        echo '<p>' . $valor[3] . '</p>';
        echo '<p>' . $valor[5] . '</p>';
        echo '<p>' . $valor[6] . '</p>';
        echo '</div>';
        echo '</div>';
    }

    ?>