<?php
session_start();
 include("config.php");
$strSQL = "SELECT * FROM id WHERE Username =
'".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if(!$objResult)
{
echo "<script>alert('Username or Password Incorrect!');window.location = 'login.php';</script>";
}
else
{
$_SESSION["Username"]=$objResult["Username"];


header("location:home.php");



}
mysqli_close($objCon);
?>