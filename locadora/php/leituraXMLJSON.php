<?php
    function arrayXML($url){
        $xml = simplexml_load_file($url)->arquivo;
        foreach($xml -> filme as $filme){
            $titulo = utf8_decode($filme -> titulo);
            $genero = utf8_decode($filme -> genero);
            $duracao = utf8_decode($filme -> duracao);
            $ano = utf8_decode($filme -> ano);
            $url = utf8_decode($filme -> url);
        }
        $tipo = 'xml';
        
        $arr = array($titulo, $genero, $duracao, $ano, $url, $tipo);
        return $arr;
    }

    function arrayJSON($url){
        $file = file_get_contents($url);
        $json = json_decode($file);

        $titulo = $json->filme->titulo;
        $genero = $json->filme->genero;
        $duracao = $json->filme->duracao;
        $ano = $json->filme->ano;
        $url = $json->filme->url;
        $tipo = 'json';

        $arr = array($titulo, $genero, $duracao, $ano, $url, $tipo);
        return $arr;
    }

    if(isset($_POST["Filmes"])){
        $Filmes = $_POST["Filmes"];
        $Filmes = "xml_json/xml/" . str_replace(" ", "_", $Filmes) . ".xml";
        $art = arrayXML($Filmes);
    }
    else if(isset($_POST["Series"])){
        $Series = $_POST["Series"];
        $Series = "xml_json/json/" . str_replace(" ", "_", $Series) . ".json";
        $art = arrayJSON($Series);
    }
    else{
        $arquivo = "";
    }

    
?>