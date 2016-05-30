


<?php

	include 'config.php';

	$id = $_GET['id'];

	// You'll call some id in the table through 	the '$id' variable.
	if (isset($id)){
	// Increment the count field value of the 	requested id.
	$update = mysql_query("UPDATE clickcounter1 	SET count = count + 1 WHERE id='$id'");

	// Select the requested id on the database..
	$result = mysql_query("SELECT url FROM 		clickcounter1 WHERE id='$id'");

	// Retrieve the data(url) of url field.
	$row = mysql_fetch_array($result);
	$url = $row['url'];

	// Redirect to the url and close the 		database.
	header("Location: play/?url=".$url."");

	}
mysql_close();
?>


