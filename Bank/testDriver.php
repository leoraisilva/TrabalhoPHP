<?php
    $nome = $_POST(['nome']);
    $num = $_POST(['num']);
    $tell = $_POST(['tell']);
    $arq = $_POST(['arq']);
    $text = $_POST(['text']);

    $table = 'dados';
    try{
    $var = new PDO('mysql://host=127.0.0.1;dbname=arq_test;', 'lsilva', 'Skopje11');
    $sql = "insert into ". $table . "(id, nome, numero, tell, arquivo, texto) values (2, '" . $nome . "', " . $num . ", '" . $tell . "', '" . $arq . "', '" . $text ."');";
    $var->exec($sql);
    $var->commit();
    }catch (Exception $e){
        $e->getMessage();
    }
    echo "<p> conseguiu</p>"; 
?>