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
 
 <html>
 <head>
 <title></title>
 <body>
 </br>
 </br>
 
  <table width="600px" border="1" cellpadding="1" cellspacing="1">
 <tr>
 <th>username</th> </th> <th>Email</th> 
 </tr>
 
 
 <?php
 
 while($owner=mysql_fetch_assoc($records)){

	echo "<tr>";
	
	echo "<td>".$owner['username']."</td>";
	
	
	echo "<td>".$owner['email']."</td>";
	
	
	echo "</tr>";
	 
 } //end while

 ?>
 
 
  </table>
 </body>
 </html>