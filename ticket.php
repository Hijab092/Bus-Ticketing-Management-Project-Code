<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="ticketstyle.css" >
</head>
<body>
<form action="connect.php" method="POST">
<h1>TICKET BOOKING SYSTEM </h1>
<div class="box">

  
  <?php

$conn = mysqli_connect("localhost", "root", "sns@123", "busproject",3306);
#$records = mysqli_query($conn,"select cid from passenger_info order by cid DESC imit 1"); // fetch data from database
#$records="SELECT cid FROM passenger_info ORDER BY cid DESC LIMIT 1";

#if ($result=mysqli_query($conn,$records))
 # {
  #while ($row=mysqli_fetch_row($result))
  #{
  
  #printf("Customer ID   ");
  #printf($row[0]);
  #}
  #mysqli_free_result($result);

#}
?>

<h2> ENTER THE DETAILS BELOW </h2>
 
	<p><b>Select Bus Type:  </b></p>

<label for="type" name="bustype">EXECUTIVE</label>
      <input type ="radio" name="bustype" id="type" value="Executive" >
<label for="type">BUSINESS</label>
      <input type ="radio" name="bustype" id="type" value="Business" ><br><br>
  <label for="fname" ><b>Departure: </b> </label>
  <select name="Departurecity">
  <option>       </option>
  <option value="Islamabad">Islamabad</option>
  <option value="Lahore"> Lahore</option>
  <option value="Peshawar">Peshawar</option>
  <option value="Faislabad">Faislabad</option>
  <option value="Karachi">Karachi</option>
  </select>
 <br><br>
   <label for="fname" ><b>Destination: </b></label>
  <select name="Destination">
  <option>       </option>
  <option value="Islamabad">Islamabad</option>
  <option value="Lahore">Lahore</option>
  <option value="Peshawar">Peshawar</option>
  <option value="Faislabad">Faislabad</option>
  <option value="Karachi">Karachi</option>
  </select>
  <br><br>
<label for="xyz" >Enter the Departure Date: </label>
  <input type="date" id="xyz" name="Departuredate" > <input type="submit"><br><br>
  <label for="lname">Select the departure time:  </label>
  <select name="Departuretime">
  <option>       </option>
  <option value="08:00">08:00</option>
  <option value="10:00">10:00</option>
  <option value="12:00">12:00</option>
  <option value="14:00">14:00</option>
  <option value="16:00">16:00</option>
  <option value="18:00">18:00</option>
  </select> <br>
<br>
 <label for="sname">Select the number of seats:  </label>
  <select name="num_of_selectedseats">
  <option>       </option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  </select> <br>

<h3>Please select seat/s</h3>
  <div class="seat">
  
          <input type="checkbox" name="seatno[]" id="1" value="1"  
          <?php  if(isset($_POST['seatno']) && in_array("1",$_POST['seatno'])) echo "checked='checked'";  ?>/>
          <label for="1A">1</label>
       

          <input type="checkbox" name="seatno[]"  id="2" value="2" />
          <label for="1B">2</label>
       
        
          <input type="checkbox" name="seatno[]"  id="3" value="3" />
          <label for="1C">3</label>
      
        
          <input type="checkbox" name="seatno[]"  id="4"  value="4"/>
          <label for="1D">4</label>
     

          <input type="checkbox" name="seatno[]"  id="5" value="5" />
          <label for="1C">5</label>
       

          <input type="checkbox" name="seatno[]" id="6" value="6" />
          <label for="1C">6</label>
       

          <input type="checkbox" name="seatno[]"  id="7" value="7"/>
          <label for="1C">7</label>
       

          <input type="checkbox" name="seatno[]"  id="8" value="8" />
          <label for="1C">8</label>
       

          <input type="checkbox" name="seatno[]" id="9" value="9"/>
          <label for="1C">9</label>
       

          <input type="checkbox" name="seatno[]" id="10" value="10"/>
          <label for="1C">10</label>
        

          <input type="checkbox" name="seatno[]" id="11" value="11"/>
          <label for="1C">11</label>
       

          <input type="checkbox" name="seatno[]" id="12" value="12" />
          <label for="1C">12</label>
       

          <input type="checkbox" name="seatno[]" id="13" value="13"/>
          <label for="1C">13</label>
        

          <input type="checkbox" name="seatno[]" id="14" value="14"/>
          <label for="1C">14</label>
       

          <input type="checkbox" name="seatno[]" id="15" value="15"/>
          <label for="1C">15</label>
        

          <input type="checkbox" name="seatno[]" id="16" value="16"/>
          <label for="1C">16</label>
       

          <input type="checkbox" name="seatno[]" id="17" value="17"/>
          <label for="1C">17</label>
        

          <input type="checkbox" name="seatno[]" id="18" value="18"/>
          <label for="1C">18</label>
        

          <input type="checkbox" name="seatno[]"  id="19" value="19"/>
          <label for="1C">19</label>
       

          <input type="checkbox" name="seatno[]" id="20" value="20"/>
          <label for="1C">20</label>
        

</div>

  <p><b>NOTE:</b> Payment would be according to per kilometer policy i.e.,
<b> Rs. 40/- per 10 kilometers</b> for Executive and <b>Rs.50/- per 10 kilometers </b> for Business Class</p><p>The total payment will be displayed in ticket slip.</p>
 
<h2> SELECT PAYMENT METHOD </h2>
<p>Select the  <strong> payment </strong> method :</p>

      <label for="type" name="mode">Jazz Cash</label>
      <input type ="radio" name="mode" id="type" value="Jazz cash" ><br>
      <label for="type" name="mode">Easypaisa</label>
      <input type ="radio" name="mode" id="type" value="Easypaisa" ><br>
      <label for="type" name="mode">Credit/Debit card</label>
      <input type ="radio" name="mode" id="type" value="credit/debit card" ><br>

<h3> Click below to view and download the ticket slip for your travel !!! <h3>
<input type="submit" name="save" value="GENERATE THE SLIP" class="slip">


</div>

<h2> THANK YOU FOR BOOKING THE TICKET  <h2>
<h2> FOR ANY COMPLAINTS/ SUGGESTIONS KINDLY VISIT OUR CUSTOMER CARE SERVICE !!! <h2><br>
<a href="care.php"> <b>CUSTOMER CARE SERVICE</b></a></button>
</form>
</body>
</html>