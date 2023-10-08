<?php
mysqli_report(MYSQLI_REPORT_STRICT);

    try {
        // Database connection parameters
        $host = "localhost";
        $username = "root";
        $password = "root";
        $database = "sports_club_db";


        // Attempt to establish a database connection
        $con = new mysqli($host, $username, $password, $database);

        // Check if the connection was successful
        if ($con->connect_error) {
            echo "<script>";
            echo "alert('Failed to connect to MySQL: " . $con->connect_error . "');";
            echo "</script>";
            throw new Exception("Connection failed: " . $con->connect_error);
        }

    } catch (Exception $e) {
        // Handle the exception
        echo "Failed to connect to MySQL : : " . $e->getMessage();
        echo "<script>";
        echo "alert('Connection Failed: " . $e->getMessage() . "');";
        echo "</script>";
        exit;
    }

