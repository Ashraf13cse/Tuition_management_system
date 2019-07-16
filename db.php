<?php
 $connection = mysqli_connect("localhost", "root", "", "authenication");
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }


    // Selecting a database 

    $db_select = mysqli_select_db($connection, "authenication");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

?>