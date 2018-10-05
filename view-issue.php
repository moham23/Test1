<?php include "adminHeader.php"; ?>


<?php 

include "conn.php";

$isid = $_GET['isid'];

$query = "SELECT * FROM issues WHERE isid = '$isid' ";

$result = $conn->query($query);

$row = mysqli_fetch_array($result);
 
?>


    <div class="articleOverviewSection">

    <div class="instructionsContainer">

	<ul class="breadcrumb">

    <li><a href="issuesDashboard.php">Issue dashboard</a></li>

	</ul>

	<form action="updateissue.php" method="post">

	<input type="hidden" name="isid" value="<?php echo $row['isid']; ?>">

	<label id="article-submit-title">Title: <input type="text" required id="login-input" name="issueName" value="<?php echo $row['issueName']; ?>"></label>

	<input class="submit-articles" value="Submit edit" type="submit">

	</form>
	
	</div>

	</div>

<?php


include "inc/footer.php";

?>