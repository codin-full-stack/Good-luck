<div>

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
        
        <br>          
        
        <input type="reset">
        <input type="submit" class="button" value="pateikti" >  
</div>
