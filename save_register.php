<?php
include("config.php");
$strSQL = "SELECT * FROM id WHERE Username = '".trim($_POST['txtUsername'])."' ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if(trim($_POST["txtUsername"]) == "")
{
echo "<script>alert('Please input Username!');window.location = 'register.php';</script>";
}
else if(trim($_POST["txtPassword"]) == "")
{
echo "<script>alert('Please input Password!');window.location = 'register.php';</script>";
}
if($_POST["txtPassword"] != $_POST["txtConPassword"])
{
echo "<script>alert('Password not Match!');window.location = 'register.php';</script>";
}
else if(trim($_POST["txtName"]) == "")
{
echo "<script>alert('Please input Name!');window.location = 'register.php';</script>";
}
else if($objResult)
{
echo "<script>alert('Username already exists!');window.location = 'register.php';</script>";
$link_address1 = 'register.php';
echo "<p>";
echo "<a href='$link_address1'>Go back to Register page</a>";
}
else
{
$strSQL = "INSERT INTO id (Username,Password,Name) VALUES
('".$_POST["txtUsername"]."',
'".$_POST["txtPassword"]."','".$_POST["txtName"]."')";
$objQuery = mysqli_query($objCon,$strSQL);
echo "<script>alert('Register Completed!');window.location = 'login.php';</script>";
}
mysqli_close($objCon);
?>