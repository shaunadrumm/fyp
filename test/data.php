<?php
$con = mysql_connect("mysql2.mylogin.ie","planmyevente","88Shauna88");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("RG293604_planmyevente", $con);

$query = mysql_query("SELECT month, tables, floor, room, complete FROM bookingexample");

$category = array();
$category['name'] = 'month';

$series1 = array();
$series1['name'] = 'tables';

$series2 = array();
$series2['name'] = 'floor';

$series3 = array();
$series3['name'] = 'room';

$series4 = array();
$series4['name'] = 'complete';


while($r = mysql_fetch_array($query)) {
    $category['data'][] = $r['month'];
    $series1['data'][] = $r['tables'];
    $series2['data'][] = $r['floor'];
    $series3['data'][] = $r['room'];   
	$series4['data'][] = $r['complete'];
}

$result = array();
array_push($result,$category);
array_push($result,$series1);
array_push($result,$series2);
array_push($result,$series3);
array_push($result,$series4);


print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?> 
