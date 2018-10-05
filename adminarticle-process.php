<?php

$title 		 = $_POST['title'];
$From        = $_POST['From'];
$date        = $_POST['Date'];
$Email       = $_POST['Email'];
$description = $_POST['description'];
$abstract    = ($_FILES['abstract']['name']);
$full		 = ($_FILES['full']['name']);
$issue       = $_POST['issue'];

$target = "upload/";
$targatex = $target . basename( $_FILES['abstract']['name']);

if(move_uploaded_file($_FILES['abstract']['tmp_name'], $targatex))
{
	
}else{

}

$targatex = $target . basename( $_FILES['full']['name']);

if(move_uploaded_file($_FILES['full']['tmp_name'], $targatex))
{
	
}else{
	
}

include "conn.php";

$query = "INSERT INTO articles (title, description, articleAbstract, articleFull, status, app, isid, Fro, Email, datee) VALUES ('$title', '$description', '$abstract', '$full', 0, 1, '".$issue."', '$From', '$Email', '$date')";

if($conn->query($query) == TRUE)
{
	echo "<script type='text/javascript'> 
	
	alert('Article Uploaded');
	window.location.href='articleDashboard.php';	
	</script>";
	
}else{
	echo "Error detected :" . mysqli_error($conn);
}


?>