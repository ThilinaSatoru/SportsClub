<?php include("PHP/functions.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inter Sports Club</title>
    <link rel="stylesheet" href="css/sportitems.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

</head>

<body>
<?php include("_header.php"); ?>
<!--home start-->
<section class="home" id="home">
    <video class="video-slide active" src="images/sp.mp4" autoplay muted loop></video>
    <div class="content active ">
        <h1>Wonderful.<br><span>Island</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequatur repellendus nisi neque dolores
            voluptatem voluptate ratione, dicta sit? Hic consequatur eum ut voluptas cupiditate expedita explicabo
            id dignissimos officia!</p>
    </div>
</section>

<div class="wrapper">
    <ol>
        <div class="rocket">
            <svg>
                <use xlink:href="#rocket_svg"/>
            </svg>
        </div>
        <li style="--accent-color: #FCB410">
            <div class="title">Data 01</div>
            <div class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</div>
        </li>
        <li style="--accent-color: #D6489A">
            <div class="title">Data 02</div>
            <div class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</div>
        </li>
        <li style="--accent-color: #ACD038">
            <div class="title">Data 03</div>
            <div class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</div>
        </li>
        <li style="--accent-color: #10BBC5">
            <div class="title">Data 04</div>
            <div class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</div>
        </li>
        <li style="--accent-color: #7251A2">
            <div class="title">Data 05</div>
            <div class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed</div>
        </li>
    </ol>
</div>
<!-- rocket svg -->
<svg style="display: none">
    <symbol id="rocket_svg" viewBox="0 0 134.13 196.24">
        <path fill="#ebebf0"
              d="M27.06,108.49S7,119.92,3.06,127.24c-5.62,10.5-4.12,48.75,9.75,69,0,0,7.13-32.63,23.63-45.75Z"/>
        <path fill="#ebebf0"
              d="M107.06,108.49s20.08,11.43,24,18.75c5.63,10.5,4.13,48.75-9.75,69,0,0-7.12-32.63-23.62-45.75Z"/>
        <path fill="#f37664"
              d="M67.07,0V176.24H38.3a136.69,136.69,0,0,1-6.58-12.37l-.18-.38c-19.42-41.52-15.83-86.71-.83-120,.18-.42.37-.84.56-1.25C40,23.51,52.26,8.65,66.08.56,66.4.37,66.73.18,67.07,0Z"/>
        <path fill="#f4a391"
              d="M67.07,0V43.49H30.71c.18-.42.37-.84.56-1.25C40,23.51,52.26,8.65,66.08.56,66.4.37,66.73.18,67.07,0Z"/>
        <path fill="#1d7dae" d="M67.07,163.49v12.75H38.3a136.69,136.69,0,0,1-6.58-12.37l-.18-.38Z"/>
        <path fill="#f05b57"
              d="M103.42,43.49H67.07V0l1,.56c13.83,8.09,26.14,23,34.81,41.68C103.05,42.65,103.24,43.07,103.42,43.49Z"/>
        <path fill="#e94733"
              d="M115.94,102.87a142.86,142.86,0,0,1-13.35,60.62H67.07v-120h36.35A145.76,145.76,0,0,1,115.94,102.87Z"/>
        <path fill="#104c78" d="M102.59,163.49l-.18.38a136.69,136.69,0,0,1-6.58,12.37H67.07V163.49Z"/>
        <circle fill="#e2554c" cx="67.06" cy="84.36" r="22.99"/>
        <circle fill="#64cdf6" cx="67.06" cy="84.36" r="19.03"/>
    </symbol>
</svg>
<!--end items-->
<div id="body_header">
    <h1>Pending Requests</h1>
    <p><a href="#request_form">Make your Request</a></p>
    <div class="card_row">
        <?php include("templates/requests_card.php") ?>
    </div>
</div>


<!--request form-->
<div id="request_form">
    <div id="body_header">
        <h1>Sport Items Request Form</h1>
        <p>Make your Request more easier</p>
    </div>
    <form action="PHP/items.php" method="post">
        <fieldset>
            <legend><span class="number">1</span>Your basic details</legend>
            <label for="name">Name*:</label>
            <input type="text" id="name" name="name" placeholder="Full Name" pattern="[a-zA-Z0-9]+" required>

            <label for="email">Email*:</label>
            <input type="email" id="mail" name="email" placeholder="abc@xyz.com" required>

            <label for="university">University:</label>
            <input type="text" id="university" placeholder="NIBM" name="university" required>

            <label for="batch">Batch:</label>
            <input type="text" id="batch" name="batch" placeholder="GAHDSE211F" pattern="[a-zA-Z0-9]+" required>
        </fieldset>

        <fieldset>
            <legend><span class="number">2</span>Requst Items Details</legend>
            <label for="equipment">Request for*:</label>

            <select id="equipment" name="equipment">
                <option>Choose Your Option</option>
                <?php foreach (getEquipments() as $option) { ?>
                    <option><?php echo $option['name']; ?> </option>
                <?php } ?>
            </select>

            <div id="other-div" style="display:none;">
                <label>Enter your Option
                    <input id="other-input"/>
                </label>
            </div>

            <label for="description">Request Description:</label>
            <textarea id="description" name="description" placeholder="Request Your Needs of Sport."></textarea>
            <label for="date">Date*:</label>
            <input type="date" name="date"/>
            <br>
            <label for="time">Time*:</label>
            <input type="time" name="time"/>
            <br>

        </fieldset>
        <button type="submit" name="request">Request For Items</button>
    </form>
</div>
<!--end request form-->


<!--footer start-->
<footer class="footer">
    <div class="footer-container">
        <div class="sec aboutus">
            <h2>Sport</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo consectetur ipsam nemo non eum
                quidem quasi. Expedita, et officiis commodi ducimus blanditiis id nesciunt aspernatur at soluta?
                Rem, tempore! Nemo.</p>
            <ul class="sci">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="sec quickLinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">Upcoming Events</a></li>
                <li><a href="donationForm.html">Donation</a></li>
                <li><a href="about.html">Aboutus</a></li>
                <li><a href="SportItems.html">Sport Items</a></li>
                <li><a href="#">Aboutus</a></li>
            </ul>
        </div>
        <div class="sec Lcontact">
            <h2>Contact Info</h2>
            <ul class="info">
                <li>
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <span>243 st.joshap <br>
                            bambalapitiya,Colombo,<br>Sri Lanka</span>
                </li>
                <li>
                    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <p><a href="tel:123456789">+94 47 66 123 90</a><br>
                        <a href="tel:123456789">+94 47 66 123 90</a>
                    </p>
                </li>
                <li>
                    <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <p><a href="travel:travel@gmail.com">sport@gmail.com</a></p>
                </li>
            </ul>
        </div>
    </div>
</footer>

<div class="copyrightText">
    <p>Copyright 2022 Sport SriLanka . All Rights Reserved</p>
</div>
<!--Copyfooter end-->
<script src="js/sportitem.js" charset="utf-8"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>