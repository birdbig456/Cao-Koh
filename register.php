<html>
<head>
    <title> Register </title>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body background="sea2.jpg";>
<form name="form1" method="post" action="save_register.php">
<table width="400" align = "center" style="background-color:rgba(255, 255, 255, 0.8); height: 30%">
<tbody>
    <tr><td><h1>Register</h1></td></tr>
<tr>
    <td width="125"><p> &nbsp;Username</p></td>
<td width="180">
<input name="txtUsername" type="text" id="txtUsername" size="20">
</td>
</tr>
<tr>
    <td><p> &nbsp;Password</p></td>
<td><input name="txtPassword" type="password" id="txtPassword">
</td>
</tr>
<tr>
    <td><p> &nbsp;Confirm Password</p></td>
<td><input name="txtConPassword" type="password" id="txtConPassword">
</td>
</tr>
<tr>
    <td><p> &nbsp;Name</p></td>
<td><input name="txtName" type="text" id="txtName" size="20"></td>
</tr>
<tr>
    <td><input type="submit" name="Submit" value="Save"></td>
</tr>
</tbody>
</table>
<br>
</form>
</body>
</html>