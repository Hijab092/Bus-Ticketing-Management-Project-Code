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
<form action="adminlogin.php" method="POST">
<div class="Sign in">
<h1>SIGN IN TO YOUR ADMIN ACCOUNT</h1>

      <label for ="Name"><b>Name</b></label><br>
      <input type ="name" placeholder ="name" name="aname" required><br><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Password" name="psw" required>
      <br><br>
      <button type="submit" class="signin"><a href="admin del.php"><b>Sign in</b></a></button>
      </form>
</div>
</body>
</html>