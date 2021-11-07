<?php
$conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE passenger_info set cid='" . $_POST['cid'] . "', 
uname='" . $_POST['uname'] . "', psw='" . $_POST['psw'] . "', 
CNIC='" . $_POST['CNIC'] . "' ,phone_number='" . $_POST['phone_number'] . "', email='" . $_POST['email'] . "',gender='" . $_POST['gender'] . "'
WHERE cid='" . $_POST['cid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM passenger_info WHERE cid='" . $_GET['cid'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>

<input type="hidden" name="cid" class="txtField" value="<?php echo $row['cid']; ?>">
<br>
Username: <br>
<input type="text" name="uname" class="txtField" value="<?php echo $row['uname']; ?>">
<br>
Password :<br>
<input type="text" name="psw" class="txtField" value="<?php echo $row['psw']; ?>">
<br>
CNIC:<br>
<input type="text" name="CNIC" class="txtField" value="<?php echo $row['CNIC']; ?>">
<br>
Phone number:<br>
<input type="text" name="phone_number" class="txtField" value="<?php echo $row['phone_number']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Gender:<br>
<input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>