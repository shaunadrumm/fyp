<?php include 'navbar2.php';
?>
<?php
include 'dbconnection.php';



 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['ID_my_site'])){ 

 	$username = $_COOKIE['ID_my_site']; 
 	$pass = $_COOKIE['Key_my_site']; 
 	$check = mysql_query("SELECT * FROM owner WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )){ 

		//if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']){
			header("Location: login.php"); 
 		}
		//otherwise they are shown the admin area
		else{ 
 		}
	}
}

 else{ //if the cookie does not exist, they are taken to the login screen 
	header("Location: login.php"); 
 }
 
 $sql="SELECT * FROM owner WHERE username = '$username'";
 
 $records=mysql_query($sql);
 
 
 ?>
 <div class="container">
  <h2>Verified Customer Reviews</h2>
  <div class="panel-group">
  
	<div class="panel panel-success">
      <div class="panel-heading">Excellent Reviews</div>
      <div class="panel-body">Panel Content</div>
	</div>
	
	<div class="panel panel-warning">
      <div class="panel-heading">Average Reviews</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-danger">
      <div class="panel-heading">Bad Reviews</div>
      <div class="panel-body">Panel Content</div>
    </div>
</div>
</div>
	