<div class="navbar">
    <ul>
        <li class="navbarHome">
            <a href="index.php">Home</a>
        </li>

        <li class="navbarProfile">
            <div class="dropDown">
                <button class="dropbtn">User Profile</button>
                <div class="dropDown-content">
                    <a href="userInfoDB.php">Profile Info</a>
                    <a href="#">My Posts</a>                      
                </div>
            </div> 
        </li>

        <li class="postSearch">
            <a href="">Straipsniu paieska</a>
        </li>

        <li class="postNew">
            <a href="post_new.php">Straipsniu rasymas</a>
        </li>


        <li class="navbarRegister">
            <a href="registration.php">Register</a>
        </li>
        <li class="loggedin">
            <?php
                    if(isset($_SESSION['id'])){
                    echo 'Logged in with: ' . $_SESSION['id'];
                }
            ?>
        </li>
        <li class="navbarLogin">
            <a href="loginDB.php">Log In</a>
        </li>

        <li class="navbarLogout">
            <a href="logout.php">Log Out</a>
        </li>
    </ul>
</div>
