<?php        
        $conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);

        if (!$conn) {
            die("Connection failed:". mysqli_connect_error());
        }
        if (isset($_POST['save']))
        {
            $departuretime = $_POST['Departuretime'];
            $destination = $_POST['Destination'];
            $bustype = $_POST['bustype'];       
            $departurecity = $_POST['Departurecity'];
            $departuredate = $_POST['Departuredate'];
            $cid=mysqli_query($conn,'select cid from passenger_info order by cid desc limit 1 ');
            $row = mysqli_fetch_assoc($cid);
            $cid = $row['cid'];

            $seatno = $_POST['seatno'];    
            $b=implode(",",$seatno);   
            $num_of_selectedseats = $_POST['num_of_selectedseats'];
            
            $pmode = $_POST['mode'];
            
            $totalamount=$num_of_selectedseats*1500;

            $Insert1 = "INSERT INTO travel_details(departuretime,destination,bustype,departurecity,departuredate,cid)
                      values('$departuretime', '$destination', '$bustype', '$departurecity', '$departuredate',$cid)";

            $Insert2="INSERT INTO seats(seatno,num_of_selectedseats,cid) 
                      values ('$b','$num_of_selectedseats',$cid)";

            $Insert3="INSERT INTO ticket(pmode,totalamount,cid) values ('$pmode', '$totalamount', $cid)" ;         
            echo $Insert1;
            echo $Insert2;
            echo $Insert3;
            if(mysqli_query($conn, $Insert1))
            {
                echo"New details entered successfully";
                header("location:slip.php");
            }
            else{
                echo mysqli_error($conn);

            }
            mysqli_query($conn, $Insert2);
            mysqli_query($conn, $Insert3);
        }
        
?>