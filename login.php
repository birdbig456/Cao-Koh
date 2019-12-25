<html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <style>
            h1{
                font-family: Quicksand;
                font-size: 3vw;
                text-align: center;
            }
             p,a{
                font-family: Quicksand;
                font-size: 1vw;
            }
            h1.round2 {
  border: 2px solid black;
  border-radius: 8px;
  border-width: 8;
  margin-top: 150px;
}
            a:link {color: black; text-decoration: none}
            a:visited {color: black; text-decoration: none}
            a:hover {color: white; text-decoration: none}
        </style>
    </head>
<body background="sea2.jpg";>
<form name="form1" method="post" action="check_login.php">
<TABLE align = "center" style="background-color:rgba(255, 255, 255, 0.8); height: 30%" >
<tbody>
    <tr><td><h1>LOGIN</h1></td></tr>
        <tr>
            <td><p> &nbsp;Username</p></td>
 <td>
 <input name="txtUsername" type="text" id="txtUsername">
 </td>
 </tr>
 <tr>
     <td><p> &nbsp;Password</p></td>
 <td><input name="txtPassword" type="password" id="txtPassword">
 </td>
 </tr>
 <tr>
            <td><input type="submit" name="Submit" value="Login"> &nbsp;</td>
 <td>
 <input type="reset" name="Submit2" value="Reset">
 </td>
        </tr>
    <tr><td><a href = "register.php"> >> ลงทะเบียนใหม่ << </a></td></tr>
        </tbody>
        </TABLE>
</form>
</body>
</html>
