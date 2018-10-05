<?php

include "conn.php";

$delID = $_GET['id'];

mysqli_query($conn,"DELETE FROM contact WHERE id ='".$delID."'");

if (mysqli_query == TRUE)
{
	echo 
	
	"<script type='text/javascript'> 
	
	alert('Message deleted');
	window.location.href='messagesDashboard.php';	
	</script>";
}
else
{
	echo "Try again :(";
}

?>