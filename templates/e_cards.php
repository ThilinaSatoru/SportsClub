<style>
    .swiper-slide {
        height: 500px !important;
        /* width: 250px !important; */
        padding: 0 !important;

    }
</style>
<?php
include("PHP/connection.php");
global $con;


$result = mysqli_query($con, "SELECT * FROM `event` LIMIT 0, 20");
while ($row = mysqli_fetch_assoc($result)) {


    echo "<div class='swiper-slide'>
            <div class='box'>
                <img src='images/photo-1507525428034-b723cf961d3e.jpg' alt='' />
                <h1>" . $row['title'] . "</h1>
                <h3>" . $row['type'] . "</h3>
                <p>
                    " . $row['description'] . "
                </p>
                <h4>" . $row['fname'] . " " . $row['lname'] . "</h4>
                <div>" . $row['email'] . "</div>
            </div>
        </div> ";
}

?>