<?php
include"config.php";
$query=mysqli_query($objCon,"SET NAMES UTF8");
$sql="SELECT place FROM trip WHERE continent='เอเชีย'";
$query=mysqli_query($objCon,$sql);
while($array=mysqli_fetch_array($query)){
    echo $array["place"];
}
?>