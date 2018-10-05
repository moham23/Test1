<?php

include "conn.php";

$fullname 	   = $_POST['fullname'];

$email 		   = $_POST['email'];

$fullMessage   = $_POST['fullMessage'];

$time 		   = $_POST['time'];

	$query = "INSERT INTO contact (id, person, email, message, datee, readx) VALUES ('', '$fullname', '$email', '$fullMessage', '$time', 0)";

	if($conn->query($query) == TRUE){
		echo "Inserted sucessfully";
	}else{
		echo "There is a problem" . $conn->error;
	}

?>