<?php include 'navbar.php';
?>



 <?php 
include 'dbconnection.php';

//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 


if (!get_magic_quotes_gpc()) {


	
	
	
}

// now we insert it into the database

$insert = "INSERT INTO space (tables, floor, room, complete, costoftables, costoffloor, costofroom, costofcomplete, minpeoptables, maxpeoptables, minpeopfloor, maxpeopfloor, minpeoproom, maxpeoproom, minpeopcomplete, maxpeopcomplete) VALUES ('".$_POST['tables']."', '".$_POST['floor']."', '".$_POST['room']."', '".$_POST['complete']."', '".$_POST['costoftables']."', '".$_POST['costoffloor']."', '".$_POST['costofroom']."', '".$_POST['costofcomplete']."', '".$_POST['minpeoptables']."', '".$_POST['maxpeoptables']."', '".$_POST['minpeopfloor']."', '".$_POST['maxpeopfloor']."', '".$_POST['minpeoproom']."', '".$_POST['maxpeoproom']."', '".$_POST['minpeopcomplete']."', '".$_POST['maxpeopcomplete']."')";
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

