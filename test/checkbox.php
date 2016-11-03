<?php include 'navbar.php';
?>



 <?php 
include 'dbconnection.php';

//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 

//This makes sure they did not leave any fields blank - mandatory fields
//if (!$_POST['venuename'] | !$_POST['website'] | !$_POST['address1'] | !$_POST['address2'] | !$_POST['address3'] | !$_POST['city'] | !$_POST['county'] | !$_POST['phonenumber'] | !$_POST['type'] | !$_POST['othertype'] ) {
	//die('You did not complete all of the required fields');
//}

// checks if the username is in use
//if (!get_magic_quotes_gpc()) {
//	$_POST['venuename'] = addslashes($_POST['venuename']);
//}

//$usercheck = $_POST['venuename'];
//$check = mysql_query("SELECT venuename FROM venue WHERE venuename = '$usercheck'") 
//or die(mysql_error());
//$check2 = mysql_num_rows($check);

//if the name exists it gives an error
//if ($check2 != 0) {
 //	die('Sorry,'.$_POST['venuename'].' venue is already registered in our system.');
//}

 // this makes sure both passwords entered match
//if ($_POST['pass'] != $_POST['pass2']) {
	//die('Your passwords did not match. ');
//}

// here we encrypt the password and add slashes if needed
//$_POST['pass'] = md5($_POST['pass']); 

if (!get_magic_quotes_gpc()) {

	$_POST['tables'] = addslashes($_POST['tables']);
	$_POST['floor'] = addslashes($_POST['floor']);
	$_POST['room'] = addslashes($_POST['room']);
	$_POST['complete'] = addslashes($_POST['complete']);
	
	
}

// now we insert it into the database

$insert = "INSERT INTO space (tables, floor, room, complete) VALUES ('".$_POST['tables']."', '".$_POST['floor']."', '".$_POST['room']."', '".$_POST['complete']."')";
$add_member = mysql_query($insert);

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
			
			<div>
			<tr><th colspan=2><input type="submit" name="submit" 
			value="Submit Registration"></th></tr> </table>
		</div>
		
		</br>
		</br>
		</br>



 <?php
 }
 ?> 
 <?php include 'footer.php';
?>

