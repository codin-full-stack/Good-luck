<?php

function createJson($data){
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'jsons' . DIRECTORY_SEPARATOR . urlencode($data['name'] . '_' . $data['pavarde'] . 'json');

    return $filename;
}

function searchUser($filename){
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
                echo '<br>' . $raktai[$key] . ": " . $value;
            }
        }
    } else {
        echo 'Tokio vartotojo nera!!';
    }
}

?>