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


//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 


//This makes sure they did not leave any fields blank - mandatory fields
//if (!$_POST['venuename'] | !$_POST['website'] | !$_POST['address1'] | !$_POST['address2'] | !$_POST['address3'] | !$_POST['city'] | !$_POST['county'] | !$_POST['phonenumber']) {
	//die('You did not complete all of the  fields');
//}


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

// This is the directory where images will be saved
$target_dir= "../images/uploads/";
$target_file= $target_dir . basename( $_FILES['photo1']['name']);


// Connects to your Database
mysql_connect("mysql2.mylogin.ie","planmyevente","88Shauna88") or die(mysql_error()); 
mysql_select_db("RG293604_planmyevente") or die(mysql_error()); 


$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image!.";
		echo basename( $_FILES['photo1']['name']);
		$Filename=basename( $_FILES['photo1']['name']);
		echo $Filename;
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo1"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {


    if (move_uploaded_file($_FILES["photo1"]["tmp_name"], $target_file)) {
     $dbConnection = mysqli_connect('mysql2.mylogin.ie', 'planmyevente', '88Shauna88', 'RG293604_planmyevente');
  $Filename=basename( $_FILES['photo1']['name']);
	   $query1 = "INSERT INTO venue (venuename, website, address1, address2, address3, city, county, phonenumber, type, othertype, christenings, eighteenparties, twentyoneparties, otheragesparties, kidsparties, henstagparties, weddings, funerals, corporate, sports, otherparties, othereventtype, starthour, closehour, internet, internetdetails, parking, parkingdetails, children, childrendetails, foodyes, foodno, hplatter, cplatter, fullmeal, fother, fotherdetails, costhplatter, costcplatter, costfother, transport, transportdetails, smoking, smokingdetails, photo1, musicyes, musicno, mdj, mband, mkaraoke, mother, motherdetails, entertain, entertaindetails, paymentpolicy, cancellationpolicy, addfee, addinfo, agreeyes, agreeno) VALUES ('".$_POST['venuename']."', '".$_POST['website']."', '".$_POST['address1']."', '".$_POST['address2']."', '".$_POST['address3']."', '".$_POST['city']."', '".$_POST['county']."', '".$_POST['phonenumber']."', '".$_POST['type']."', '".$_POST['othertype']."', '".$_POST['christenings']."', '".$_POST['eighteenparties']."', '".$_POST['twentyoneparties']."', '".$_POST['otheragesparties']."', '".$_POST['kidsparties']."', '".$_POST['henstagparties']."', '".$_POST['weddings']."', '".$_POST['funerals']."', '".$_POST['corporate']."', '".$_POST['sports']."', '".$_POST['otherparties']."', '".$_POST['othereventtype']."', '".$_POST['starthour']."', '".$_POST['closehour']."', '".$_POST['internet']."', '".$_POST['internetdetails']."', '".$_POST['parking']."', '".$_POST['parkingdetails']."', '".$_POST['children']."', '".$_POST['childrendetails']."', '".$_POST['foodyes']."', '".$_POST['foodno']."', '".$_POST['hplatter']."', '".$_POST['cplatter']."', '".$_POST['fullmeal']."', '".$_POST['fother']."', '".$_POST['fotherdetails']."', '".$_POST['costhplatter']."', '".$_POST['costcplatter']."', '".$_POST['costfother']."', '".$_POST['transport']."', '".$_POST['transportdetails']."', '".$_POST['smoking']."', '".$_POST['smokingdetails']."', '$Filename', '".$_POST['musicyes']."', '".$_POST['musicno']."', '".$_POST['mdj']."', '".$_POST['mband']."', '".$_POST['mkaraoke']."', '".$_POST['mother']."', '".$_POST['motherdetails']."', '".$_POST['entertain']."', '".$_POST['entertaindetails']."', '".$_POST['paymentpolicy']."', '".$_POST['cancellationpolicy']."', '".$_POST['addfee']."', '".$_POST['addinfo']."', '".$_POST['agreeyes']."', '".$_POST['agreeno']."')";
$query2 = "INSERT INTO space (tables, floor, room, complete, costoftables, costoffloor, costofroom, costofcomplete, minpeoptables, maxpeoptables, minpeopfloor, maxpeopfloor, minpeoproom, maxpeoproom, minpeopcomplete, maxpeopcomplete) VALUES ('".$_POST['tables']."', '".$_POST['floor']."', '".$_POST['room']."', '".$_POST['complete']."', '".$_POST['costoftables']."', '".$_POST['costoffloor']."', '".$_POST['costofroom']."', '".$_POST['costofcomplete']."', '".$_POST['minpeoptables']."', '".$_POST['maxpeoptables']."', '".$_POST['minpeopfloor']."', '".$_POST['maxpeopfloor']."', '".$_POST['minpeoproom']."', '".$_POST['maxpeoproom']."', '".$_POST['minpeopcomplete']."', '".$_POST['maxpeopcomplete']."')";


$result = mysqli_query($dbConnection, $query1);
$result = mysqli_query($dbConnection, $query2);


    mysqli_commit($dbConnection);

    echo "All queries were executed successfully";


mysqli_close($dbConnection);
		echo "The file ". basename( $_FILES["photo1"]["name"]). " has been uploaded.";
		


		
		$add_member = mysql_query($insert);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


 <?php 
 }

 else 
 {	
 ?>
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>jQeury.steps Demos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../css/jqsteps/normalize.css">
        <link rel="stylesheet" href="../css/jqsteps/main.css">
        <link rel="stylesheet" href="../css/jqsteps/jquery.steps.css">
		<link rel="stylesheet" href="../css/style.css">
        <script src="../lib/modernizr-2.6.2.min.js"></script>
        <script src="../lib/jquery-1.9.1.min.js"></script>
        <script src="../lib/jquery.cookie-1.3.1.js"></script>
        <script src="../build/jquery.steps.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


</br>

        <div class="content">
            <h1>Venue Registration</h1>

            <script>
                $(function ()
                {
                    $("#wizard").steps({
                        headerTag: "h2",
                        bodyTag: "section",
                        transitionEffect: "slideLeft",
                        stepsOrientation: "vertical"
                    });
                });
            </script>

            <div id="wizard">
                <h2>Venue Details</h2>
                <section>
				<p>This section should include all details of your venue.  These details will be used by planmyevent.eu and the customers should we need to contact you.  It is important your address is filled in correctly for accuracy on the booking map.</p>
                   
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
					


				  
                </section>
				
				<h2>Event Details</h2>
                <section>
				<p> This section includes the details that shows customers are allowed to book, it will also be what the customers search on.  Here you can set your rules and prices which are non-negotiable. </p>
				
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
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="christenings" value="Chistenings"> Chistenings
								</label>
								<label class="form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="eighteenparties" value="18th Parties"> 18th Parties
								</label>
								<label class="form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="twentyoneparties" value="21st Parties"> 21st Parties
								</label>
								<label class="form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="otheragesparties" value="Other Parties"> Other Birthday Ages above 21
								</label>
								<label class="form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="kidsparties" value="Kids Parties"> Kid's Parties
								</label>
								<label class="form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="henstagparties" value="Hen/Stag Parties"> Hen/Stag Parties
								</label>
								<label class="form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox7" name="weddings" value="Weddings"> Weddings
								</label>
								<label class="form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="funerals" value="Funerals"> Funerals
								</label>
								<label class="form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox9" name="corporate" value="Corporate"> Corporate
								</label>
								<label class="form-check-inline">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox10" name="sports" value="Sports"> Sports
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
			  
                </section>
				
				
				
				
				
                <h2>Venue Features</h2>
                <section>
				<p> This section highlights the features that make your venue unique to others, these will also be features that customers can search on.  The more features you can provide the more competitve your venue becomes! </p>
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
							<input type="checkbox" name="parking" value="Yes">
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
							<input type="checkbox" name="children" value="Yes">
							</span>
							<input type="text" class="form-control" name="childrendetails">
							</div>
							</td></tr>
						</div>
					</div>
					
					</br>

				<tr><td>Do you include food:</td><td></br>
					<label class="form-check-inline">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox12" name="foodyes" value="Yes"> Yes
					</label>
					<label class="form-check-inline">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox13" name="foodno" value="No"> No
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
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox16" name="fullmeal" value="Y"> Full Menu
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
							<input type="checkbox" name="smoking" value="Yes">
							</span>
							<input type="text" class="form-control" name="smokingdetails">
							</div>
							</td></tr>
						</div>
					</div>
					
					</br>
		
				<tr><td>Do you provide music:</td><td></br>
					<label class="form-check-inline">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox18" name="musicyes" value="Yes"> Yes
					</label>
					<label class="form-check-inline">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox19" name="musicno" value="No"> No
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
						
                </section>
				
				
				

                <h2>Booking Policies</h2>
                <section>
				<p>This section is where you should outline your exact policies for payment, cancellation and any additional fee's involved with booking your venue.  Failure to obide by these policies will result in a breach of contract between your venue and the customer. Planmyevent.eu will investigate under these circumstances. </p>
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
                </section>
				
				
				

                <h2>Photos</h2>
                <section>
				<p>Everyone judges a book by it's cover!  Your venue photos are a great opportunity to sell your venue based on image. Tips for a good photo include: </p>
                  
					Select image to upload:
					<input type="file" name="photo1" id="photo1">
					
					
				</section>
				
				
				
				<h2>Agreement</h2>
                <section>
				<p>With a powerfull online presence planmyevent.eu will actively market your property page on various search engines to ensure it is visible to a global audience exposing you to the highest possible number of potential bookers. The agreement includes: 
				<ul>
				<li>Skilled experts constanly working to upgrade the website and improve your online presence</li>
				<li>Instant booking confirmation means you have no extra steps to take on your side</li>
				<li>Verified guest reviews, this gives you credibility and helps future customers make the decision to book with you</li>
				<li>Round the clock support for you and your customers</li>
				<li>15% commision on every booking will be paid to planmyevent.eu</li>
				</ul>
				<tr><td>Do you confirm the agreement between your venue and planmyevent.eu:</td><td></br>
					<label class="form-check-inline">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox24" name="agreeyes" value="Y"> Yes
					</label>
					<label class="form-check-inline">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox25" name="agreeno" value="Y"> No
					</label>
				</br>
                </section>
            </div>
        </div>
		<div>
			<tr><th colspan=2><input type="submit" name="submit" 
			value="Submit Registration!"></th></tr> </table>
		</div>
  
</form>

 <?php
 }
 ?> 
 <?php include 'footer.php';
?>







