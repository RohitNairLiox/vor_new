<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "vor";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "UPDATE `wp_posts` SET `guid` = REPLACE (`guid`,'http://localhost/vor','http://localhost/vornew')";

		if ($conn->query($sql) === TRUE) {
		    echo "Database updated successfully";
		} else {
		    echo "Error updating record: " . $conn->error;
		}

		$conn->close();
?> 








	

