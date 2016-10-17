<?php include 'navbar.php';
?>

<?php 
include 'dbconnection.php';

//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 

//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
	die('You did not complete all of the required fields');
}

// checks if the username is in use
if (!get_magic_quotes_gpc()) {
	$_POST['username'] = addslashes($_POST['username']);
}

$usercheck = $_POST['username'];
$check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'") 
or die(mysql_error());
$check2 = mysql_num_rows($check);

//if the name exists it gives an error
if ($check2 != 0) {
 	die('Sorry, the username '.$_POST['username'].' is already in use.');
}

// this makes sure both passwords entered match
if ($_POST['pass'] != $_POST['pass2']) {
	die('Your passwords did not match. ');
}

// here we encrypt the password and add slashes if needed
$_POST['pass'] = md5($_POST['pass']);

if (!get_magic_quotes_gpc()) {
	$_POST['pass'] = addslashes($_POST['pass']);
	$_POST['username'] = addslashes($_POST['username']);
	$_POST['email'] = addslashes($_POST['email']);
	$_POST['address1'] = addslashes($_POST['address1']);
	
}

// now we insert it into the database
$insert = "INSERT INTO users (username, password,email,address1,address2) VALUES ('".$_POST['username']."', '".$_POST['pass']."', '".$_POST['email']."', '".$_POST['address1']."', '".$_POST['address2']."')";
$add_member = mysql_query($insert);
?>
 
		

 <h1>Registered</h1>

 <p>Thank you, you have registered - you may now <a href="login.php">login</a>.</p>

 <?php 
 }

 else 
 {	
 ?>
 
<br/>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	

	
		<div class="form-group">
			<tr><td>Username:</td><td>
				<input type="text" class="form-control" name="username" placeholder="Enter your chosen username" maxlength="60">
			</td></tr>
		</div>
	  
		<div class="form-group">
			<tr><td>Password:</td><td>
				<input type="password" class="form-control" name="pass" placeholder="Enter your chosen password" maxlength="10">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Confirm Password:</td><td>
				<input type="password" class="form-control" name="pass2" placeholder="Confirm your chosen password" maxlength="10">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Email:</td><td>
				<input type="email" class="form-control" name="email" placeholder="Enter your email" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Address Line 1:</td><td>
				<input type="text" class="form-control" name="address1" placeholder="Enter the first line of your address" maxlength="100">
			</td></tr>
		</div>
		
		<div class="form-group">
			<tr><td>Address Line 2:</td><td>
				<input type="text" class="form-control" name="address2" placeholder="Enter the second line of your address" maxlength="100">
			</td></tr>
		</div>
		
		<div>
			<tr><th colspan=2><input type="submit" name="submit" 
			value="Submit Registration"></th></tr> </table>
		</div>
  
</form>








 <?php
 }
 ?> 
 <?php include 'footer.php';
?>

