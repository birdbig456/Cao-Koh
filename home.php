<?php session_start(); ?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <style>
        .parallax {
            background-image: url('kohracha1.jpg');
            height: 100%;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .header {
            width: 100%;
            height: 6vh;
            background-color: #F8C471;
            text-align: center;
            padding-top: 4vh;
        }

        .content {
            width: 100%;
            height: 100%;
            background-color: #F5B7B1;
        }

        .footer {
            width: 100%;
            height: 15%;
            background-color: forestgreen;
        }

        .aheader {
            margin: 10vw;
        }

        .cconttent {
            width: 100%;
            height: 200;
            justify-content: center;
        }

        .recom {
            width: 1500px;
            height: 500px;
            background-color: aqua;
        }

        .recommend {
            width: 475px;
            height: 450px;
            background-color: blueviolet;
            float: left;
            margin: 10px
        }

        form {
            font-size: 40px;
            font-family: "Playfair Display";
        }

        body {
            font-family: "Times New Roman", Georgia, Serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Playfair Display";
            letter-spacing: 5px;
        }

            {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            margin-top: 80;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        .headerbox {
            background-image: "gallery/kohrog1.jpg";
            width: 100%;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>
</head>

<body>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="home.php" class="w3-bar-item w3-button">Home</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="pj1.php" class="w3-bar-item w3-button">Trip</a>
                <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
                <?php
                if(!isset($_SESSION["Username"])){
                    echo "<a class='aheader' href='login.php'>Login</a>";
                }
                else{
                    echo "<a class='aheader' href='logout.php'>Logout</a>";
                }
            ?>
            </div>
        </div>
    </div>
    <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
        <div class="headerbox">
            <div align="center">
                <div class="cconttent">
                    <h2>Adjust your trip</h2>
                    <br>
                    <p>choose your continent and price rate</p>
                    <form method="post" action="bookingcheck.php">
                        <select name="list">
                            <option value="เอเชีย">Asia</option>
                            <option value="แอฟริกา">Africa</option>
                            <option value="อเมริกาเหนือ">North America</option>
                            <option value="อเมริกาใต้">South American</option>
                            <option value="ยุโรป">Europe</option>
                            <option value="ออสเตรเลีย">Australia</option>
                        </select>
                        <select name="money">
                            <option value="A">2,000-4,000 bath</option>
                            <option value="B">4,000-6,000 bath</option>
                            <option value="C">6,000-8,000 bath</option>
                            <option value="D">8,000 bath ++</option>
                        </select>
                        <input name="btnClick" type="submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="w3-display-bottomleft w3-padding-large w3-opacity">

        </div>
    </header>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="pp1.jpg" style="width:100%">
            <div class="text">Koh Phi Phi</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="pp2.jpg" style="width:100%">
            <div class="text">Koh Racha</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="12.jpg" style="width:100%">
            <div class="text">Koh Rog</div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
    <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
            <img src="kohracha3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Koh Racha</b></p>
                <p>Koh Racha or Raya Island, Racha Island is divided into 2 islands, namely Racha Yai Island and Rachan Noi Island, which, if from Racha Yai Island, about 6 km, is considered a popular tourist center. Racha Island is an island. With clean white sand There is a beach on the west side between the valley is similar. Horseshoe called Pahang Bay has fine white sand beaches. Clear and clean sea water, similar to the sea in the Similan Islands in the south, Racha Island. On the west side of Phuket Island About 15 kilometers away from Phuket Island. There are over 3,000 islands. Square kilometers with flat ground and hills that are not very high Villagers have entered to occupy The land is made of coconut trees, fruit orchards and lives in Racha Yai Island, about 16 families. The flat land adjacent to the sea, villagers and investors have developed some of the accommodation. And restaurants for tourists</p>
            </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
            <img src="kohrog3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Koh Rok</b></p>
                <p>Koh Rok is in the Krabi sea waters that connect the Trang Sea. Characteristics are two small islands. Set together as an island with long stretches of fine sand, soft and smooth feet when touching the white sand. The atmosphere of Koh Rok is suitable for lovers of beautiful, quiet and natural romantic views. Beautiful beaches Sea water is very shallow and clear, coral reefs that are rich in sea anemones are inhabited. Of orange-yellow cartoon fish Bright that everyone likes at the Koh Rok Nok view point to see a picture of a curved bay like a horseshoe. The two sides of the bay are steep rocky cliffs with views of Koh Rok Nok and Koh Rok Nai and It is a beautiful spot to watch the sunset.</p>
            </div>
        </div>
        <div class="w3-third w3-container">
            <img src="kohpayam1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>Koh Phangan</b></p>
                <p>Koh Phangan is the smallest area in Surat Thani province. Located about 100 kilometers away from the province, consisting of 2 large islands, Koh Phangan and Koh Tao. Most areas are mountains and beaches. Koh Phangan is a world famous island. Especially in Haad Rin area Which is the venue for the Full Moon Party That is considered a legendary party</p>
            </div>
        </div>
    </div>
    <footer class="w3-center w3-light-grey w3-padding-32">

    </footer>

</html>