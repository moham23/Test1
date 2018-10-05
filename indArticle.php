<?php include "header.php"; ?>

		<section class="page-template">

			<div class="container">

				<div class="inner-page">
	<?php

	function bake(){
	 echo "</br>";
	}

	include "conn.php";

	$artid = $_GET['artid'];

	$query = "SELECT * FROM articles WHERE artid = '$artid'";

	$result = $conn ->query($query);

	if($result ->num_rows> 0){
		while($row = $result -> fetch_assoc()){

			echo "<div class='indArchStyle'>";

			echo '<h3> You are viewing article '.$row['title'].'</h3>';
		 
			echo "<p>This issue was published in the year " . "<b>" . $row["datee"] . "</b>" ." </p>";
			
			echo "<meta description =".$row['title'].">";

	$query1 = "SELECT articles.title, articles.email, articles.datee, articles.Fro, articles.email, articles.articleFull, articles.status, articles.articleAbstract, articles.artid, 
			  articles.isid, articles.description FROM articles
			  WHERE articles.artid = '$artid' AND articles.status = 1";


	$result1 = $conn->query($query1);

	if($result1 ->num_rows> 0){
		while($row = $result1 -> fetch_assoc()){
			echo "<div id='indArchStyle'>";
			
			$from = $row['Fro'];

			echo "<b class='back'> Article Name: </b>" . "<p>" . $row['title'] . "</p>";

			echo "<b class='back'> Article From: </b>" . "<p>" .$row['Fro']. "</p>";
			
			echo "<b class='back'> Email address: </b>" . "<p>" .$row['email']. "</p>";

			echo "<b class='back'> Article Description: </b>". "<p>" . $row['description'] . "</p>";

			echo "<b class='back'> Article abstract: </b>" . "<a href=\" upload/".$row['articleAbstract']."\">".$row['articleAbstract']."</a>";

			echo bake();

			echo "<b class='back'> Full article: </b>" . "<a href=\" upload/".$row['articleFull']."\">".$row['articleFull']."</a>";

			echo "</div>";

		}
	}else{
		echo "No results";
	}
		}
	}else{
		echo "No result";
	}


	?>

<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.	</div>

		</div>

	</div>

</section>
	
<?php

include "inc/footer.php";

?>