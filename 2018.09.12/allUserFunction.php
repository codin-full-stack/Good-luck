<?php

function scanFiles($dir){
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir;
    $files = scandir($path);

    return $files;
}

function jsonToArray($dir, $file){
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR; 
    $file = file_get_contents($path . $file , FILE_USE_INCLUDE_PATH); 
    $allInfo = json_decode($file, true);
    return $allInfo;
}


function allRegisteredUsers($dir, $files){
    foreach ($files as $key => $value) { 
        $pos = strpos($value, '.json'); 
        if ($pos != false) {
            $allInfo = jsonToArray($dir, $value); 
            foreach ($allInfo as $key => $item) { 
                if (!is_array($item)) { 
                    echo $key . ' - ' . $item . '<br>';
                } 
            }        
        } 
    }
     
}


?>