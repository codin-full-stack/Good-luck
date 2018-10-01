<?php

?>

<div class="navbar">

    <?php
    $json = file_get_contents('index.json');
    $array = json_decode($json, true);


    //_______________________________
    // antras (trumpesnis) budas
    ?>
    <a href=" <?php echo $array['menu']['header'];?>"><?php echo $array['menu']['header'];?></a>
    <?php
    $array = $array['menu']['items'];
    // var_dump($array);
    foreach ($array as $key => $value) {
        if(!empty($value)){
            ?>
            <a href="<?php echo $value['id'];?>">
                <?php
                    if(!empty($value['label'])){
                        echo $value['label'];}
                    // } else {
                    //     echo 'NO LABEL!' . ' ';
                    // }
                ?>
            </a>
            &nbsp;
            <?php
        }
    }

    // $json = json_encode($array);
    // echo $json;
    ?>
</div>