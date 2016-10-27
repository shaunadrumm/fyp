<?php include 'navbar.php';
?>

<?php include 'dbconnection.php';

?>

 
 
</br>

  
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	

	
		<div class="form-group">
			<tr><td>Venue Name:</td><td>
				<input type="text" class="form-control" name="username" placeholder="" maxlength="100">
			</td></tr>
		</div>
			
		<div class="form-group">
			<tr><td>Venue website if applicable:</td><td>
				<input type="url" class="form-control" name="pass2" placeholder="" maxlength="60">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Venue Address Line 1:</td><td>
				<input type="text" class="form-control" name="address1" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Venue Address Line 2:</td><td>
				<input type="text" class="form-control" name="address2" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Venue Address Line 3:</td><td>
				<input type="text" class="form-control" name="address3" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Venue Address City/Town:</td><td>
				<input type="text" class="form-control" name="addresscity" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Venue Address County:</td><td>
				<input type="text" class="form-control" name="addresscounty" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Direct Phone Number:</td><td>
				<input type="number" class="form-control" name="phone" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
			
		<tr><td>Please select your venue type:</td><td>
		<div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <div class="input-group-btn">
	  </td></tr>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Pub</a></li>
          <li><a href="#">Hotel</a></li>
          <li><a href="#">Restaurant</a></li>
		  <li><a href="#">Other</a></li>          
        </ul>
      </div><!-- /btn-group -->
      <input type="text" class="form-control" placeholder="If Other, please specify" maxlength="50">
    </div>
  </div>
  
  </div>
  </br>
  
  <tr><td>Please select which type of space you can allow customers to book:</td><td>
  	<div class="input-group" id="eventbuttons">
		<div class="input-group-btn" >
		</td></tr>
		  <button type="button" class="btn btn-default">Table</button>
		  <button type="button" class="btn btn-default">Reserved Area</button>
		  <button type="button" class="btn btn-default">Private Function Rooom</button>
		  <button type="button" class="btn btn-default">Full Venue</button>
		  
		  
		</div>
		
		</div>
		
		</br>
		<tr><td>Where applicable please enter the price for each space for one night:</td><td>
		<div class="input-group">
		</td></tr>
  <span class="input-group-addon" id="basic-addon1">Table:</span>
  <input type="number" class="form-control" placeholder="€" aria-describedby="basic-addon1">
</div>
	<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Reserved Area:</span>
  <input type="number" class="form-control" placeholder="€" aria-describedby="basic-addon1">
</div>
	<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Private Function Room:</span>
  <input type="number" class="form-control" placeholder="€" aria-describedby="basic-addon1">
</div>
	<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Full Venue</span>
  <input type="number" class="form-control" placeholder="€" aria-describedby="basic-addon1">
</div>
		</br>
		
				<tr><td>Where applicable please enter the minimum number of people and maximum number of people allowed for each space:</td><td>
		<div class="input-group">
		</td></tr>
  <span class="input-group-addon" id="basic-addon1">Table:</span>
  <input type="number" class="form-control" placeholder="Minimum Number" aria-describedby="basic-addon1">
  <input type="number" class="form-control" placeholder="Maximum Number" aria-describedby="basic-addon1">
</div>
	<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Reserved Area:</span>
  <input type="number" class="form-control" placeholder="Minimum Number" aria-describedby="basic-addon1">
  <input type="number" class="form-control" placeholder="Maximum Number" aria-describedby="basic-addon1">
</div>
	<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Private Function Room:</span>
  <input type="number" class="form-control" placeholder="Minimum Number" aria-describedby="basic-addon1">
  <input type="number" class="form-control" placeholder="Maximum Number" aria-describedby="basic-addon1">
</div>
	<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Full Venue</span>
  <input type="number" class="form-control" placeholder="Minimum Number" aria-describedby="basic-addon1">
  <input type="number" class="form-control" placeholder="Maximum Number" aria-describedby="basic-addon1">
</div>
		
		</br>
		<tr><td>Please select which type of events you cater to:</td><td>
		
		<div class="input-group" id="eventbuttons">
		<div class="input-group-btn" >
		</td></tr>
		  <button type="button" class="btn btn-default">Chistenings</button>
		  <button type="button" class="btn btn-default">18th Parties</button>
		  <button type="button" class="btn btn-default">21st Parties</button>
		  <button type="button" class="btn btn-default">Other Birthday Ages above 21</button>
		  <button type="button" class="btn btn-default">Kid's Parties</button>
		  <button type="button" class="btn btn-default">Hen/Stag Parties</button>
		  <button type="button" class="btn btn-default">Weddings</button>
		  <button type="button" class="btn btn-default">Funerals</button>
		  <button type="button" class="btn btn-default">Corporate</button>
		  <button type="button" class="btn btn-default">Sports</button>
		  <button type="button" class="btn btn-default">Other</button>
		  
		</div>
		
		</div>
	</br>
	<div class="form-group">
			<tr><td>If Other, Please Specify:</td><td>
				<input type="text" class="form-control" name="eventtype" placeholder="" >
			</td></tr>
		</div>




		<div class="form-group">
			<tr><td>Start Hour if applicable:</td><td>
				<input type="time" class="form-control" name="starthour" placeholder="" >
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Closing Hour if applicable:</td><td>
				<input type="time" class="form-control" name="starthour" placeholder="" >
			</td></tr>
		</div>
		
		<tr><td>Do you provide internet?  If yes, please include details:</td><td>
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
				<span class="input-group-addon">
				<input type="checkbox" aria-label="">
				</span>
				<input type="text" class="form-control" aria-label="">
				</div>
				</td></tr>
			</div>
		</div>
		
		</br>
		
			
		<tr><td>Do you provide parking?  If yes, please include details:</td><td>
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
				<span class="input-group-addon">
				<input type="checkbox" aria-label="">
				</span>
				<input type="text" class="form-control" aria-label="">
				</div>
				</td></tr>
			</div>
		</div>
		
		</br>
		
		<tr><td>Do you allow children?  If yes, please include details:</td><td>
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
				<span class="input-group-addon">
				<input type="checkbox" aria-label="">
				</span>
				<input type="text" class="form-control" aria-label="">
				</div>
				</td></tr>
			</div>
		</div>
		
		</br>

			<tr><td>Do you include food:</td><td></br>
		<div class="btn-group" role="group" aria-label="MUSIC" id="typemusic">
		</td></tr>
			<button type="button" class="btn btn-default">Yes</button>
			<button type="button" class="btn btn-default">No</button>
		</div>
		<div class="btn-group" role="group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Which type?
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Hot Platter</a></li>
				<li><a href="#">Cold Platter</a></li>
				<li><a href="#">Full Meal</a></li>
				<li><a href="#">Other</a></li>
			</ul>
		</div>
		
		
		<div class="form-group" id="otherfood">
				<input type="text" class="form-control" name="foodother" placeholder="If Other, Please Specify" maxlength="100" >
		</div>
		
		</br>
		
		<tr><td>Do you offer transport to and from the venue?  If yes, please include details:</td><td>
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
				<span class="input-group-addon">
				<input type="checkbox" aria-label="">
				</span>
				<input type="text" class="form-control" aria-label="">
				</div>
				</td></tr>
			</div>
		</div>
		
		</br>
		
		<tr><td>Do you have a smoking area?  If yes, please include details::</td><td>
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
				<span class="input-group-addon">
				<input type="checkbox" aria-label="">
				</span>
				<input type="text" class="form-control" aria-label="">
				</div>
				</td></tr>
			</div>
		</div>
		
		</br>
			
		<div class="form-group">
			<tr><td>Photo 1:</td><td>
				<input type="number" class="form-control" name="" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Photo 2:</td><td>
				<input type="number" class="form-control" name="" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Photo 3:</td><td>
				<input type="number" class="form-control" name="" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Photo 4:</td><td>
				<input type="number" class="form-control" name="" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Photo 5:</td><td>
				<input type="number" class="form-control" name="" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Photo 6:</td><td>
				<input type="number" class="form-control" name="" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
	
		
		</br>
		
		
		
		<tr><td>Music:</td><td></br>
		<div class="btn-group" role="group" aria-label="MUSIC" id="typemusic">
		</td></tr>
			<button type="button" class="btn btn-default">Yes</button>
			<button type="button" class="btn btn-default">No</button>
		</div>
		<div class="btn-group" role="group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Which type?
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">DJ</a></li>
				<li><a href="#">Band</a></li>
				<li><a href="#">Karaoke</a></li>
				<li><a href="#">Other</a></li>
			</ul>
		</div>
		
		
		<div class="form-group" id="othermusic">
				<input type="text" class="form-control" name="musicother" placeholder="If Other, Please Specify" maxlength="100" >
		</div>
		
		
		</br>
		
		</br>
		
			<tr><td>Do you offer any other form of Entertainment?  If yes, please provide details:</td><td>
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
				<span class="input-group-addon">
				<input type="checkbox" aria-label="">
				</span>
				<input type="text" class="form-control" aria-label="">
				</div>
				</td></tr>
			</div>
		</div>
		</br>
		
		
		<div class="form-group">
			<tr><td>What are your payment policies?:</td><td>
				<input type="text" class="form-control" name="paymentpolicies" placeholder="" maxlength="300">
			</td></tr>
		</div>

		<div class="form-group">
			<tr><td>What are your cancellation policies?:</td><td>
				<input type="text" class="form-control" name="cancellationpolicies" placeholder="" maxlength="300">
			</td></tr>
		</div>

		<div class="form-group">
			<tr><td>Do you have any additional fees for services?:</td><td>
				<input type="text" class="form-control" name="paymentpolicies" placeholder="" maxlength="300">
			</td></tr>
		</div>
		
			<div class="form-group">
			<tr><td>Any other additional information to provide:</td><td>
				<input type="text" class="form-control" name="paymentpolicies" placeholder="" maxlength="300">
			</td></tr>
		</div>
		
		


		
		</br>
		</br>
		</br>
		
		
		
		<div>
			<tr><th colspan=2><input type="submit" name="submit" 
			value="Submit Registration"></th></tr> </table>
		</div>
		
		</br>
		</br>
		</br>





