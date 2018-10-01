<?php

$filename = 'jsons' . DIRECTORY_SEPARATOR . urlencode($_POST['name'] . "_" . $_POST['pavarde'] . '.json');

if(file_exists($filename)){
    $info = file_get_contents($filename);
    // var_dump($info);
    $json = json_decode($info, true);
    // var_dump($json);
    
    $opa = [
        'name'=>'Vardas',
        'pavarde'=>'Pavarde',
        'amzius'=>'Metai',
        'lytis'=>'Lytis'  
    ];
    
    foreach ($json as $key => $value) {
        // var_dump($key);
        if(!empty($value)){
            echo '<br>' . $opa[$key] . ': ' . $value;
        } 
        
    }
    
} else {
    echo 'Nera tokio vartotojo!!';
}
?>
<br>
<a href='paieska.php'>Back</a>