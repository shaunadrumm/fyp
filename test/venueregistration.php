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
			<tr><td>Type of venue:</td><td>
				<input type="password" class="form-control" name="pass" placeholder="" maxlength="50">
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

		<div class="form-group">
			<tr><td>Start Hours:</td><td>
				<input type="time" class="form-control" name="starthour" placeholder="" >
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Closing Hour:</td><td>
				<input type="time" class="form-control" name="starthour" placeholder="" >
			</td></tr>
		</div>
		
		<tr><td>Internet:</td><td>
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
		
			
		<tr><td>Parking:</td><td>
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
		
		<tr><td>Children:</td><td>
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
			<tr><td>Food:</td><td>
				<input type="text" class="form-control" name="food" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<tr><td>Transport:</td><td>
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
		
		<tr><td>Smoking Area:</td><td>
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
		
		<tr><td>Entertainment:</td><td>
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
		
		
		
		<tr><td>Music:</td><td></br>
		<div class="btn-group" role="group" aria-label="...">
		</td></tr>
			<button type="button" class="btn btn-default">Yes</button>
			<button type="button" class="btn btn-default">No</button>

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
		
		</br>
		<div class="form-group">
			<input type="text" class="form-control" name="musictype" placeholder="If other, please specify" maxlength="200">
		</div>
		</div>



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
  
</form>






