<?php

$isid = $_POST['isid'];

$issueName = $_POST['issueName'];

include "conn.php";

$query = mysqli_query($conn, "UPDATE issues SET issueName = '$issueName' WHERE isid = '$isid'");

if ($query == TRUE)
{
	echo 
	"<script type='text/javascript'> 
	
	alert('Issue updated');
	window.location.href='issuesDashboard.php';	
	</script>";
}
else
{
	echo "Try again :(" . mysqli_error($conn);
}

?>