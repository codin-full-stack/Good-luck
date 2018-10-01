<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Mindaugas</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    
    <h1>Registracija</h1>

    <div class="registration">        
        
       <?php 
        if(!empty($_POST)){
           include 'data.php';            
        } else {
            include 'form.php';
        }
        ?>
    </div>
    
</body>
</html>