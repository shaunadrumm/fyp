<?php include 'navbar.php';
?>


<br/>
	
<h2> Search...</h2>
	
		<div class="form-group">
			<tr><td>Location:</td><td>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Select: <span class="caret"></span>
					</button>
			  <ul class="dropdown-menu">
				<li><a href="#">Dublin 1</a></li>
				<li><a href="#">Dublin 2</a></li>
				<li><a href="#">Dublin 3</a></li>
				<li><a href="#">Dublin 4</a></li>
			  </ul>
		</div>
			</td></tr>
		</div>
	  
		<div class="form-group">
			<tr><td>Type of Event:</td><td>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Select: <span class="caret"></span>
					</button>
			  <ul class="dropdown-menu">
				<li><a href="#">Kids Birthday</a></li>
				<li><a href="#">21st</a></li>
				<li><a href="#">Christening</a></li>
				<li><a href="#">Corporate</a></li>
			  </ul>
		</div>
			</td></tr>
		</div>
		
			<div class="form-group">
			<tr><td>Number of people:</td><td>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Select: <span class="caret"></span>
					</button>
			  <ul class="dropdown-menu">
				<li><a href="#">Less than 50</a></li>
				<li><a href="#">50 - 100</a></li>
				<li><a href="#">100 - 200</a></li>
				<li><a href="#">More than 200</a></li>
			  </ul>
		</div>
			</td></tr>
		</div>
		
				
		
		
		<div>
			<tr><th colspan=2><button type="button">Go!</button>
		</div>
  
</form>


<h2>All Venues... </h2>
</br>

<?php
$con=mysqli_connect("mysql2.mylogin.ie","planmyevente","88Shauna88","RG293604_planmyevente");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM venue");

echo "<table border='1'>
<tr>
<th>Venue Name</th>
<th>Venue Type</th>
<th>Location</th>
<th>Type of Events</th>
<th>Provides Parking</th>
<th>Allows Children</th>
<th>Provides Food</th>
<th>Smoking Area</th>
<th>Provides Music</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['venuename'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['city'] . "" . $row['county'] . "</td>";
echo "<td>" . $row['christenings'] . "" . $row['eighteenparties'] . "" . $row['twentyoneparties'] . "" . $row['otherageparties'] . "" . $row['kidsparties'] . "" . $row['henstagparties'] . "" . $row['weddings'] . "" . $row['funerals'] . "" . $row['corporate'] . "" . $row['sports'] . "</td>";
echo "<td>" . $row['parking'] . "</td>";
echo "<td>" . $row['children'] . "</td>";
echo "<td>" . $row['foodyes'] . "" . $row['foodno'] . "</td>";
echo "<td>" . $row['smoking'] . "</td>";
echo "<td>" . $row['musicyes'] . "" . $row['musicno'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</br>
</br>





 <?php include 'footer.php';
?>

