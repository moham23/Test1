<?php

include "conn.php";

$issuetitle = $_POST['issuetitle'];
$year = $_POST['issueYear'];

$query = "INSERT INTO issues (issueName, year) VALUES ('$issuetitle', '$year')";

if ($conn->query($query) == TRUE)
{
	header("Location: issuesdashboard.php");
}else{
	echo "Not inserted" . mysqli_error($conns);
}

?>