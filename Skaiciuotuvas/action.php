Užduotis:
<?php echo $_POST["pirmas"];
 ?>

<br>

Atsakymas: <?php

//$first = $_POST["pirmas"];
// $second = $_POST["antras"];
// $action = $_POST["veiksmas"];

// $result = 1 + 2;

eval( '$y = ' . $_POST["pirmas"] .';');

// eval("\$result = " . $first . $action . $second . ";");

// echo "\$result = " . $first . $action . $second . ";";

echo(round ($y,2));

?>

<!-- switch ($action){
    case "+":
        $result = $_POST["pirmas"]+$_POST["antras"];
        break;
    case "-":
        $result = $_POST["pirmas"]-$_POST["antras"];
        break;
    case "/":
        $result = $_POST["pirmas"]/$_POST["antras"];
        break;
    case "*":
        $result = $_POST["pirmas"]*$_POST["antras"];
        break;  
}
    echo(round ($result,4)); -->



