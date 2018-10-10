<div class="navbar">
    <ul>
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

        <li class="postSearch">
            <a href="">Straipsniu paieska</a>
        </li>

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

        <li class="loggedin">
            <?php
                    if(isset($_SESSION['id'])){
                    echo 'Logged in with: ' . $_SESSION['id'];
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
