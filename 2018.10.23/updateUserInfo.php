<?php
include 'header.php';
?>

<div class="updateInfo">
    Iveskite naujus duomenis:
    <form action="" method="POST">        
    
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
        
        <br>          
        <!-- <input type="file" name="image" id="image"> -->
        <br>
        <input type="reset" value="Reset">
        <input type="submit" class="button" value="pateikti" name="change">  
        <input type="button" value="Back" onclick="location.href='userInfoDB.php'" />
    </form>
</div>


<?php

$email = "select * from users where id= '" . $_SESSION['id'] . "' ";

$result = $con->query($email);
$user = $result->fetch_assoc();

/** VISU DUOMENU KEITIMAS */

if(isset($_POST['change'])){
    
    if(!empty($_POST)){

        // $targetDir = "pictures/";
        // $targetFile = $targetDir . basename($_FILES['image']['image']);
        // $uploadOk = 1;
        // var_dump($targetFile);
        // $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
        // // var_dump($imageFileType);
        // $check = getimagesize($_FILES['image']['tmp_name']);
        // if($check !== false){
        //     echo 'its image - ' . $check['mime'] . '.';
        //     $uploadOk = 1;
        // } else {
        //     echo 'its not image';
        //     $uploadOk = 0;
        // }
        
        // if ($uploadOk == 0) {
        //     echo "Sorry, your file was not uploaded.";
        // } else {
        //     if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        //         echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        //     } else {
        //         echo "Sorry, there was an error uploading your file.";
        //     }
        // }

        $sql = "UPDATE users SET name = '" . $_POST['name'] . "', lastname = '" . $_POST['pavarde'] . "', email = '" . $_POST['email'] . "', amzius = '" . $_POST['amzius'] . "', city = '" . $_POST['miestai'] . "', gender = '" . $_POST['lytis'] . "' WHERE id = '" . $user['id'] . "'";
        $result = mysqli_query($con, $sql);
        echo 'Duomenys atnaujinti';
    } else {
        echo "kazkas negerai";
    }
} else {
    
}

?>

<?php
include 'footer.php';
?>