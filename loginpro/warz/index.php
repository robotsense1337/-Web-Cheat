<html>
<head>
<title>MEMMORYZ.NET</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>
<body>
<form name="form1" method="post" action="check_login.php">
  Login<br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td> &nbsp;Username</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;HWID</td>
        <td><input name="txtHWID" type="text" id="txtHWID">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <button type="submit" name="Submit" >Login</button>
</form>
</body>
</html>
<?
if ($_GET["a"] == 'add')
{
echo "5555555555555555";
}
?>