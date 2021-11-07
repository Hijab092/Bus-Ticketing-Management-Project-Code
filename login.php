<?php
session_start();
$message="";
if(count($_POST)>0)
{
    $conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);
    $sql=mysqli_query($conn,"SELECT * FROM passenger_info where uname='". $_POST["uname"] ."' 
    and psw='". $_POST["psw"] ."' ");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["cid"]=$row['cid'];
        $_SESSION["uname"] = $row['uname'];
        $_SESSION["psw"]=$row['psw'];
        echo implode(', ', $row);
        $cid=mysqli_query($conn,"select uname,psw,CNIC,phone_number,email,gender from passenger_info
        where uname='". $_POST["uname"] ."' and psw='". $_POST["psw"] ."' ");
        while ($row = mysqli_fetch_array($cid)) {
            $uname = $row['uname'];
            $psw = $row['psw'];
            $CNIC = $row['CNIC'];
            $phone_number = $row['phone_number'];
            $email = $row['email'];
            $gender = $row['gender'];
        }
        $Insert = "INSERT INTO passenger_info(uname,psw,CNIC,phone_number,email,gender) values
        ('$uname', '$psw', '$CNIC', '$phone_number', '$email', '$gender')";

        #echo $Insert;
        mysqli_query($conn, $Insert);
         header("Location: ticket.php"); 

    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
if(isset($_SESSION["cid"]))
{
   
}

?>