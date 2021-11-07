<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" >
<title>Page Title</title>
</head>
<body>
<form action="login.php" method="post" >

<div class="Sign in">
<h1>SIGN IN TO YOUR ACCOUNT</h1>

      <label for ="name"><b>Username</b></label><br>
      <input type ="name" placeholder ="Name" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Password" name="psw" required>
      <br><br>
      <button type="submit" name="save" class="signin"><b>login</b></a></button>
      </form>
</div>
</body>
</html>