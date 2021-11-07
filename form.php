<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" >
<title>Page Title</title>
</head>
<body>
<form action="insert.php" method="POST">
<div class="myDiv">
<h1>WELCOME TO BUS TICKETING MANAGEMENT SYSTEM</h1>

      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Username" name="uname" required>
      <br>
      <br>
      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Password" name="psw" required>
      <br><br>
      <label for ="CNIC"><b>CNIC</b></label><br>
      <input type="text" placeholder="CNIC"  name="CNIC" required>  
      <br><br>
      <label for ="Phone Number"><b>Phone Number</b></label><br>
     <input type="tel" placeholder="Phone Number" name="Phone Number" required><br><br>
      <label for ="email"><b>E-mail</b></label><br>
      <input type ="email" placeholder ="E-mail" name="email" required><br><br>
      <b>Gender</b><br>
      <label for="male">Male</label>
      <input type ="radio" name="gender" id="male" value="male" ><br>
      <label for="female">Female</label>
      <input type ="radio" name="gender" id="female" value="female" >
      <br><br>
      <input type="submit" name="save" value="Sign up" class="signup">
       <p><b> Already have an account?</b> <a href="signin.php"><b>Log in</b></a></p>
       <p><b> ADMIN LOGIN</b> <a href="adminsignin.php"><b>Sign in</b></a></p>
    </div>
    </form>