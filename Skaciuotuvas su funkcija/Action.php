<?php


function suskaiciuoti($pirmas, $veiksmas, $antras){
    
    switch($veiksmas){
        case "+":
        $suma = $pirmas + $antras;
        return $suma;

        case "-":
        // $atimti = $pirmas - $antras;
        return $atimti = $pirmas - $antras;

        case "/":
        // $dal = $pirmas / $antras;
        return $dal = $pirmas / $antras;

        case "*":
        $daug = $pirmas * $antras;
        return $daug;
    }
    
}

$pirmas = $_POST['pirmas'];
$antras = $_POST['antras'];
$veiksmas = $_POST['veiksmas'];

echo "Atsakymas = " . round(suskaiciuoti($pirmas, $veiksmas, $antras));

?>


<!-- _______________________________ -->

<?php


function suskaiciuot($pirmas, $veiksmas, $antras){
    // $pirmas = $_POST['pirmas'];
    $res = $pirmas . $veiksmas . $antras . '=';
    $res .= $pirmas . $veiksmas . $antras;

    // $res = 'a';
    // $res .= 'b';
    // $res .= 'c';
    // $res .= 'd';
    // $res .= 'e';
    // rodys kaip apacioje
    // // abcde

    eval('$res.= ' . $pirmas . $veiksmas . $antras . ';');    
   
    return $res;    

}

echo suskaiciuot($_POST['pirmas'], $_POST['veiksmas'], $_POST['antras']);

?>