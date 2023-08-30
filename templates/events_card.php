<link rel="stylesheet" href="css/card.css">

<style>
    .controls ion-icon {
        color: #fff !important;
        box-shadow: 1px 1px #000;
    }
</style>

<div class="slider-container">
    <div class="carousel">
        <div class="slider">
            <!-- =================================  SLIDING SEC 1 ========= -->

            <div class="rowss">
                <?php
                include("PHP/connection.php");
                global $con;


                $result = mysqli_query($con, "SELECT * FROM `event` LIMIT 0, 20");
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<div class='clou col-width-5'>
                                <div class='card'>
                                    <input type='hidden' name='id' value=" . $row['id'] . " />
                                    <div class='imgFrame'>
                                        <h1>" . $row['title'] . "</h1>
                                        <br/>
                                        <h4>" . $row['type'] . "</h4>
                                        <p>" . $row['description'] . "</p>
                                    </div>
                                    <div class='card-details'>
                                        <h4>" . $row['fname'] . " " . $row['lname'] . "</h4>
                                        <div>" . $row['email'] . "</div>
                                    </div>
                                </div>
                            </div> ";
                }
                ?>
            </div>
            <!--rowss-->
        </div>
        <!--slider-->
        <!-- =================================  CONTROLS ========= -->
        <div class="controls">
            <span class="arrow left">
                <ion-icon name="chevron-back-outline">A</ion-icon>
            </span>
            <span class="arrow right">
                <ion-icon name="chevron-forward-outline">A</ion-icon>
            </span>
        </div>
    </div>
    <!--carasoule-->
</div>

<script>
    < script src = "https://unpkg.com/ionicons@5.4.0/dist/ionicons.js" / >
</script>
<script>
    const slider = document.querySelector('.slider');
    const leftarrow = document.querySelector('.left');
    const rightarrow = document.querySelector('.right');


    var sectionIndex = 0;

    leftarrow.addEventListener('click', function() {
        sectionIndex = (sectionIndex > 0) ? sectionIndex - 1 : 0
        slider.style.transform = 'translate(' + (sectionIndex) * -25 + '%)';
    });

    rightarrow.addEventListener('click', function() {
        sectionIndex = (sectionIndex < 3) ? sectionIndex + 1 : 3
        slider.style.transform = 'translate(' + (sectionIndex) * -25 + '%)';
    });
</script>