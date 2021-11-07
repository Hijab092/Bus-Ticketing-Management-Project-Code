<?php
        $conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);
        $result = mysqli_query($conn,"SELECT * FROM passenger_info");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="">
<title>Delete employee data</title>
</head>
<body>
<table border="2">
	<tr>
    <td>CustomeID</td>
	<td>Username</td>
	<td>Password</td>
	<td>CNIC</td>
	<td>Phone Number</td>
	<td>Email</td>
    <td>Gender</td>
	<td>Action Delete</td>
	<td>Action Update</td>

	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["cid"]; ?></td>
	<td><?php echo $row["uname"]; ?></td>
	<td><?php echo $row["psw"]; ?></td>
	<td><?php echo $row["CNIC"]; ?></td>
	<td><?php echo $row["phone_number"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
	<td><a href="delete-process.php?cid=<?php echo $row["cid"]; ?>">Delete</a></td>
	<td><a href="update-process.php?cid=<?php echo $row["cid"]; ?>">Update</a></td>

	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>
