<?php
// var_dump($_POST);

$array = [
    'name'=>'Vardas',
    'pavarde'=>'Pavarde',
    'amzius'=>'Amzius',
    'miestai'=>'Miestas',
    'lytis'=>'Lytis'        
];
// $_POST['name']; ims reiksmes pagal rakta ('name') is $_POST masyvo
// $array['name'];

unset ($_POST['miestai']);
// var_dump($_POST);

foreach ($_POST as $key => $value){ 

/* $array[$key] - paims is naujo masyvo $array(virsuje) reiksmes pagal rakta kuris
yra $key(kintamasis)(Vardas/Pavarde/....)
*/

// PIRMAS BUDAS!! rasys visus atsakymus su nauju masyvu ir 'pavadinimais' 
// echo $array[$key] . ': ' . $value . '<br>';

// ___________________________________

//ANTRAS BUDAS!! rasys pagal lyti pasisveikinima

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