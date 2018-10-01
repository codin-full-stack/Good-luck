<?php


$json = file_get_contents('index.json');
$array = json_decode($json, true);

// ______________________________
// ilgesnis budas
// 
// foreach ($array as $key=>$value){
//     echo $key . '<br>';
//         if(is_array($value)){
//             foreach ($value as $key1=>$value1){
//                 if(is_array($value1)){
//                     foreach ($value1 as $key2 => $value2) {
//                         if(is_array($value2)){
//                             foreach ($value2 as $key3 => $value3) {
//                                 echo '<br>' . $key3 . ': ' . $value3 . '<br>';
//                             }
//                         } else {
//                             echo $value2;
//                         }
//                     }
//                 } else {
//                     echo $value1;
//                 }
//             }
//         }
// }


// ______________________________
// antras (trumpesnis) budas
?>
<a href=" <?php echo $array['menu']['header'];?>"><?php echo $array['menu']['header'];?></a>
<?php
$array = $array['menu']['items'];
// var_dump($array);
foreach ($array as $key => $value) {
    if(!empty($value)){
        ?>
        <a href="<?php echo $value['id'];?>">
            <?php
                if(!empty($value['label'])){
                    echo $value['label'];}
                // } else {
                //     echo 'NO LABEL!' . ' ';
                // }
            ?>
        </a>
        &nbsp;
        <?php
    }
}

// $json = json_encode($array);
// echo $json;
?>