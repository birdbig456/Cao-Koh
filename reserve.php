<?php
session_start();
    if(!isset($_SESSION["Username"])){
        echo "<script>alert('Please Login!');window.location = 'login.php';</script>";
    }
    include"config.php";
    $query = mysqli_query($objCon,"SET NAMES UTF8");
    $sql = "SELECT * FROM trip where place = '".$_GET['place']."'";
    $query = mysqli_query($objCon,$sql);
    $result = mysqli_fetch_array($query);
?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
        <style>
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
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script>
        var adult = 0;
        var kid = 0;
        var total;
        var price_display;
        $(document).ready(function() {
            $("body").on("input", '.adult_price', function() {
                adult = this.value;
                total = (adult * <?php echo $result['price'] ?> ) + (kid * <?php echo $result['price'] ?> );
                $("form").find(".price_total").each(function() {
                    $(".price_total").remove();
                    $('.submit').remove();
                    $('.newline').remove();
                    $('.values').remove();
                });
                price_display = "<span class='price_total'>"+total+"</span><br class='newline'><input class='values' name='values' type='hidden' value='"+total+"'><button type='submit' name='submit' class='submit'>Submit</button>";
                $("form").append(price_display);
            });
            $("body").on("input", '.kid_price', function() {
                kid = this.value;
                total = (adult * <?php echo $result['price'] ?> ) + (kid * <?php echo $result['price1'] ?> );
                $("form").find(".price_total").each(function() {
                    $(".price_total").remove();
                    $('.submit').remove();
                    $('.newline').remove();
                    $('.values').remove();
                });
                price_display = "<span class='price_total'>"+total+"</span><br class='newline'><input class='values' name='values' type='hidden' value='"+total+"'><button type='submit' name='submit' class='submit'>Submit</button>";
                $("form").append(price_display);
            });
        });
    </script>
</head>
<body background="sea2.jpg";>
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

    <div style="margin-top: 10%">
    <TABLE align = "center" style="background-color:rgba(255, 255, 255, 0.8); height: 30%" >
<tbody>
    <tr><td><h1 style = "font-size: 100px ;" align="center">
            Pay
        </h1></td></tr>
    <tr><td>    <form method="post" action="addtrip.php">
        <span>Adult : </span>
        <span id="adult"><?php echo $result['price']?></span><br>
        <span>Number of people </span>
        <input name="adult_price" type="number" class="adult_price"><br>
        <span>Child : </span>
        <span id="adult"><?php echo $result['price1']?></span><br>
        <span>Number of people </span>
        <input name="kid_price" type="number" class="kid_price"><br>
        <span>Total : </span>
        <span class="price_total">0</span><br class='newline'>
        <input class="values" name="values" type="hidden">
        <button type="submit" name="submit" class="submit">Submit</button>
    </form></td></tr>
        </tbody>
        </TABLE>
    </div>
</body>

</html>