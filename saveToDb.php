<?php
	$con = mysql_connect('localhost', 'craigbor', 'Namred!ps2', 'craigbor_family');

    $aboutMe = $_POST['aboutMe'];
    $whatMatters = $_POST['whatMatters'];

	// escape variables for security
	$aboutme = mysql_real_escape_string($aboutMe);
	$whatMatters = mysql_real_escape_string($whatMatters);

    $query = "INSERT INTO 'Bio Content' ('aboutMe', 'whatMatters') VALUES ('$aboutMe', '$whatMatters');";

    mysql_query($query);

	echo "<h2>Thank you for your Comment!</h2>";

	mysql_close($con)
?>