<?php

$v = $_POST['vardas'];
$p = $_POST['pavarde'];

// function checkMyField($v) {

// if (!empty($v)){
//     echo 'Vardas:' . ' ' . $v . '<br>';
// } else {
//     echo 'ner vardo' . '<br>';
// }
// }

// checkMyField($v);

// if(!empty($p)){
//     echo 'Pavarde:' . ' ' . $p;
// } else {
//     echo 'ner pavardes';
// }
// ?>

<?php
function checkFields($field){
   if (empty($field)){
       echo "Klaida! Užpildyti ne visi laukeliai.";
   } else {
       echo " $field ";
   }
}

checkFields($v);
checkFields($p);
?>



<!-- tikrins kartu abu laukus -->
if (empty($_POST['vardas']) && empty($_POST['pavarde']))){
    echo ' Error';
} -->
