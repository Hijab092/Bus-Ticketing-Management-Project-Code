<?php 
       
        $conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);

        if (!$conn) {
            die("Connection failed:". mysqli_connect_error());
        }
        if (isset($_POST['submit']))
        {
            $experience = $_POST['experience'];
            $satisfaction = $_POST['satisfaction'];
            $atmosphere = $_POST['atmosphere'];       
            $drivingskills = $_POST['drivingskills'];
            $howfind = $_POST['howfind'];
            $useagain = $_POST['useagain'];
            $problem = $_POST['problem'];
            $suggestion = $_POST['suggestion'];
            $lostitem = $_POST['lostitem'];
            $cid=mysqli_query($conn,'select cid from passenger_info order by cid desc limit 1 ');
            $row = mysqli_fetch_assoc($cid);
            $cid = $row['cid'];
        
            $Insert = "INSERT INTO customercare(experience, satisfaction, atmosphere, drivingskills, howfind, useagain, problem, suggestion, lostitem, cid)
                      values('$experience', '$satisfaction', '$atmosphere', '$drivingskills', '$howfind', '$useagain', '$problem', '$suggestion', '$lostitem', '$cid')";
                     # echo $Insert;
            
            if(mysqli_query($conn,$Insert))
            {
                echo"The form is submitted successfully! ";
                echo"Thank you for your response :)";
                
            }
            else{
                echo mysqli_error($conn);

            }
            
        }
        
?>