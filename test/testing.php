<?php include 'navbar.php';
?>

<?php 
include 'dbconnection.php';
?>
<?php
//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 

if (!get_magic_quotes_gpc()) {
	$_POST['entertaindetails'] = addslashes($_POST['entertaindetails']);
	$_POST['paymentpolicy'] = addslashes($_POST['paymentpolicy']);
	$_POST['cancellationpolicy'] = addslashes($_POST['cancellationpolicy']);
	$_POST['addfee'] = addslashes($_POST['addfee']);
	$_POST['addinfo'] = addslashes($_POST['addinfo']);

$insert = "INSERT INTO venue (entertain, entertaindetails, paymentpolicy, cancellationpolicy, addfee, addinfo) VALUES ('".$_POST['entertain']."', '".$_POST['entertaindetails']."', '".$_POST['paymentpolicy']."', '".$_POST['cancellationpolicy']."', '".$_POST['addfee']."', '".$_POST['addinfo']."')";
$add_member = mysql_query($insert);
?>
	
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



 
 <?php include 'footer.php';
?>
