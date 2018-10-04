<?php
    include 'header.php';
?>

<div class="regform">
    <div class="regbox">
        <h1 class="registracija"> Registracija </h1>
        <form action="" method="POST">
            
            <?php // var_dump($_POST)?>

            <label for="name">
                Jūsų vardas:
            </label>
            <input class="field" type="text" id="name" name="name" >        
            
            <br>
            
            <label for="pavarde">
                Jūsų pavardė:
            </label>
            <input class="field" type="text" id="pavarde" name="pavarde" >    

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
            
            <label for='pass'>
                Iveskite slaptazodi:
            </label>
            <input class='field' type='password' name='pass1'>
            <br>

            <label for='pass'>
                Pakarotkite slaptazodi:
            </label>
            <input class='field' type='password' name='pass2'>
            
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
            
            
            
            <label for="lytis" class="radio">
                <input type="radio" name="lytis" value="kita">Kita
            </label>

            <label>Profile picture:
                <input type="file" name="image" />
            </label>
            
            <br>          
            
            <input type="reset">
            <input type="submit" class="button4" value="pateikti" >
        </form>  
    </div>
</div>


<?php  
/** REGISTRACIJA SU SLAPTAZODZIU DUOMENU BAZEJE */
if (!empty ($_POST)) {
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    
    if ($pass1 == $pass2){

        unset($_POST['pass2']);
        
        $_POST['pass1'] = md5($_POST['pass1']);

        $name = $_POST['name'];
        $lastname = $_POST['pavarde'];
        $email = $_POST['email'];
        $password = $_POST['pass1'];
        $amzius = $_POST['amzius'];
        $gender = $_POST['lytis'];
        $city = $_POST['miestai'];

        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);


        $sql = "insert into users (name, lastname, email, password, amzius, city, gender, profile-pic )
        values ('$name', '$lastname', '$email', '$password', '$amzius', '$city', '$gender', '$image' )";

        var_dump($sql);

        if(!mysqli_query($con, $sql)){
            echo 'not inserted';
        } else {
            echo 'inserted';
        }

    } else {
        echo '<br>' . 'Slaptazodziai nesupamta';
    }
}
?>


<?php
// include 'footer.php'; 
?>