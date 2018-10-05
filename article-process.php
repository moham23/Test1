<?php

$title 		 = $_POST['title'];
$From	     = $_POST['From'];
$Email       = $_POST['Email'];
$date        = $_POST['date'];
$description = $_POST['description'];
$abstract    = ($_FILES['abstract']['name'];
$full		 = ($_FILES['full']['name'];


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

$query = "INSERT INTO articles (title, description, articleAbstract, articleFull, status, app, fro, email, datee) VALUES ('$title', '$description', '$abstract', '$full', 0, 0, '$From', '$Email', '$date')";

if($conn->query($query) == TRUE)
{
	header("Location: submission.php");
}else{
	echo "Error detected :" . mysqli_error($conn);
}

$to = "mohammed_interpole@yahoo.com";
$subject = "You have a new submission";
$message .= "<p> From: " . $From ." </p>";
$message .= "<p> From: " . $Email ." </p>";
$message .= "<p> Date recieved: " . $From ." </p>";
$message .= "<p> Description: " . $description ." </p>";
$message .= "<p> Title " . $title ." </p>";
$message .= "Please check your website for processing";

$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

echo $retval;

if( $retval == true )
{

}
else
{

}



?>