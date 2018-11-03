<!DOCTYPE html>
<html>
<head><title>Facilities</title></head>
<body>
<table border="1"align="center" width="60%" >
	
			<tr background="hotel.jpg"><th colspan="3" align="right" width="60%">
			<label style="font-family:Algerian" ><center><h1>Blue Bird<h1><center></label>
			</tr>
			<tr background="white.jpg">
				<td align="center"> 
				     <a href="welcome.php">Home</a> <label>||</label>
				     <a href="promotional.php">Promotional Offers</a> <label>||</label>
					 <a href="login.php">Log In</a></li> <label>||</label>
					 
				</td>
				 
			</tr>
				
			<tr background="white.jpg">
				<td align="center">
					<br><br>
					<b>Name</b> 
					<input type="text" name="name" value=""/><br/><br/>
					<b>Email</b>
					<input type="text" name="email" value="" /><br/><br/>
					<br/><br/>
					<b>Room Type</b>
					<select name="roomtype">
					<option value="single bed room">single bed room</option>
					<option value="double bed room">double bed room</option>
					<option value="family package">family package</option>
					<option value="couple package">couple package</option>
					</select><br/><br/>
					<b>Number of Person</b>
						<select name="person">
						<option value="1 Person">1 Person</option>
						<option value="2 Person">2 Person</option>
						<option value="3 Person">3 Person</option>
						<option value="4 Person">4 Person</option>
						</select><br/><br/>
						
					
					
					Arrival Date
					<input type="text" name="arrivaldate"/><br/><br/>
					Departure Date
					<input type="text" name="departuredate"/><br/><br/>
					BookingStatus: Pending
					<input Type="Hidden" name="bookingstatus" value="pending" /><br/><br/>
					Total Amount <input type="text" name="totalamount"><br/><br/>
					
					
					
					<a  href="http://localhost/nusrat/rentingDetails.php"><input align="left" name="book" type="button" value="Book"/>
						
		            <a  href="http://localhost/nusrat/customerPage.php"><input  name="cancle" type="button" value="Cancle"/>

						
			
						
				</td>
			</tr>
			
			<tr>
			     <th background="hotel.jpg"><h3>www.bluebird.com</h3>
		    </tr>
	</table>
</body>

</html>

