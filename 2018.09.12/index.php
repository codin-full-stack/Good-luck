<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Mindaugas</title>

    <link rel="stylesheet" type="text/css" href="styless.css">

</head>
<body>

    <?php 
        include 'menu.php';
    ?>

    <?php

    ?>

    <h1>Registracija</h1>

    <div class="registration">        
        
        <?php 
            if(!empty($_POST)){
                include 'data1.php';            
            } else {
                include 'form1.php';
            }

            if (!empty ($_POST)) {

                $filename = 'jsons' . DIRECTORY_SEPARATOR . urlencode($_POST['name'] . "_" . $_POST['pavarde'] . '.json');
    
                $regData = json_encode($_POST, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    
                file_put_contents($filename, $regData);

                $info = file_get_contents($filename);
                $json = json_decode($info, true);
                // var_dump($json);
                foreach ($json as $key => $value) {
                    if(!empty($value)){
                        echo '<br>' . $value ;
                    }
                }
            }
    
        ?>
        
    </div>
    
</body>
</html>