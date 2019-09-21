<?php

    $DB_HOST = 's9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306';
    $DB_USER = 'uvdnjdrs65i4fhrl';
    $DB_PWD = 'o4ub9cyk5k9uu1ll';
    $DB_NAME = 'hijp1t3kqxntusiz';



    //Create Connection
     $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PWD, $DB_NAME);

    //Check Connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }