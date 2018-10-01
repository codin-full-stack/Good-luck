<?php

$data = [
    1 =>[     
        'name'=>'Mindaugas',
        'pavarde'=>'Mažeikis',
        'amzius'=>'11',
        'miestai'=> [
            'name' => 'Vilnius',
            'code' => 'vln'
        ],
        'lytis'=>'Vyras'
    ],

    2 =>[
        'name'=>'Kestas',
        'pavarde'=>'Kestonis',
        'amzius'=>'12',
        'miestai'=>'Kaunas',
        'lytis'=>'Moteris'   
    ],

    3 =>[
        'name'=>'Kristina',
        'pavarde'=>'Kika',
        'amzius'=>'10',
        'miestai'=>'Klaipeda',
        'lytis'=>'Moteris'
    ]

];
// var_dump($data);
// echo $data[2]['amzius'];

?>

<?php



foreach ($data as $key=>$value){
    // var_dump($value);
    foreach ($value as $key2=>$value2){    
        if (is_array($value2)){
            foreach($value2 as $key3=>$value3){
                echo $value3;
            }    
        } else {
            echo $value2 . '<br>';
        }
    }
}



    
?>