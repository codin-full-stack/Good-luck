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


foreach ($data as $key=>$value){
    echo '<br>';
    foreach ($value as $key2=>$value2){
        echo '<br>' . $key2 . ': '; 
        if (is_array($value2)){
            foreach($value2 as $key3=>$value3){
                echo $key3 . ': ' . $value3;
            }    
        } else {
            echo $value2;
        }
    }
}
    
?>