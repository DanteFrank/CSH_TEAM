<?php

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" >
</head>
<body>
    <header>
       
        <h1 class="csh">TEAM CSH</h1>

        <div class="nav-wrapper">
            <a href="index.php">Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
          
        <?php 
                if (isset($_SESSION['userId'])) {
                    echo  '<form class="form" action="includes/logout.inc.php" method="post">
                            <button class="login" type="submit" name="logout-submit">Logout</button>
                        </form>';
                }
                else {
                    echo ' 
                <form action="includes/login.inc.php" method="post"  class="form">
                    <input type="email" name="emailuid" placeholder="Email" class="black">
                    <input type="password" name="pwd" placeholder="Password" class="black"> 
                    <button class="login" type="submit" name="login-submit">Login</button>
                    <!-- <input type="submit" value="sign up" class="login"> -->
                    <a href="signup.php" class="link"><b>Sign Up</b></a>
                </form>';
                }
                ?> 
            
           
            
           

                
    </header>
