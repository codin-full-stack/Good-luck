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

    <h1>Registracija</h1>

    <div class="registration">        
        
        <?php 
            if(!empty($_POST)){
                include 'data1.php';            
            } else {
                include 'form1.php';
            }
        ?>
        
    </div>
    
</body>
</html>