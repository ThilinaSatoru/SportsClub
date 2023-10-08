<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inter Sports Club</title>
    <link rel="stylesheet" href="css/events.css">
    <!--    <link rel="stylesheet" href="css/style.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

</head>

<body>


<?php include("_header.php"); ?>


<!--home start-->

<section class="home" id="home">

    <video class="video-slide active" src="images/production ID_4729195.mp4" autoplay muted loop></video>

    <div class="content active ">
        <h1>Event<br><span>Explore things</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequatur repellendus nisi neque dolores
            voluptatem voluptate ratione, dicta sit? Hic consequatur eum ut voluptas cupiditate expedita explicabo
            id dignissimos officia!</p>

    </div>


</section>
<!--home end-->
<!--    <section class="about" id="events">-->
<!--        <div class="title reveal">-->
<!--            <h2 class="section-title">Upcoming Events</h2>-->
<!--            <a class="btn" href="SportItems.php#request_form">Make your Request</a>-->
<!--        </div>-->
<!--        <br><br>-->
<!---->
<!--        <div class="box-contanier">-->
<!--            <div class="swiper review-slider">-->
<!--                <div class="swiper-wrapper">-->
<!---->
<!--                    --><?php //include("templates/e_cards.php") ?>
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </section>-->

<div class="event">
    <div class="container">
        <p class="event-date">
            Join with Us
        </p>
        <h1 class="event-title">
            New Upcoming Events, Explore New Things
        </h1>
        <p class="event-info">
            Use Augmented Reality to keep students engaged and provide detailed explanations of models and course
            material. <br>
            In a 3D, AR Lab, students can pinch, zoom, and rotate equipment related to the course, for a fully
            immersive learning experience.
        </p>

        <form action="PHP/event.php" method="post" class="reg-form" id="event-form">
            <h2 class="form-heading">
                Join the event
            </h2>
            <!--     first name & last name -->
            <div class="row">
                <!--       First name -->
                <div class="col">
                    <label for="">
                        First name
                    </label>
                        <input type="text" name="fname" placeholder="Enter your first name" required>
                    </div>
                    <!--       Last name -->
                    <div class="col">
                        <label for="">
                            Last name
                        </label>
                        <input type="text" name="lname" placeholder="Enter your last name" required>
                    </div>
                </div>
                <!--     email & job -->
                <div class="row">
                    <!--       Business email -->
                    <div class="col">
                        <label for="email">
                            Email
                        </label>
                        <input type="email" name="email" placeholder="Enter your email">
                    </div>
                    <!--       title -->
                    <div class="col">
                        <label for="">
                            Event Title
                        </label>
                        <input type="text" name="title" placeholder="What is your Event?" required>
                    </div>
                    <div class="col">
                        <label for="">
                            Event Type
                        </label>
                        <input type="text" name="type" placeholder="Event type" required>
                    </div>
                </div>

                <div class="textarea">
                    <label for="">Event Description</label>
                    <textarea name="description" placeholder="Information about Event"></textarea>
                </div>

                <button type="submit" name="reg_event">
                    Register for this event
                </button>
            </form>
        </div>
    </div>


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

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js" charset="utf-8"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>