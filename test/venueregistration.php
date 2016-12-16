<?php include 'navbar2.php';
?>

 <?php 
include 'dbconnection.php';

//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 


//This makes sure they did not leave any fields blank - mandatory fields
if (!$_POST['venuename'] | !$_POST['website'] | !$_POST['address1'] | !$_POST['address2'] | !$_POST['address3'] | !$_POST['city'] | !$_POST['county'] | !$_POST['phonenumber']) {
	die('You did not complete all of the required fields');
}


// checks if the username is in use
if (!get_magic_quotes_gpc()) {
	$_POST['venuename'] = addslashes($_POST['venuename']);
}


$usercheck = $_POST['venuename'];
$check = mysql_query("SELECT venuename FROM venue WHERE venuename = '$usercheck'") 
or die(mysql_error());
$check2 = mysql_num_rows($check);


//if the name exists it gives an error
if ($check2 != 0) {
 	die('Sorry,'.$_POST['venuename'].' venue is already registered in our system.');
}


if (!get_magic_quotes_gpc()) {
	$_POST['venuename'] = addslashes($_POST['venuename']);
	$_POST['website'] = addslashes($_POST['website']);
	$_POST['address1'] = addslashes($_POST['address1']);
	$_POST['address2'] = addslashes($_POST['address2']);
	$_POST['address3'] = addslashes($_POST['address3']);
	$_POST['city'] = addslashes($_POST['city']);
	$_POST['county'] = addslashes($_POST['county']);
	$_POST['phonenumber'] = addslashes($_POST['phonenumber']);
	$_POST['othereventtype'] = addslashes($_POST['othereventtype']);
	$_POST['internetdetails'] = addslashes($_POST['internetdetails']);
	$_POST['parkingdetails'] = addslashes($_POST['parkingdetails']);
	$_POST['childrendetails'] = addslashes($_POST['childrendetails']);
	$_POST['fotherdetails'] = addslashes($_POST['fotherdetails']);
	$_POST['transportdetails'] = addslashes($_POST['transportdetails']);
	$_POST['smokingdetails'] = addslashes($_POST['smokingdetails']);
	$_POST['motherdetails'] = addslashes($_POST['motherdetails']);


	
}


?>

<?php

$dbConnection = mysqli_connect('mysql2.mylogin.ie', 'planmyevente', '88Shauna88', 'RG293604_planmyevente');

$query1 = "INSERT INTO venue (venuename, website, address1, address2, address3, city, county, phonenumber, type, othertype, christenings, eighteenparties, twentyoneparties, otheragesparties, kidsparties, henstagparties, weddings, funerals, corporate, sports, otherparties, othereventtype, starthour, closehour, internet, internetdetails, parking, parkingdetails, children, childrendetails, foodyes, foodno, hplatter, cplatter, fullmeal, fother, fotherdetails, costhplatter, costcplatter, costfother, transport, transportdetails, smoking, smokingdetails, musicyes, musicno, mdj, mband, mkaraoke, mother, motherdetails, entertain, entertaindetails, paymentpolicy, cancellationpolicy, addfee, addinfo, agreeyes, agreeno) VALUES ('".$_POST['venuename']."', '".$_POST['website']."', '".$_POST['address1']."', '".$_POST['address2']."', '".$_POST['address3']."', '".$_POST['city']."', '".$_POST['county']."', '".$_POST['phonenumber']."', '".$_POST['type']."', '".$_POST['othertype']."', '".$_POST['christenings']."', '".$_POST['eighteenparties']."', '".$_POST['twentyoneparties']."', '".$_POST['otheragesparties']."', '".$_POST['kidsparties']."', '".$_POST['henstagparties']."', '".$_POST['weddings']."', '".$_POST['funerals']."', '".$_POST['corporate']."', '".$_POST['sports']."', '".$_POST['otherparties']."', '".$_POST['othereventtype']."', '".$_POST['starthour']."', '".$_POST['closehour']."', '".$_POST['internet']."', '".$_POST['internetdetails']."', '".$_POST['parking']."', '".$_POST['parkingdetails']."', '".$_POST['children']."', '".$_POST['childrendetails']."', '".$_POST['foodyes']."', '".$_POST['foodno']."', '".$_POST['hplatter']."', '".$_POST['cplatter']."', '".$_POST['fullmeal']."', '".$_POST['fother']."', '".$_POST['fotherdetails']."', '".$_POST['costhplatter']."', '".$_POST['costcplatter']."', '".$_POST['costfother']."', '".$_POST['transport']."', '".$_POST['transportdetails']."', '".$_POST['smoking']."', '".$_POST['smokingdetails']."', '".$_POST['musicyes']."', '".$_POST['musicno']."', '".$_POST['mdj']."', '".$_POST['mband']."', '".$_POST['mkaraoke']."', '".$_POST['mother']."', '".$_POST['motherdetails']."', '".$_POST['entertain']."', '".$_POST['entertaindetails']."', '".$_POST['paymentpolicy']."', '".$_POST['cancellationpolicy']."', '".$_POST['addfee']."', '".$_POST['addinfo']."', '".$_POST['agreeyes']."', '".$_POST['agreeno']."')";
$query2 = "INSERT INTO space (tables, floor, room, complete, costoftables, costoffloor, costofroom, costofcomplete, minpeoptables, maxpeoptables, minpeopfloor, maxpeopfloor, minpeoproom, maxpeoproom, minpeopcomplete, maxpeopcomplete) VALUES ('".$_POST['tables']."', '".$_POST['floor']."', '".$_POST['room']."', '".$_POST['complete']."', '".$_POST['costoftables']."', '".$_POST['costoffloor']."', '".$_POST['costofroom']."', '".$_POST['costofcomplete']."', '".$_POST['minpeoptables']."', '".$_POST['maxpeoptables']."', '".$_POST['minpeopfloor']."', '".$_POST['maxpeopfloor']."', '".$_POST['minpeoproom']."', '".$_POST['maxpeoproom']."', '".$_POST['minpeopcomplete']."', '".$_POST['maxpeopcomplete']."')";


$result = mysqli_query($dbConnection, $query1);
$result = mysqli_query($dbConnection, $query2);


    mysqli_commit($dbConnection);

    echo "All queries were executed successfully";


mysqli_close($dbConnection);

?>

 
		

 <h1>Registered</h1>

 <p>Thank you, you have registered - you may now <a href="login.php">login</a>.</p>

 <?php 
 }

 else 
 {	
 ?>
 
</br>

  
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	

	
		<div class="form-group">
			<tr><td>Venue Name:</td><td>
				<input type="text" class="form-control" name="venuename" placeholder="" maxlength="100">
			</td></tr>
		</div>
			
		<div class="form-group">
			<tr><td>Venue website if applicable:</td><td>
				<input type="text" class="form-control" name="website" placeholder="" maxlength="60">
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
				<input type="text" class="form-control" name="city" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Venue Address County:</td><td>
				<input type="text" class="form-control" name="county" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Direct Phone Number:</td><td>
				<input type="number" class="form-control" name="phonenumber" placeholder="" maxlength="100">
			</td></tr>
		</div>
		
		<tr><td>Please select your venue type:</td><td>
		<div class="form-group">
      
      <select class="form-control" id="sel1" name="type">
        <option>Other</option>
		<option>Pub</option>
        <option>Hotel</option>
        <option>Restaurant</option>
        
      </select>
	  
	  <input type="text" class="form-control" name="othertype" placeholder="If Other, please specify" maxlength="50">
	  </div>
	  
		
		
  </br>
  
  <tr><td>Please select which type of space you can allow customers to book:</td><td></br>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="tables" value="Y"> Table
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="floor" value="Y"> Reserved Area
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="room" value="Y"> Private Function Room
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="complete" value="Y"> Full Venue
		</label>
  
		
		</br>
		</br>
			
					<tr><td>Where applicable please enter the price for each space for one night:</td><td>
			<div class="input-group">
			</td></tr>
			  <span class="input-group-addon" id="basic-addon1">Table:</span>
			  <input type="number" class="form-control" placeholder="€" name="costoftables" aria-describedby="basic-addon1">
			</div>
			
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Reserved Area:</span>
			  <input type="number" class="form-control" placeholder="€" name="costoffloor" aria-describedby="basic-addon1">
			</div>
			
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Private Function Room:</span>
			  <input type="number" class="form-control" placeholder="€" name="costofroom" aria-describedby="basic-addon1">
			</div>
			
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Full Venue</span>
			  <input type="number" class="form-control" placeholder="€" name="costofcomplete" aria-describedby="basic-addon1">
			</div>
			
			
		
			
		</br>
		
		
			<tr><td>Where applicable please enter the minimum number of people and maximum number of people allowed for each space:</td><td>
			<div class="input-group">
			</td></tr>
			  <span class="input-group-addon" id="basic-addon1">Table:</span>
			  <input type="number" class="form-control" placeholder="Minimum Number" name="minpeoptables" aria-describedby="basic-addon1">
			  <input type="number" class="form-control" placeholder="Maximum Number" name="maxpeoptables" aria-describedby="basic-addon1">
			</div>
			
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Reserved Area:</span>
			  <input type="number" class="form-control" placeholder="Minimum Number" name="minpeopfloor" aria-describedby="basic-addon1">
			  <input type="number" class="form-control" placeholder="Maximum Number" name="maxpeopfloor" aria-describedby="basic-addon1">
			</div>
			
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Private Function Room:</span>
			  <input type="number" class="form-control" placeholder="Minimum Number" name="minpeoproom" aria-describedby="basic-addon1">
			  <input type="number" class="form-control" placeholder="Maximum Number" name="maxpeoproom" aria-describedby="basic-addon1">
			</div>
			
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Full Venue</span>
			  <input type="number" class="form-control" placeholder="Minimum Number" name="minpeopcomplete" aria-describedby="basic-addon1">
			  <input type="number" class="form-control" placeholder="Maximum Number" name="maxpeopcomplete" aria-describedby="basic-addon1">
			</div>
			
			

		</br>
		
		  <tr><td>Please select which type of events you cater to:</td><td></br>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="christenings" value="Y"> Chistenings
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="eighteenparties" value="Y"> 18th Parties
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="twentyoneparties" value="Y"> 21st Parties
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="otheragesparties" value="Y"> Other Birthday Ages above 21
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="kidsparties" value="Y"> Kid's Parties
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="henstagparties" value="Y"> Hen/Stag Parties
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox7" name="weddings" value="Y"> Weddings
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="funerals" value="Y"> Funerals
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox9" name="corporate" value="Y"> Corporate
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox10" name="sports" value="Y"> Sports
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox11" name="otherparties" value="Y"> Other
		</label>
	
			</br>
			<div class="form-group">
				<tr><td>If Other, Please Specify:</td><td>
					<input type="text" class="form-control" name="othereventtype" placeholder="" >
				</td></tr>
			</div>




			
		<div class="form-group">
			<tr><td>Start Hour if applicable:</td><td>
				<input type="time" class="form-control" name="starthour" placeholder="" >
			</td></tr>
		</div>
		
		
		
		<div class="form-group">
			<tr><td>Closing Hour if applicable:</td><td>
				<input type="time" class="form-control" name="closehour" placeholder="" >
			</td></tr>
		</div>
		
		
		
		<tr><td>Do you provide internet?  If yes, please include details:</td><td>
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
				<span class="input-group-addon">
				<input type="checkbox" name="internet" value="Y">
				</span>
				<input type="text" class="form-control" name="internetdetails">
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
				<input type="checkbox" name="parking" value="Y">
				</span>
				<input type="text" class="form-control" name="parkingdetails" >
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
				<input type="checkbox" name="children" value="Y">
				</span>
				<input type="text" class="form-control" name="childrendetails">
				</div>
				</td></tr>
			</div>
		</div>
		
		</br>

			<tr><td>Do you include food:</td><td></br>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox12" name="foodyes" value="Y"> Yes
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox13" name="foodno" value="Y"> No
		</label>
		</br>
		
		<tr><td>Which Type:</td><td></br>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox14" name="hplatter" value="Y"> Hot Platter
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox15" name="cplatter" value="Y"> Cold Platter
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox16" name="fullmeal" value="Y"> Full Meal
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox17" name="fother" value="Y"> Other
		</label>
		
	</br>
			<div class="form-group">
				<tr><td>If Other, Please Specify:</td><td>
					<input type="text" class="form-control" name="fotherdetails">
				</td></tr>
			</div>
			
			</br>
					<tr><td>Where applicable please enter the price for each food type for one quantity:</td><td>
			<div class="input-group">
			</td></tr>
			  <span class="input-group-addon" id="basic-addon1">Hot Platter:</span>
			  <input type="number" class="form-control" placeholder="€" name="costhplatter" aria-describedby="basic-addon1">
			</div>
			
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Cold Platter:</span>
			  <input type="number" class="form-control" placeholder="€" name="costcplatter" aria-describedby="basic-addon1">
			</div>
			
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Other</span>
			  <input type="number" class="form-control" placeholder="€" name="costfother" aria-describedby="basic-addon1">
			</div>
		
		</br>
		
		<tr><td>Do you offer transport to and from the venue?  If yes, please include details:</td><td>
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
				<span class="input-group-addon">
				<input type="checkbox" name="transport" value="Y">
				</span>
				<input type="text" class="form-control" name="transportdetails">
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
				<input type="checkbox" name="smoking" value="Y">
				</span>
				<input type="text" class="form-control" name="smokingdetails">
				</div>
				</td></tr>
			</div>
		</div>
		
		</br>
		
		
    

		<!--	
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
		
	-->
		
			<tr><td>Do you provide music:</td><td></br>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox18" name="musicyes" value="Y"> Yes
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox19" name="musicno" value="Y"> No
		</label>
		</br>
		
		<tr><td>Which Type:</td><td></br>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox20" name="mdj" value="Y"> DJ
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox21" name="mband" value="Y"> Band
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox22" name="mkaraoke" value="Y"> Karaoke
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox23" name="mother" value="Y"> Other
		</label>
		
	</br>
			<div class="form-group">
				<tr><td>If Other, Please Specify:</td><td>
					<input type="text" class="form-control" name="motherdetails">
				</td></tr>
			</div>
		
		
		</br>
		
			<tr><td>Do you offer any other form of Entertainment?  If yes, please include details:</td><td>
		<div class="row">
			<div class="col-lg-12">
				<div class="input-group">
				<span class="input-group-addon">
				<input type="checkbox" name="entertain" value="Y">
				</span>
				<input type="text" class="form-control" name="entertaindetails">
				</div>
				</td></tr>
			</div>
		</div>
		
		</br>
				
		<div class="form-group">
			<tr><td>What are your payment policies?:</td><td>
				<input type="text" class="form-control" name="paymentpolicy" placeholder="" maxlength="200">
			</td></tr>
		</div>

		<div class="form-group">
			<tr><td>What are your cancellation policies?:</td><td>
				<input type="text" class="form-control" name="cancellationpolicy" placeholder="" maxlength="200">
			</td></tr>
		</div>

		<div class="form-group">
			<tr><td>Do you have any additional fees for services?:</td><td>
				<input type="text" class="form-control" name="addfee" placeholder="" maxlength="200">
			</td></tr>
		</div>
		
			<div class="form-group">
			<tr><td>Any other additional information to provide:</td><td>
				<input type="text" class="form-control" name="addinfo" placeholder="" maxlength="200">
			</td></tr>
		</div>
		
			<tr><td>Do you confirm the agreement between your venue and planmyevent.eu:</td><td></br>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox24" name="agreeyes" value="Y"> Yes
		</label>
		<label class="form-check-inline">
		  <input class="form-check-input" type="checkbox" id="inlineCheckbox25" name="agreeno" value="Y"> No
		</label>
		</br>

		
		</br>
		</br>
		</br>
		
		
		
		<div>
			<input type="submit" name="submit" 
			value="Submit Registration">
		</div>
		</form>
		</br>
		</br>
		</br>



 <?php
 }
 ?> 
 <?php include 'footer.php';
?>

