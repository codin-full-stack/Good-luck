<?php

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
    'name'=>$_POST,
    'pavarde'=>$_POST,
    'skaicius'=>$_POST
];

foreach ($_POST as $key=>$raides){
    
    echo $raides . '<br>';
}


?>