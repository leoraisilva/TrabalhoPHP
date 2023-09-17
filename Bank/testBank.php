<?php
        $var= new PDO('mysql://host=127.0.0.1;dbname=arq_test','lsilva','Skopje11');
        $result = $var->query('select * from dados;');
        $arquivos = array('nome', 'numero', 'tell', 'arquivo', 'texto');
                foreach ($result as $key) {
                    for ($i=0; $i < sizeof($arquivos); $i++) { 
                        echo $key[$arquivos[$i]] . PHP_EOL;
                        echo '<br>';
                    }
                }
    ?>