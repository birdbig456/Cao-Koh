<?php
    include "config.php";
    $query=mysqli_query($objCon,"SET NAMES UTF8");
?>
<html>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
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
.button:link, .button:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.button:hover, .button:active {
  background-color: red;
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
h2, h3, h4, h5, h6 {
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
<body>
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
<?php
    if($_POST["money"] == "A"){
        $sql="SELECT * FROM trip WHERE continent='".$_POST['list']."' AND price BETWEEN 2000 AND 4000 ORDER BY price";
        $query=mysqli_query($objCon,$sql);
        while($result=mysqli_fetch_array($query)){
            $a = $result['place'];
        ?>
            <div class="responsive">
              <div class="gallery">
                  <a align="center" href="koh1.php?place=<?php echo $a?>"><img src="gallery/<?php echo $result['img']?>.jpg" alt="samesan" width="600" height="400"></a>
                  <h1><?php echo $a?></h1>
                  <span><?php echo $result['price']?></span><br>
                  <p><?php echo $result['text']?></p>
                  <p><?php echo $result['textt']?></p>
                  
              </div>
            </div>
    <?php
        }
    }
    else if($_POST["money"] == "B"){
        $sql="SELECT * FROM trip WHERE continent='".$_POST['list']."' AND price BETWEEN 2000 AND 6000 ORDER BY price";
        $query=mysqli_query($objCon,$sql);
        while($result=mysqli_fetch_array($query)){
            $a = $result['place'];
             ?>
            <div class="responsive">
              <div class="gallery">
                  <a align="center" href="koh1.php?place=<?php echo $a?>"><img src="gallery/<?php echo $result['img']?>.jpg" alt="samesan" width="600" height="400"></a>
                  <h1><?php echo $a?></h1>
                  <span><?php echo $result['price']?></span><br>
                  <p><?php echo $result['text']?></p>
                  <p><?php echo $result['textt']?></p>
              </div>
            </div>
            
    <?php
        }
    }
    else if($_POST["money"] == "C"){
        $sql="SELECT * FROM trip WHERE continent='".$_POST['list']."' AND price BETWEEN 2000 AND 8000 ORDER BY price";
        $query=mysqli_query($objCon,$sql);
        while($result=mysqli_fetch_array($query)){
            $a = $result['place'];
             ?>
            <div class="responsive">
              <div class="gallery">
                  <a align="center" href="koh1.php?place=<?php echo $a?>"><img src="gallery/<?php echo $result['img']?>.jpg" alt="samesan" width="600" height="400"></a>
                  <h1><?php echo $a?></h1>
                  <span><?php echo $result['price']?></span><br>
                  <p><?php echo $result['text']?></p>
                  <p><?php echo $result['textt']?></p>
              </div>
            </div>
            
    <?php
        }
    }
    else if($_POST["money"] == "D"){
        $sql="SELECT * FROM trip WHERE continent='".$_POST['list']."' AND price BETWEEN 2000 AND 10000 ORDER BY price";
        $query=mysqli_query($objCon,$sql);
        while($result=mysqli_fetch_array($query)){
            $a = $result['place'];
             ?>
            <div class="responsive">
              <div class="gallery">
                  <a align="center" href="koh1.php?place=<?php echo $a?>"><img src="gallery/<?php echo $result['img']?>.jpg" alt="samesan" width="600" height="400"></a>
                  <h1><?php echo $a?></h1>
                  <span><?php echo $result['price']?></span><br>
                  <p><?php echo $result['text']?></p>
                  <p><?php echo $result['textt']?></p>
              </div>
            </div>
            
    <?php
        }
    }
?>



</body>
</html>