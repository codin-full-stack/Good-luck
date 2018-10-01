<?php

$array = [
    'name'=>'Vardas',
    'pavarde'=>'Pavarde',
    'amzius'=>'Amzius',
    'miestai'=>'Miestas',
    'lytis'=>'Lytis'        
];

unset ($_POST['miestai']);
// var_dump($_POST);

foreach ($_POST as $key => $value){ 

    echo $array[$key] . ': ';
    if (isset($_POST['lytis'])){
        if ($key == 'name' && $_POST['lytis'] == 'vyras'){
            echo 'sveikas ';
        } elseif ($key == 'name' && $_POST['lytis'] == 'moteris') {
            echo 'sveika ';
        } elseif ($key == 'name'){
            echo "sekmes ";
        }
    }
    echo $value . '<br>';    
}

if (!isset($_POST['lytis'])){
    echo 'Pasirinkite lyti!!';
}

?>