<?php include 'navbar.php';
?>

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
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.steps.css">
        <script src="../lib/modernizr-2.6.2.min.js"></script>
        <script src="../lib/jquery-1.9.1.min.js"></script>
        <script src="../lib/jquery.cookie-1.3.1.js"></script>
        <script src="../build/jquery.steps.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
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

 // this makes sure both passwords entered match
//if ($_POST['pass'] != $_POST['pass2']) {
	//die('Your passwords did not match. ');
//}

// here we encrypt the password and add slashes if needed
//$_POST['pass'] = md5($_POST['pass']); 

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


	
	
}

// now we insert it into the database
//$insert = "INSERT INTO venue (venuename, website, address1, address2, address3, city, county, phonenumber, type, othertype) VALUES ('".$_POST['venuename']."', '".$_POST['website']."', '".$_POST['address1']."', '".$_POST['address2']."', '".$_POST['address3']."', '".$_POST['city']."', '".$_POST['county']."', '".$_POST['phonenumber']."', '".$_POST['type']."', '".$_POST['othertype']."')";
//mysql_
//$insert="START TRANSACTION;
//INSERT INTO venue (venuename, website, address1, address2, address3, city, county, phonenumber, type, othertype) VALUES ('".$_POST['venuename']."', '".$_POST['website']."', '".$_POST['address1']."', '".$_POST['address2']."', '".$_POST['address3']."', '".$_POST['city']."', '".$_POST['county']."', '".$_POST['phonenumber']."', '".$_POST['type']."', '".$_POST['othertype']."');
//COMMIT;";
//$add_member = mysql_query($insert);
?>

<?php

	

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis, 
                        sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. 
                        Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                </section>

                <h2>Venue Features</h2>
                <section>
                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque. 
                        In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum 
                        dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur. 
                        In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam. 
                        Donec non pulvinar urna. Aliquam id velit lacus.</p>
                </section>

                <h2>Booking Features</h2>
                <section>
                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, 
                        pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat. 
                        Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris 
                        venenatis.</p>
                </section>

                <h2>Photos</h2>
                <section>
                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                </section>
				
				<h2>Agreement</h2>
                <section>
                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. 
                        Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. 
                        Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
                </section>
            </div>
        </div>
    </body>
</html>