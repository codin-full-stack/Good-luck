<head>
<link rel="stylesheet" type="text/css" href="styless.css">
</head>
<?php
    include 'menu.php';
    // include 'header.php';
?>
<div class="registration">
    <?php include 'form2.php'; ?>
</div>

<?php  
if (!empty ($_POST)) {
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if ($pass1 == $pass2){

        $filename = 'registrations' . DIRECTORY_SEPARATOR . urlencode($_POST['email'] . '.json');
       
        unset($_POST['pass2']);
        
        $_POST['pass1'] = md5($_POST['pass1']);

        $regData = json_encode($_POST, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

        file_put_contents($filename, $regData);

        $info = file_get_contents($filename);
        $json = json_decode($info, true);

        foreach ($json as $key => $value) {
            if(!empty($value)){
                echo '<br>' . $value ;
            }
        }
    } else {
        echo '<br>' . 'Slaptazodziai nesupamta';
    }
}
?>


<?php include 'footer.php'; ?>