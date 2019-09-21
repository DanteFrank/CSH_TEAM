<?php
    require "header.php";
?>

<main>
        <div class="main">
            <section>
                <?php 
                if (isset($_SESSION['userId'])) {
                    echo '<h1 class="sign">Welcome To CSH!</h1>';
                }
                else {
                    echo ' 
                    <div>
                        <h1 class="sign">You are logged out!</h1>
                    </div>';
                }
                ?> 
            </section>
        </div>
       
    </main>



<?php
    require "footer.php"
?>







    





