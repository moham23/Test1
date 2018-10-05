<?php

include "conn.php";

$delID = $_GET['isid'];

mysqli_query($conn,"DELETE FROM issues WHERE isid ='".$delID."'");

if (mysqli_query == TRUE)
{
	echo 
	
	"<script type='text/javascript'> 
	
	alert('Issue deleted');
	window.location.href='issuesdashboard.php';	
	</script>";
}
else
{
	echo "Try again :(";
}

?>