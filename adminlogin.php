<?php
session_start();
$message="";
if(count($_POST)>0)
{
    $conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);
    $sql=mysqli_query($conn,"SELECT * FROM `admin` where adminname='". $_POST["aname"] ."' 
    and psw='". $_POST["psw"] ."' ");
    $row  = mysqli_fetch_array($sql);
  
    if(is_array($row))
    {
        $_SESSION["aname"] = $row['adminname'];
        $_SESSION["psw"]=$row['psw'];
        #echo implode(', ', $row);
        
            #echo"success";
            header("location:admin del.php");
        }

    
    else
    {
        echo "Invalid Name/Password";
    }
}

if(isset($_SESSION["psw"]))
{
   
}

?>