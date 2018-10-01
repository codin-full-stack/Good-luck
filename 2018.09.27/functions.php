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
/** Nurodomas kelias iki jsons folderio */ /** __DIR__ - atvaizduoja visa kelia iki failo kuriame naudojamas '__DIR__' pvz:C:\wamp\www\Mindaugas\2018.09.12 */
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
            } echo '<br>';       
        } echo '<br>';
    }
     
}

/**_________________________________________________________________________ */





/** Funkcija duomenu paemimui is laukeliu pagal kuriuos ieskomi .json failai */
function createJsonFileName($data){
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'jsons' . DIRECTORY_SEPARATOR . urlencode($data['name'] . "_" . $data['pavarde'] . '.json'); /** nurodomas kelias iki konkretaus .json failo */
    var_dump($data);
    return $filename; /** grazinam gauta info */

}

/**
 * Vartotoju paieskos funkcija
 */
function searchUser($filename){
    var_dump($filename);

    if(file_exists($filename)){
        
        $info = file_get_contents($filename); 
        $json = json_decode($info, true);    
        
        $raktai = [
            'name'=>'Vardas',
            'pavarde'=>'Pavarde',
            'amzius'=>'Metai',
            'lytis'=>'Lytis'  
        ];
        
        foreach ($json as $key => $value) { 
            if(!empty($value)){
                echo '<br>' . $raktai[$key] . ': ' . $value;
            } 
            
        }
        
    } else {
        echo 'Nera tokio vartotojo!!';
    }
    
}

/**__________________________________________ */


/** Funcija userio ieskojimui pagal emaila */
function getFilePath($logindata){
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'registrations' . DIRECTORY_SEPARATOR . urlencode($logindata['email'] . '.json');

    return $filePath;
}

/** Funkcija vartotojo duomenu istraukimui */

function getUserInfo($filePath){
    if(file_exists($filePath)){
        $info2 = file_get_contents($filePath);
        $masyv = json_decode($info2, true);
        return $masyv;
    } else {
        return null;
    }
} 

function logIn($data){

    $filePath = getFilePath($data);
    $userInfo = getUserInfo($filePath);

    if(!empty($userInfo)){

        checkPass($filePath, $data);        
        
    /** jei vartotojas egzistuoja issitraukti jo duomenis, patikrinti issaugota slaptazodi su postinamu passu ir jei jei sutampa uzsetinti sesija */
    } else {
        echo '<br>' . 'Neteisingas slaptazodis';
    }

}

/** funkcija slaptazodzio palyginimui */
function checkPass($filePath, $data){    
   
    $data['loginpass'] = md5($data['loginpass']); 

    $userInfo = getUserInfo($filePath);

    if ($userInfo['pass1'] == $data['loginpass']){

        $_SESSION = [
            'email'   => $userInfo['email']
        ];
        
        header('refresh:1.5; account.php');
    } else {
        echo 'Neteisingas slaptazodis';
    }
}  

function showUserInfo($data){
    $filePath = getFilePath($data);
    
    if(file_exists($filePath)){
        // var_dump($filePath);

        $info2 = file_get_contents($filePath);
        
        $masyv = json_decode($info2, true);
        unset($masyv['pass1']);
        foreach ($masyv as $key => $value) {
            if(!empty($value)){
                echo $key . ': ' . $value . '<br>';
            }
        }
    }
}

?>