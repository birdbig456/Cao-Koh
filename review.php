<?php
    session_start();
    include"config.php";
    $query = mysqli_query($objCon,"SET NAMES UTF8");
    $str = "INSERT INTO review (place,review,Username) VALUES ('".$_GET['place']."','".$_POST['reviewtxt']."','".$_SESSION['Username']."')";
    $query = mysqli_query($objCon,$str);
    header("location:koh1.php?place=".$_GET['place']);
?>