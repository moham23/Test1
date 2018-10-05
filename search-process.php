<?php 

include "conn.php";

$title = $_POST['searchTerm'];

$query = "SELECT title, email, datee, Fro, email, articleFull, status, articleAbstract, artid, 
		isid, description FROM articles WHERE title LIKE '%$title%' LIMIT 5";

$result = $conn->query($query);

if($result->num_rows>0)
	while($row = $result ->fetch_assoc()){
		echo $row['title'];
		echo "</br> <a class='archiveDink' href=\"indArticle.php?artid=".$row['artid']."\">" . "View article </a>" ;

		echo "</br>";
	}

?>
