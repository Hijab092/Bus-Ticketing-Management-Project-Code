<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="slip.css" >
</head>
<body>
<div class="box">
<h1><br>TICKET SLIP</h1>
<br>
<table border="2">
  <tr>
    <td>PassengerName</td>
    <td>CNIC</td>
    <td>Deaparture city</td>
    <td>Destination</td>
    <td>Departure Time</td>
    <td>seatno</td>
    <td>Total payment</td>
    <td>TicketID</td>

  </tr>

<?php

$conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);

$records = mysqli_query($conn,"select uname,CNIC,departurecity,departuretime,destination,seatno, totalamount,cid
from passenger_info join travel_details using(cid) join seats using(cid) join ticket using(cid)
order by cid DESC limit 1");
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['uname']; ?></td>
    <td><?php echo $data['CNIC']; ?></td>
    <td><?php echo $data['departurecity']; ?></td>
    <td><?php echo $data['destination']; ?></td>
    <td><?php echo $data['departuretime']; ?></td>
    <td><?php echo $data['seatno']; ?></td>
    <td><?php echo $data['totalamount']; ?></td>
    <td><?php echo $data['cid']; ?></td>
  </tr>	
<?php
}
?>
</table>
<br><br>
<button type="submit" class="DOWNLOAD">DOWNLOAD THE TICKET SLIP</button>
<hr>
<h2>THANK YOU FOR USING OUR SERVICE</h2>
<h2> FOR ANY COMPLAINTS/ SUGGESTIONS KINDLY VISIT OUR CUSTOMER CARE SERVICE !!! <h2><br>
<a href="care.php"> <b>CUSTOMER CARE SERVICE</b></a></button>
<br>
</div>
</body>
</html>