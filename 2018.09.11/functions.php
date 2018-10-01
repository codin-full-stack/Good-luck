<?php

/**
 * VISU vartotoju atvaizdavimo funkcija
 */


/**Nuskanuos jsons folderi */
function scanFiles($dir){
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir; /** Nurodomas kelias iki jsons folderio */
    $files = scandir($path); /** Nuskenuoja folderi pagal kelia($path) ir grazina esanciu failu masyva */

    return $files;
}

/** Funkcija pavers visus .json failus i php masyva(array) */
function jsonToArray($dir, $file){
/** Nurodomas kelias iki jsons folderio */ /** __DIR__ - atvaizduoja visa kelia iki failo kuriame naudojamas '__DIR__' pvz:C:\wamp\www\Mindaugas\2018.09.11 */
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR; 
    $file = file_get_contents($path . $file , FILE_USE_INCLUDE_PATH); /** $file(kintamasis) Paims info(pagal nurodyta kelia su $path) is jsons folderio   */
    $allInfo = json_decode($file, true); /** $allInfo(kintamasis) decodins .json failus i php masyvus*/

    return $allInfo; /** Grazinam visa info is .json failu kaip masyvą */
}


/**
 * Atvaizduos visus registruotus vartotojus (.json failai pagal varda_pavarde) kuriuos paims iš jsons folderio naudojant ($dir)
 */
function allRegisteredUsers($dir, $files){
    foreach ($files as $key => $value) { /** Prasukam masyva  gaunama is ($value - failo pavadinimas*/
        $pos = strpos($value, '.json'); /** strpos- tikrinam ar reiksmes stringas atitinka .json (patinkrinam ar tai .json failas)  */
        if ($pos != false) {
            $allInfo = jsonToArray($dir, $value); /** Paverciam failo .json turini i msayva */
            foreach ($allInfo as $key => $item) { /** prasukam konkretaus failo (gauto is pirmo foreeach) informacija */
                if (!is_array($item)) { /** patikrins ar tai nera gautas masyvas */
                    echo $key . ' - ' . $item . '<br>';
                } 
            }        
        }
    }
     
}

/**_________________________________________________________________________ */


/**
 * Paieskos funkcija
 */

?>