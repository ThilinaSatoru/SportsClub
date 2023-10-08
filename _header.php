<!--header start-->
<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['logout'])) {
    unset($_SESSION["username"]);
    header("location: index.php");
}
?>

<header>
    <a href="index.php" class="brand">Sports</a>
    <div class="menu-btn"></div>
    <div class="navigation">

        <a href="index.php">Home</a>
        <a href="Events.php">Events</a>
        <a href="donationForm.php">Donation</a>
        <a href="about.php">About</a>
        <a href="SportItems.php">Sport Items</a>
        <?php
        if (isset($_SESSION['username'])) {
            /// your code here
            echo
                "
                <a class='dropdown-item' style='font-size: larger; color: darkblue'>" . strtoupper($_SESSION['username']) . "</a>
                <form method='POST'>
                  <a class='dropdown-item'><input type='submit' value='Logout' name='logout'/></a>
                </form>
                ";
        } else {
            echo
            "
           <a href='login.php' style='color: darkblue'>Login</a>
          ";
        }
        ?>

    </div>

</header>
<!--header end-->