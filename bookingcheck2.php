<?php
    include "config.php";
    $query=mysqli_query($objCon,"SET NAMES UTF8");
    if($_POST["money"] == "A"){
        $sql="SELECT * FROM trip WHERE continent='".$_POST['list']."' AND price BETWEEN 2000 AND 4000 ORDER BY price";
        $query=mysqli_query($objCon,$sql);
        while($result=mysqli_fetch_array($query)){
            echo $result["continent"];
            echo "<br>ราคา<br>";
            echo $result["price"];
            echo "<br>สถานที่<br>";
            echo $result["place"];
            echo "<br><br>";
        }
    }
    else if($_POST["money"] == "B"){
        $sql="SELECT * FROM trip WHERE continent='".$_POST['list']."' AND price BETWEEN 2000 AND 6000 ORDER BY price";
        $query=mysqli_query($objCon,$sql);
        while($result=mysqli_fetch_array($query)){
            echo $result["continent"];
            echo "<br>ราคา<br>";
            echo $result["price"];
            echo "<br>สถานที่<br>";
            echo $result["place"];
            echo "<br><br>";
        }
    }
    else if($_POST["money"] == "C"){
        $sql="SELECT * FROM trip WHERE continent='".$_POST['list']."' AND price BETWEEN 2000 AND 8000 ORDER BY price";
        $query=mysqli_query($objCon,$sql);
        while($result=mysqli_fetch_array($query)){
            echo $result["continent"];
            echo "<br>ราคา<br>";
            echo $result["price"];
            echo "<br>สถานที่<br>";
            echo $result["place"];
            echo "<br><br>";
        }
    }
    else if($_POST["money"] == "D"){
        $sql="SELECT * FROM trip WHERE continent='".$_POST['list']."' AND price BETWEEN 2000 AND 10000 ORDER BY price";
        $query=mysqli_query($objCon,$sql);
        while($result=mysqli_fetch_array($query)){
            echo $result["continent"];
            echo "<br>ราคา<br>";
            echo $result["price"];
            echo "<br>สถานที่<br>";
            echo $result["place"];
            echo "<br><br>";
        }
    }
?>