<?php
include 'header.php';
?>

<div class="vartotoju-lentele">
    
    <table>
        <thead class="table-head">
            <tr>
                <th>Full Name</th>
                <th>Age</th>
                <th>Job Title</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $sql = "select * from users";
        $result = $con->query($sql);
        while ($vartotojai = $result->fetch_assoc()){ ?>

        <tr>
            <td>
                <a href="userioInfo.php?id=<?php echo $vartotojai['id']; ?>">
                    <?php echo $vartotojai['name'] . ' ' . $vartotojai['lastname']; ?>
                </a>
            </td>
            <td>
                <?php echo $vartotojai['amzius']; ?>
            </td>
            <td><?php echo 'bedarbis';?></td>
            <td><?php echo $vartotojai['city']; ?></td>            
        </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
