<?php

    if(isset($_POST['Series'])){
        $valor = $_POST['Series'];
    }

    else if(isset($_POST['Filmes'])){
        $valor = $_POST['Filmes'];
    }
    else {
        $valor = '';
    }

    echo '<select class="selector" name="'. $valor . '">';
    
    if($valor == "Filmes"){
        $dir = getcwd() . "/xml_json/xml";
        $d = dir($dir);
        $lista_filmes = array();
        while(($item = $d->read()) !== false){
            $test = strstr($item, '.');
            $result = substr($item, 0, strlen($item) - 4);
            $result = str_replace("_", " ", $result);
            if(!strcmp($test, '.xml')){                
                echo '<option>' . $result . '</option>';
            }
            
        }
    }

    else if($valor == "Series"){
        $dir = getcwd() . "/xml_json/json";
        $d = dir($dir);
        $lista_filmes = array();
        while(($item = $d->read()) !== false){
            $test = strstr($item, '.');
            $result = substr($item, 0, strlen($item) - 5);
            $result = str_replace("_", " ", $result);
            if(!strcmp($test, '.json')){
                echo '<option>' . $result . '</option>';
            }
        }
    }
    echo '</select>';

    ?>