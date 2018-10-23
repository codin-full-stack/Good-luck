<div class="navbar">
    <div class="menu-btn">
        <button><i class="fas fa-bars"></i></button>
    </div>
    <ul class="navbarlist">
        <li class="navbarHome">
            <a href="index.php">Home</a>
        </li>

        <li class="navbarProfile">
            <div class="dropDown">
                <?php if(isset($_SESSION['id'])) { ?>
                    <button class="dropbtn">User Profile</button>
                    <div class="dropDown-content">
                        <a href="userInfoDB.php">Profile Info</a>
                        <a href="userPosts.php">My Posts</a>                      
                    </div>
                <?php } ?>
            </div> 
        </li>

        <!-- <li class="postSearch">
            <a href="">Straipsniu paieska</a>
        </li> -->

        <li class="postNew">
            <?php if(isset($_SESSION['id'])){ ?>
                <a href="post_new.php">Straipsniu rasymas</a>
            <?php } ?>
        </li>


        <li class="navbarRegister">
            <?php if(!isset($_SESSION['id'])){ ?>
                <a href="registration.php">Register</a>
            <?php } ?>
        </li>

        <li class="navbarusers">
            <a href="allUsers.php">Visi vartotojai</a>
        </li>

        <li class="calculator">
            <a href="calculator.php">Skaiciuotuvas</a>
        </li>

        <li class="leftTime">
            
        </li>


        <li class="blue">
            <button>Blue</button>
        </li>

        <li class="green">
            <button>Green</button>
        </li>

        <li class="red">
            <button>Red</button>
        </li>

        <li class="colorpick">
            <select id="colors">
                <option value="">Pick a color</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="red">Red</option>
            </select>
        </li>
        

        <li class="loggedin">
            <?php
                if(isset($_SESSION['id'])){
                    $sql = "select * from users where id='".$_SESSION['id']."' ";
                    $result = $con->query($sql);
                    $user = $result->fetch_assoc();
                    echo 'Labas: ' . $user['name'];
                }
            ?>
        </li>

        <li class="navbarLogin">
            <?php  if(!isset($_SESSION['id'])){ ?>
                <a href="loginDB.php">Log In</a>
            <?php } ?>
        </li>

        <?php if(isset($_SESSION['id'])){ ?>
            <li class="navbarLogout">
                <a href="logout.php">Log Out</a>
            </li>
        <?php } ?>
    </ul>
</div>
