<?php
    if(isset($_POST["titulo"])){
        $titulo = $_POST["titulo"];
    }
    else{
        $titulo = "";
    }

    if(isset($_POST["genero"])){
        $genero = $_POST["genero"];
    }
    else{
        $genero = "";
    }

    if(isset($_POST["duracao"])){
        $duracao = $_POST["duracao"];
    }
    else{
        $duracao = "";
    }

    if(isset($_POST["ano"])){
        $ano = $_POST["ano"];
    }
    else{
        $ano = "";
    }

    if(isset($_POST["url"])){
        $url = $_POST["url"];
    }
    else{
        $url = "";
    }

    if(isset($_POST["data"])){
        $dataAluguel = $_POST["data"];
    }
    else{
        $dataAluguel = "";
    }

    if(isset($_POST["valor"])){
        $valorAluguel = $_POST["valor"];
    }
    else{
        $valorAluguel = "";
    }

    if(isset($_POST["tipo"])){
        $tipo = $_POST["tipo"];
    }
    else{
        $tipo = "";
    }

    $titulo = trim($titulo);

    $lista_url = "txt/lista.txt";
    if(strcmp($titulo, "")){
        $nomeArquivo = str_replace(" ", "_", $titulo);
        if(!strcmp(trim($tipo), "xml")){
            $nomeArquivo = "txt/Filme/".$nomeArquivo.".txt";
        }
        else {
            $nomeArquivo = "txt/Serie/".$nomeArquivo.".txt";
        }

        $file = fopen($nomeArquivo, "w+");
        $duracao = trim($duracao);
        $ano = trim($ano);
        $url = trim($url);
        $dataAluguel = trim($dataAluguel);
        $valorAluguel = trim($valorAluguel);

       

        fwrite($file, "Titulo: ". $titulo . PHP_EOL);
        fwrite($file, "Genero: ". $genero . PHP_EOL);
        fwrite($file, "Duracao: ". $duracao . PHP_EOL);
        fwrite($file, "Ano de Producao: ". $ano . PHP_EOL);
        fwrite($file, "img: ". $url . PHP_EOL);
        fwrite($file, "Data do Aluguel: ". $dataAluguel . PHP_EOL);
        fwrite($file, "Valor do Aluguel: R$ ". $valorAluguel . PHP_EOL);
        fclose($file);

        $gravar_lista = fopen($lista_url, "a+");
        $titulo = str_replace(" ", "_", $titulo);
        if(!strcmp(trim($tipo), "xml")){
            $titulo = "txt/Filme/" . $titulo . ".txt";
        }
        else {
            $titulo = "txt/Serie/" . $titulo . ".txt";
        }
        
        fwrite($gravar_lista, $titulo . PHP_EOL, strlen($titulo) + 1);
        
        fclose($gravar_lista);
        echo "<form method=post><input type=submit name=limparPost value='Escolha outro filme'></form>";
	    exit;
    }
    if(isset($_POST['limparPost'])){
        header("location:".$_SERVER['PHP_SELF']);
    }


?>