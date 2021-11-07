<?php 
       header("location:ticket.php");
       
        $conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);

        if (!$conn) {
            die("Connection failed:". mysqli_connect_error());
        }
        if (isset($_POST['save']))
        {
            $uname = $_POST['uname'];
            $psw = $_POST['psw'];
            $CNIC = $_POST['CNIC'];       
            $phone_number = $_POST['Phone_Number'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            
               
        
            $Insert = "INSERT INTO passenger_info(uname, psw, CNIC, phone_number, email, gender)
                      values('$uname', '$psw', '$CNIC', '$phone_number', '$email', '$gender')";
            
            if(mysqli_query($conn,$Insert))
            {
                echo"New details entered successfully";
                echo $Insert;
            }
            else{
                echo mysqli_error($conn);

            }
            
        }
        
?>