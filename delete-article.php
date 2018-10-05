<?php

include "conn.php";

$delID = $_GET['artid'];

mysqli_query($conn,"DELETE FROM articles WHERE artid ='".$delID."'");

if (mysqli_query == TRUE)
{
	echo 
	
	"<script type='text/javascript'> 
	
	alert('Article deleted');
	window.location.href='articleDashboard.php';	
	</script>";
}
else
{
	echo "Try again :(";
}

?>