<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inter Sports Club</title>
    <link rel="stylesheet" href="css/donation.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <?php include("_header.php"); ?>

    <!--home start-->

    <section class="home" id="home">
        <video class="video-slide active" src="images/donate.mp4." autoplay muted loop></video>

        <div class="content active">
            <h1>Donate.<br /><span>Help to Stand</span></h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
                consequatur repellendus nisi neque dolores voluptatem voluptate
                ratione, dicta sit? Hic consequatur eum ut voluptas cupiditate
                expedita explicabo id dignissimos officia!
            </p>
        </div>
    </section>
    <!--home end-->

    <!--donation-->
    <form method="post" action="PHP/donation.php" id="donation-form">
        <div id="container">

            <span class="input">
                <input type="text" class="input__field" id="input-1" name="fname" required/>
                <label for="input-1" class="input__label">
                    <span class="input__label-content">First Name</span>
                </label>
            </span>

            <span class="input">
                <input type="text" class="input__field" id="input-2" name="lname" required />
                <label for="input-2" class="input__label">
                    <span class="input__label-content">Last Name</span>
                </label>
            </span>

            <span class="input">
                <input type="number" class="input__field" id="input-3" name="phone" />
                <label for="input-3" class="input__label">
                    <span class="input__label-content">Phone Number</span>
                </label>
            </span>

            <span class="input">
                <input type="email" class="input__field" id="input-4" name="email" />
                <label for="input-4" class="input__label">
                    <span class="input__label-content">Email Address</span>
                </label>
            </span>

            <span class="input">
                <input type="number" class="input__field" id="input-5" name="fund" required />
                <label for="input-5" class="input__label">
                    <span class="input__label-content">Fund</span>
                </label>
            </span>

            <span class="input message">
                <textarea class="input__field" id="input-6" name="message"></textarea>
                <label for="input-6" class="input__label">
                    <span class="input__label-content">Message</span>
                </label>
            </span>

            <!-- <button id="send-button" type="submit" name="d-submit" value="">Donate</button> -->
        </div>


        <div class="container">
            <div class="form">
                <div class="flex-row" id="card-number">
                    <label for="card-number">Card Number</label>
                    <input name="card-number" class="card-number" type="text" />
                </div>
                <div class="flex-row">
                    <label for="card-name">Holder Name</label>
                    <input name="card-name" class="card-name" type="text" value="" />
                </div>
                <div class="flex-row">
                    <table>
                        <tr>
                            <td class="table-column">
                                <label for="month">Expiration Date</label>
                                <select name="month" id="month-select">
                                    <option value="Month" selected disabled>Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <select name="year" id="year-select">
                                    <option value="Year" selected disabled>Year</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </td>
                            <td class="table-column">
                                <label for="card-cvv">CVV</label>
                                <input name="card-cvv" class="card-cvv" type="text" />
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- <div class="flex-row">
                    <input class="card-submit" type="submit" name="donate" />
                </div> -->

                <img class="card-image" src="https://pngimg.com/uploads/credit_card/credit_card_PNG99.png" alt="Card image" />
                <div class="card-image-shadow"></div>

            </div>
            <section class="container flex-row">
                <button style="margin-top: -39em;" id="send-button" type="submit" name="donate" value="">Donate</button>
            </section>
        </div>


    </form>
    <!--end donation-->

    <script src="js/donation.js"></script>
</body>

</html>