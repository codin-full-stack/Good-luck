
<a href='index.php'>Back</a>
<br>
<?php

include 'functions.php'; /** Paimam funkcijas is functions.php failo */

$dir = "jsons"; /** Prilyginam $dir kintamaji 'jsons' folderiui */
$files = scanFiles($dir); /** Prilyginam $files(kintamaji) kuris naudoja funkcija 'scanFiles($dir)' */


allRegisteredUsers($dir, $files); /** Iškviečiam funkciją kuri atvaizduos visus registruotus vartotojus paimtus is jsons folderio($dir) naudojant $files*/

/**___________________________________________________ */
/** Atvaizduojami visi vartotojai nenaudojant funcijos */

// foreach ($files as $key => $value) {
//    $pos = strpos($value, '.json');
//    if ($pos === false) {
//        //nothing
//    }
//    else
//    {
//        //echo $value;
//        $ext = pathinfo($value, PATHINFO_EXTENSION);
//        if($ext=='json')
//        {
//            $file = file_get_contents($dir.$value, FILE_USE_INCLUDE_PATH);
//            $allInfo = json_decode($file, true);
//            foreach ($allInfo as $key => $item) {
//                if (!is_array($item)) {
//                    echo $key . ' - ' . $item . '<br>';
//                } else {
//                    foreach ($item as $key => $val) {
//                     //    echo '<br>' . $key . '=>' . $val . '<br>';
//                    }
//                }
//            }

//        }
//    }
//    }
?>