<?php

$json = '{
    "menu":{
        "header":"SVG Viewer",
        "items":[
            {
                "id":"Open"
            },
            {
                "id":"OpenNew",
                "label":"Open New"
            },
            null,
            {
                "id":"ZoomIn",
                "label":"Zoom In"
            },
            {
                "id":"ZoomOut",
                "label":"Zoom Out"
            },
            {
                "id":"OriginalView",
                "label":"Original View"
            },
            null,
            {
                "id":"Quality"
            },
            {
                "id":"Pause"
            },
            {
                "id":"Mute"
            },
            null,
            {
                "id":"Find",
                "label":"Find..."
            },
            {
                "id":"FindAgain",
                "label":"Find Again"
            },
            {
                "id":"Copy"
            },
            {
                "id":"CopyAgain",
                "label":"Copy Again"
            },
            {
                "id":"CopySVG",
                "label":"Copy SVG"
            },
            {
                "id":"ViewSVG",
                "label":"View SVG"
            },
            {
                "id":"ViewSource",
                "label":"View Source"
            },
            {
                "id":"SaveAs",
                "label":"Save As"
            },
            null,
            {
                "id":"Help"
            },
            {
                "id":"About",
                "label":"About Adobe CVG Viewer..."
            }
        ]
    }
}';

$array = json_decode($json, true);

foreach ($array as $key=>$value){
    echo $key;
        foreach ($value as $key1 => $value1) {
            echo $key1;
                foreach ($value1 as $key2 => $value2) {
                    echo $key2;
                        foreach ($value2 as $key3 => $value3) {
                            echo $key3;
                }
            }
        }
    }
}

// foreach ($array as $key => $value){
//     echo '<br>';
//     if(is_array($value)){
//         foreach ($value as $key2=> $value2){
//             echo '<br>'.'<br>'.$key2.':  ';
//             if(is_array($value2)){
//                 foreach ($value2 as $key3=> $value3){
//                 echo '<br>';
//                     if(is_array($value3)){
//                         foreach ($value3 as $key4=> $value4){
//                         echo '<br>'."&nbsp;&nbsp;&nbsp;&nbsp;".$key4.':  ';
//                             if(is_array($value4)){
//                                 foreach ($value4 as $key5=> $value5){
//                                 echo '<br>'."&nbsp;&nbsp;&nbsp;&nbsp;".$key4.':  '.$value5;
//                                 }
//                             }
//                             else {
//                                 echo $value4;
                            
//                             }
//                         }
//                     }
//                     else {
//                         echo $value3;
                    
//                     }
//                 }
//             }
//             else {
//                 echo $value2;
            
//             }
//         }
//     }
//     else {
//         echo $value;
//     }
// }


?>