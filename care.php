<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="index.css" >
</head>
<body>
    <section class="contact">
        <div class="content">
            <h2>Customer Care Service Form</h2>
            <p>"Excellent customer service is the number one job in any company! It is the personality of the company and the reason customers come back. Without customers there is no company!" - Connie Edler.</p>
     <section>
     <form action="join.php" method="POST">
         
             <p>Let us know how we can improve our services</p>
       
       
        
         <label><b>How was your experience with our service?</b></label><br>
         
         <input type="radio" name="experience" value="best"><label>Best</label>
         <input type="radio" name="experience" value="good"><label>Good</label>
         <input type="radio" name="experience" value="satisfactory"><label>Satisfactory</label>
         <input type="radio" name="experience" value="notgood"><label>Not Good</label><br><br>
         
        
         <label><b>Are you satisfied with our online service?</b></label>
         
         <input type="radio" name="satisfaction" value="yes"><label>Yes</label>
         <input type="radio" name="satisfaction" value="no"><label>No</label> <br><br>
        
         <label><b>How did you find the atmosphere of the bus?</b></label><br>
        
         <input type="radio" name="atmosphere" value="best"><label>Best</label>
         <input type="radio" name="atmosphere" value="good"><label>Good</label>
         <input type="radio" name="atmosphere" value="average"><label>Average</label>
         <input type="radio" name="atmosphere" value="poor"><label>Poor</label><br><br>
        
         
         <label><b>How did you find the driving skills of the driver?</b></label><br>
         
         <input type="radio" name="drivingskills" value="best"><label>Best</label>
         <input type="radio" name="drivingskills" value="good"><label>Good</label>
         <input type="radio" name="drivingskills" value="average"><label>Average</label>
         <input type="radio" name="drivingskills" value="poor"><label>Poor</label><br><br>
         
        
         <label><b>How did you find about us?</b></label><br>
        
         <input type="radio" name="howfind" value="friend"><label>Friend</label>
         <input type="radio" name="howfind"value="family"><label>Family</label>
         <input type="radio" name="howfind" value="socialmedia"><label>Social Media</label>
         <input type="radio" name="howfind" value="website"><label>From Our Website</label>
         <input type="radio" name="howfind" value="others"><label>Others</label><br><br>
        

          <label><b>Will you use our service again?</b></label>
        
          <input type="radio" name="useagain" value="yes"><label>Yes</label>
         <input type="radio" name="useagain" value="no"><label>No</label><br><br>

         <label><b>Any problem you faced during travel?</b></label><br>
          <textarea id="problem" name="problem" rows="5" cols="150"></textarea><br><br>
         
        
         <label><b>Any Suggestions:</b></label><br>
        <textarea id="suggestion" name="suggestion" rows="5" cols="150"></textarea>
         <br><br>

         <label><b>Have you lost any item?</b></label>
         <input type="radio" name="lostitem" value="yes"><label>Yes</label>
         <input type="radio" name="lostitem" value="no"><label>No</label><br>
         <p>(If yes, then contact us through our email/helpline)</p>
           
        <br><br>
        
        <button type="submit" name="submit" value="submit"><b>Submit</b></button>
       </div>
</form>

<div class = "contact">
        <h2>Contact Us</h2>
      
        <h3>Email</h3>
        <p>bus_service@gmail.com</p>
       
        <h3>UAN</h3>
        <p>111 345 345</p>
        </div>
        </form>
     
   </section>

</body>
</html>