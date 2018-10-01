<?php
var_dump($_POST);
// $x = 1; 

// while($x <= 10) {
//     echo "$x. <br>";
//     $x++;
// }

// ___________________________________________

// for ($x=$_POST['name']; $x<=100; $x=($x+3)){
//     echo "$x <br>";
// }

// ___________________________________________


$array = [
    'name'=>'Vardas',
    'pavarde'=>'Pavarde',
    'amzius'=>'Amzius',
    'miestai'=>'Miestas',
    'psw'=>'Slaptazodis',
    'lytis'=>'Lytis',
    'gimtadienis'=>'Gimtadienis',
    'sutikimas'=>"Sutikimas"
];
// $_POST['name']; ims reiksmes pagal rakta ('name') is $_POST masyvo
// $array['name'];

foreach ($_POST as $key => $value){ 

/* $array[$key] - paims is naujo masyvo $array(virsuje) reiksmes pagal rakta kuris
yra $key(kintamasis)(Vardas/Pavarde/....)
*/

// PIRMAS BUDAS!! rasys visus atsakymus su nauju masyvu ir 'pavadinimais' 
// echo $array[$key] . ': ' . $value . '<br>';

// ___________________________________

//ANTRAS BUDAS!! rasys pagal lyti pasisveikinima

    echo $array[$key] . ': ';
    if ($key == 'name' && $_POST['lytis'] == 'vyras'){
        echo 'sveikas ';
    } elseif ($key == 'name' && $_POST['lytis'] == 'moteris') {
        echo 'sveika ';
    } elseif ($key == 'name'){
        echo "sekmes ";
    }
    echo $value . '<br>';

    
}

?>