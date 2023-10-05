<?php
    function mes($mes){
        switch ($mes){
            case '01' :$mes = 'Janeiro'; 
            break;
            case '02' :$mes = 'Fevereiro'; 
            break;
            case '03' :$mes = 'Marco'; 
            break;
            case '04' :$mes = 'Abril'; 
            break;
            case '05' :$mes = 'Maio'; 
            break;
            case '06' :$mes = 'Junho'; 
            break;
            case '07' :$mes = 'Julho'; 
            break;
            case '08' :$mes = 'Agosto'; 
            break;
            case '09' :$mes = 'Setembro'; 
            break;
            case '10' :$mes = 'Outubro'; 
            break;
            case '11' :$mes = 'Novembro'; 
            break;
            case '12' :$mes = 'Dezembro'; 
            break;
        }
        return $mes;
    }
    $date = new DateTime();
    $data = date('d-m-Y', $date->getTimestamp());
    $arr = array(substr($data, 0, 2), substr($data, 3, 2), substr($data, 6, 4));
    $arr[1] = mes($arr[1]);
    $exp = $arr[0] . ' de ' . $arr[1] . ' de ' . $arr[2];
    echo $exp;
?>