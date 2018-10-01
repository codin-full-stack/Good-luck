<?php
$dir = "C:/wamp/www/Mindaugas/2018.09.10/";
$files = scandir($dir);
foreach ($files as $key => $value) {
   $pos = strpos($value, '.json');
   if ($pos === false) {
       //nothing
   }
   else
   {
       //echo $value;
       $ext = pathinfo($value, PATHINFO_EXTENSION);
       if($ext=='json')
       {
           $file = file_get_contents($dir.$value, FILE_USE_INCLUDE_PATH);
           $allInfo = json_decode($file, true);
           foreach ($allInfo as $key => $item) {
               if (!is_array($item)) {
                   echo $key . ' - ' . $item . '<br>';
               } else {
                   foreach ($item as $key => $val) {
                    //    echo '<br>' . $key . '=>' . $val . '<br>';
                   }
               }
           }

       }
   }
   }
?>