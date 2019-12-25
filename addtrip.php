<?php
    session_start();
    include"config.php";
    $query = mysqli_query($objCon,"SET NAMES UTF8");
    $sql = "INSERT INTO pay (adult,child,total,Username) VALUES ('".$_POST['adult_price']."','".$_POST['kid_price']."','".$_POST['values']."','".$_SESSION['Username']."')";
    $query = mysqli_query($objCon,$sql);
    if($query){
        echo "<script>alert('Pay Success!'); window.location='home.php';</script>";
    }
    else{
        echo "<script>alert('Pay Unsuccess!'); window.location='home.php';</script>";
    }
?>