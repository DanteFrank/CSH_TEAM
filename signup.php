<?php
    //Signup Header
    require "header.php";
?>

            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signuperror">Fill In All Fields!</p>';
                    }
                    elseif ($_GET['error'] == "invalidusername") {
                        echo '<p class="signuperror">Fill in a valid Username</p>';
                    }
                    elseif ($_GET['error'] == "invalidemail") {
                        echo '<p class="signuperror">Fill in a valid email</p>';
                    }
                    elseif ($_GET['error'] == "checkpassword") {
                        echo '<p class="signuperror">Passwords do not match</p>';
                    }
                    elseif ($_GET['error'] == "uidtaken") {
                        echo '<p class="signuperror">Username Taken</p>';
                    }
                }
                else {
                    echo '<p class="signupsuccess">Signup Success!</p>';
                }

            ?>
            <form class="main" action="includes/singup.inc.php" method="post">
                    <h2 class="sign">SIGN UP</h2>
                    <input type="text" class="real" name="uid" placeholder="Username "> <br>
                    <input type="email" class="real" name="email" placeholder="Email"><br>
                    <input type="password"  class="real" name="pwd" placeholder="Password"><br>
                    <input type="password" class="real" name="pwd-repeat" placeholder="Confirm Password"> <br>
                    
                    <button type="submit"  class="submit" name="signup-submit">Sign Up</a></button>
                </form>



<?php
    require "footer.php"
?>
