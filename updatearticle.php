<?php

$artid = $_POST['artid'];

$title 	= $_POST['title'];

$description  = $_POST['description'];

$isid = $_POST['isid'];

include "conn.php";

$query = mysqli_query($conn, "UPDATE articles SET title = '$title', description = '$description', isid = '$isid' WHERE artid = '$artid'");

if ($query == TRUE)
{
	echo 
	"<script type='text/javascript'> 
	
	alert('Article updated');
	window.location.href='articleDashboard.php';	
	</script>";
}
else
{
	echo "Try again :(";
}

?>