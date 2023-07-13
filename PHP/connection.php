<?php

   $con=mysqli_connect("localhost","root","root","sports_club_db");

   if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

?>