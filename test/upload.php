<?php

// This is the directory where images will be saved
$target_dir= "../images/uploads/";
$target_file= $target_dir . basename( $_FILES['photo1']['name']);


// Connects to your Database
mysql_connect("mysql2.mylogin.ie","planmyevente","88Shauna88") or die(mysql_error()); 
mysql_select_db("RG293604_planmyevente") or die(mysql_error()); 


?>

<?php
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
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
        echo "The file ". basename( $_FILES["photo1"]["name"]). " has been uploaded.";
		$Filename=basename( $_FILES['photo1']['name']);
		
		$insert = "INSERT INTO venue (photo1) VALUES ('$Filename')";
		$add_member = mysql_query($insert);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


