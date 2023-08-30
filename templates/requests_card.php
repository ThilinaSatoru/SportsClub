<link rel="stylesheet" href="css/card.css">

<style>
    .controls ion-icon {
        color: #fff !important;
        box-shadow: 1px 1px #000;
    }
</style>

<section style="background-color:#007AFD !important;">

    <div class="slider-container">
        <div class="carousel">
            <div class="slider">
                <!-- =================================  SLIDING SEC 1 ========= -->

                <div class="rowss">
                    <?php
                    include("PHP/connection.php");
                    global $con;

                    $result = mysqli_query($con, "SELECT * FROM `equipment_request` LIMIT 0, 20");
                    while ($row = mysqli_fetch_assoc($result)) {

                        $E_name = '';
                        $equip = "SELECT * FROM equipment WHERE Id = " . $row['equipment'] . " LIMIT 1";
                        $q_id = $con->query($equip);
                        if ($q_id->num_rows > 0) {
                            while ($row2 = $q_id->fetch_assoc()) {
                                $E_name = $row2['SportName'];
                            }
                        }

                        echo "<div class='clou col-width-5'>
                            <div class='card'>
                                <input type='hidden' name='id' value=" . $row['id'] . " />
                                <div class='imgFrame'><H1>" . $row['university'] . "</h1></div>
                                <div class='card-details'>
                                    <h4>" . $row['batch'] . "</h4>
                                    <div class='price'>" . $E_name . "</div>
                                    <div>" . $row['date'] . "</div>
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
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </span>
                <span class="arrow right">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </span>
            </div>
        </div>
        <!--carasoule-->
    </div>
</section>


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