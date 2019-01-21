<?php
session_start();

if ($_GET[submit] === "OK" && $_GET[login] && $_GET[passwd])
{
    $_SESSION[login] = $_GET[login];
    $_SESSION[passwd] = $_GET[passwd];
 }
if(!$_GET[login] && $_GET[submit] === "OK")
  {
    print("Please enter your login.\n");
  }
  if(!$_GET[passwd] && $_GET[submit] === "OK")
  {
    print("Please enter your password.\n");
  }

?>

<html><body>
<form action="index.php" method="get" accept-charset="UTF-8">
<fieldset >
<legend>Login Form</legend>

  Login: <input type="text" name="login" value="<?php echo "$_SESSION[login]"; ?>" />
  <br/>
  Passwd:  <input type="password" name="passwd" style="margin-left: 5px;" value="<?php echo "$_SESSION[passwd]"; ?>" />
  <br/>
  <button type="submit" name="submit" value="OK">Submit</button>
</fieldset >
</form>
</body></html>
