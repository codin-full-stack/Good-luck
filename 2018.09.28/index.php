<?php 
include 'header.php';
echo "frdsrkgjndrgk";
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
<?php include 'footer.php' ?>
