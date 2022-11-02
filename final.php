<!DOCTYPE html>
<html>
<head>
<title>Submitted Details</title>
</head>
<body>
<?php

	include "connect.php";
	
    	echo "<h2>Today's Attendance</h2>".'<br>';

	$batch=$_POST['name'];
	echo "<h3>Batch & Year : ". $batch.'<br></h3>';

	$section=$_POST['section'];
	echo "<h3>Section : ". $section.'<br></h3>';

    	$date=$_POST['date'];
	echo "<h3>Date : ". $date.'<br></h3>';

    	$absent=$_POST['absent'];
	echo "<h3>Absenties Roll No. : ". $absent.'<br></h3>';

	$query = "INSERT INTO attendance values('$batch','$section','$date','$absent');";
	if(mysqli_query($connection,$query)){
		echo " "."<br>";
	}
	else{
		echo "error:".mysqli_error($connection);
	}
	
	include "card.html";

?>




</body>
</html>
