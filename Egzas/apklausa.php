<?php
// include 'header.php';
?>

<?php
/** CHECK BOX TIKRINIMAS */
// if( empty($_POST["naujienos"]) ) { echo "Checkbox was left unchecked."; }
// else { echo "Checkbox was checked."; }

// if( empty($_POST["akcijos"]) ) { echo "Checkbox was left unchecked."; }
// else { echo "Checkbox was checked."; }


// selektinam viska is db, pasiimam ip ir idedam i ifa ir tikrinam
// if (tikrinamas IP, jei tokio nera duodam pildyt  forma, jei yra rasom kas negalimas)
?>




<?php
include 'header.php';

if(isset($_POST['pateikti'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $amzius = $_POST['amzius'];
    $gender = $_POST['lytis'];
    $city = $_POST['miestai'];
    $naujienos = $_POST['naujienos'];
    $akcijos = $_POST['akcijos'];
    $komentaras = $_POST['komentaras'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $sql = "insert into atsakymai (name,  email, , amzius, city, lytis, naujienos, akcijos, komentaras, ip )
    values ('$name', '$email', '$amzius', '$city', '$gender', '$naujienos', '$akcijos', '$komentaras', '$ip' )";

    // var_dump($sql);
    // var_dump($con);
    if(!mysqli_query($con, $sql)){
        echo 'not inserted';
    } else {
        echo 'veikia';
    }
    
}
?>

<div class="regform">
    <form action="" method="POST">
        
        <label for="name">
            Jūsų vardas:
        </label>
        <input class="field" type="text" id="name" name="name" >        
        
        <br>      

        <label for="amzius">
            Jusu Amzius:
        </label>
        <input class="field" type="number" id="amzius" name="amzius" >

        <br>

        <label for='email'>
            Jusu el.pastas:
        </label>
        <input class='field' type='email' name='email'>

        <br>           

        <label for="miestai">
            Miestas:
        </label>

        <!-- Miestu masyvas -->
        <select id="miestai" name="miestai">
            <?php
                $cities=[
                    '1'=>'Vilnius',
                    '2'=>'Kaunas',
                    '3'=>'Klaipeda',
                    '4'=>'Siauliai',
                    '5'=>'Panevezys'
                    ];
            ?>         
            
            <?php foreach ($cities as $key => $value){ ?>
                <option value='<?php echo $key; ?>'>
                    <?php echo $value; ?>
                </option>
            <?php } ?>
        </select>

        <br>
        
        Lytis:
        <label for="lytis" class="radio">
            
            <input type="radio" name="lytis" value="vyras">Vyras
        </label>
        
        
        
        <label for="lytis" class="radio">
            <input type="radio" name="lytis" value="moteris">Moteris
        </label>
        
        <br>          
        

        <input type="checkbox" name="naujienos" value="naujienos">Norite gauti visas naujienas?
        
        <br>
        
        <input type="checkbox" name="akcijos" value="akcijos">Pranesimai apie akcijas
        
        <br>
        
        <textarea name="komentaras" rows="10" cols="30">Papildomi komentarai</textarea>

        <input type="reset">
        <input type="submit" class="button4" value="pateikti" name="pateikti" >
    </form>  
</div>
