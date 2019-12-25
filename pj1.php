<?php session_start(); ?>
<html>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <style>
div.gallery {
  border: 2px solid #ccc;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 10px;
  text-align: center;
}

* {
  box-sizing: content-box;
    
    
}

.responsive {
  padding: 0 1px;
  float: left;
  width: auto;
    
}
  h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 5px;
  text-align: justify;
  letter-spacing: 1px;
}

a {
  text-decoration: none;
  color: #008CBA;
}  
.parallax {
  background-image: url('kohracha1.jpg');
  height: 100%; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
        .header{width: 100%; height: 6vh; background-color: #F8C471;text-align: center;padding-top: 4vh;}
        .content{width: 100%; height: 100%; background-color:#F5B7B1;}
        .footer{width: 100%; height: 15%; background-color:forestgreen;}
        .aheader{margin: 10vw;}
        .cconttent{  width: 100%;height: 70;background-color: aliceblue;}
        .recom{width: 1500px; height: 500px; background-color: aqua; }
        .recommend{width: 475px; height: 450px; background-color:blueviolet; float: left; margin: 10px}
        form {
            font-size: 40px;
             font-family: "Playfair Display";
        }
        body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
        {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

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

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

    </style>
</head>
<body >
    <div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="home.php" class="w3-bar-item w3-button">Home</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small" style="margin-right: -8%">
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
<body>

<div style="margin-top: 4%"><h2>Reserve</h2></div>


<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะแสมสาร">
      <img src="gallery/samaesan1.jpg" alt="samesan" width="600" height="400">
    </a>
      <h1>KOH SAMESAN</h1>
      <p>Samae San Island is a small island. Under the supervision of Sattahip Navy Is an ideal island for activities to study nature both on land and under the sea Which has beautiful nature, crystal clear water, suitable for playing a lot of water</p>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะขาม">
      <img src="gallery/kham1.jpg" alt="kham" width="600" height="400">
    </a>
    <h1>KOH KHAM</h1>
      <p>Is a small island in Sattahip district Currently in the care of the Navy, Region 1 is divided into two sides. Is the north side And the south side With the north side having a white sand beach Suitable for swimming or play beach sports and you can enjoy this.</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะล้าน">
      <img src="gallery/lan1.jpg" alt="lan" width="600" height="400">
    </a>
     <h1>KOH LAN</h1>
      <p>Is an island in the Gulf of Thailand In Pattaya Chonburi province With a total area of approximately 3,500 rai or 5.6 square kilometers Located in parallel with Pattaya Beach Just seven kilometers from the coast of Pattaya There is a highlight of the sea. Coral reefs and beautiful beaches</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะหวาย">
      <img src="gallery/waii1.jpg" alt="waii" width="600" height="400">
    </a>
      <h1>KOH WAII</h1>
      <p>Koh Wai is just a small island in the Koh Chang National Park. But is considered an island that is beautiful, not losing any islands in Trat province ever Because this island has a very beautiful sea nature The sea is blue, beautiful, like a mirror </p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะช้าง">
      <img src="gallery/chang1.jpg" alt="Chang" width="600" height="400">
    </a>
    <h1>KOH CHANG</h1>
      <p>Koh Chang, a popular holiday destination
With natural resources, including forests, sea and beaches
Including coral reefs That remains beautiful by various islands
Especially the islands Which is the main dive point of diving activities</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะกูด">
      <img src="gallery/kood1.jpg" alt="khood" width="600" height="400">
    </a>
    <h1>KOH KOOD</h1>
      <p>This is the last island in the east of Thailand in Trat sea waters. And still the second largest after Koh Chang And is the fourth largest island in the country But the interest of this Koh Kood It is not a huge size. Because the turquoise sea of Koh Kood is charming That makes Koh Kood become a paradise for sea lovers who always come to experience the peace and quiet in the simple way of life of fishermen on Koh Kood.</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะพะงัน">
      <img src="gallery/pangan1.jpg" alt="pangan" width="700" height="600">
    </a>
    <h1>KOH PANGAN</h1>
      <p>Koh Phangan is the smallest area in Surat Thani province. Located about 100 kilometers away from the province, consisting of 2 large islands, Koh Phangan and Koh Tao. Most areas are mountains and beaches. Koh Phangan is a world famous island. Especially in Haad Rin area Which is the venue for the Full Moon Party That is considered a legendary party</p>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะนางยวน">
      <img src="gallery/nangyuan1.jpg" alt="nangyuan" width="600" height="400">
    </a>
    <h1>KOH NANGYUAN</h1>
      <p>"Koh Nang Yuan" is one of the 100 islands of Surat Thani province. At the end of Koh Tao Overlooking 3 small islands connected by 3 white sandy beaches. The charm of Koh Nang Yuan is Comes from the clear emerald sea water that sees the little small fish, shells and corals that are clearly underwater The most popular activity here is Diving to see coral and beautiful fish Play by the beach</p>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะตาชัย">
      <img src="gallery/tachai1.jpg" alt="tachai" width="600" height="400">
    </a>
    <h1>KOH TACHAI</h1>
      <p>For the strength that makes Koh Tachai become a tourist attraction that anyone would like to travel to appreciate, it is a fine, soft white sand beach that stretches parallel to the water for about 700 meters and trekking to see crabs, crabs and crabs. Fresh like living in the stream With a bright red body With a glistening black claw When singing, it will sound like chicken. Like living during the night Including a diving point to see the coral that stretches parallel to the beach Another beautiful place in Thailand</p>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะพีพี">
      <img src="gallery/pp1.jpg" alt="pp" width="600" height="400">
    </a>
    <h1> PHI PHI  island</h1>
      <p>For the strength that makes a Tachai beach a tourist attraction that stretches parallel to the water for 700 meters and trekking to see crabs, crabs and crabs. Fresh like living in the stream. With a bright red body. Like living during the coral reef that stretches parallel to the beautiful place in Thailand</p>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะสิมิลัน">
      <img src="gallery/similun1.jpg" alt="similun" width="600" height="400">
    </a>
      <h1>SIMILUN island</h1>
      <p>"Similan Island", also known as "Ko Eight", is the largest island in the Similan Islands. The bay is shaped like a horseshoe. With soft white sand Clear water Plus, under the sea there are many beautiful coral species. Including coral reefs, coral reefs, coral reefs, brain corals, large mushrooms that are full of sea fans, sea lobsters and various types of fish With many beautiful colors</p>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะรอก">
      <img src="gallery/rok1.jpg" alt="rok" width="600" height="400">
    </a>
    <h1>Roh island</h1>
      <p>Rok is in the Krabi sea waters that connect the Trang Sea. Characteristics are two small islands. Set together as an island with long stretches of fine sand, soft and smooth feet when touching the white sand. The atmosphere of Koh Rok is suitable for lovers of beautiful, quiet and natural romantic views. Beautiful beaches Sea water is very shallow and clear, coral reefs that are rich in sea anemones are inhabited. Of orange-yellow cartoon fish Bright that everyone likes at the Koh Rok Nok view point to see a picture of a curved bay like a horseshoe. The two sides of the bay are steep rocky cliffs with views of Koh Rok Nok and Koh Rok Nai and It is a beautiful spot to watch the sunset.</p>
  </div>
</div>
    
    <div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะราชา">
      <img src="gallery/racha1.jpg" alt="racha" width="600" height="400">
    </a>
   <h1>Racha island</h1>
      <p>Koh Racha or Raya Island, Racha Island is divided into 2 islands, namely Racha Yai Island and Rachan Noi Island, which, if from Racha Yai Island, about 6 km, is considered a popular tourist center. Racha Island is an island. With clean white sand There is a beach on the west side between the valley is similar. Horseshoe called Pahang Bay has fine white sand beaches. Clear and clean sea water, similar to the sea in the Similan Islands in the south, Racha Island. On the west side of Phuket Island About 15 kilometers away from Phuket Island. There are over 3,000 islands. Square kilometers with flat ground and hills that are not very high Villagers have entered to occupy The land is made of coconut trees, fruit orchards and lives in Racha Yai Island, about 16 families. The flat land adjacent to the sea, villagers and investors have developed some of the accommodation. And restaurants for tourists</p>
  </div>
</div>
    
    <div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะหลีแป๊ะ">
      <img src="gallery/lipe1.jpg" alt="lipe" width="600" height="400">
    </a>
    <h1>KOH LIPE</h1>
      <p>Ko Lipe is one of the top beautiful islands. Of the Thai sea There is a clear green-blue sea, powdery white sand beach, which has the name "Maldives of Thailand". There are 3 main beaches: Sunrise Beach (Chao Le Beach), Sunset Beach (Fishing Beach) and Pattaya Beach ( Bundhaya Beach) In addition to the beautiful beaches around the island, Lipe is also a famous dive site. There are many aquatic animals Whether it is a cartoon fish Seven colors of coral, sea anemones, etc. which can be both snorkeling and scuba black</p>
  </div>
</div>
    
    <div class="responsive">
  <div class="gallery">
    <a href="koh1.php?place=เกาะสุรินทร์">
      <img src="gallery/surin1.jpg" alt="surin" width="600" height="400">
    </a>
    <h1>Surin Island</h1>
      <p>Surin Islands There is a shelter for both seasons due to the Surin Islands. Placed in groups and has a large bay Causing coral reefs along the coast around Koh Surin Nuea Koh Surin Tai And the island Oceanography environment of Surin Islands Is an ideal environment for the development of coral reefs, namely, Surin Islands, with clear water, adequate temperature And there is a mixture of water that receives nutrients from the water mass below that hits the island Plankton's abundance On Surin Islands</p>
  </div>
</div>
</body>
    </body>
</html>