<?php 

session_start();

if(($_SESSION['user_name']) == FALSE)
{

	header ("Location: index.php");
}

?>

<?php 

include "admin-header.php"; 

include "conn.php";

$query = "SELECT COUNT(app) as 'result' FROM articles GROUP BY app HAVING app = 0";

$result = $conn->query($query);

$row = mysqli_fetch_array($result);

if($row['result'] == 0){
	$alert =  "<div id='redAlert'>0 submissions </div>";
}else{
	$alert = "<div id='alert'>" . $row['result'] . " new submission </div>"; 
}

$query1 = "SELECT COUNT(readx) as 'read' FROM contact GROUP BY readx HAVING readx = 0";

$result1 = $conn->query($query1);

$row = mysqli_fetch_array($result1);

if($row['read'] == 0){
	$message =  "<div id='redAlert'>0 messages </div>";
}else{
	$message = "<div id='alert'>" . $row['read'] . " new message </div>"; 
}

?>

<html>

<head>

<title>User Login</title>

</head>

<body>

		<?php 
		$lowerUser = strtolower($_SESSION['user_name']);
		$user = ucfirst($lowerUser);
		?>

		<section class="page-template">

			<div class="container">

				<div class="inner-page">
					
					<h3>Welcome <?php echo $user; ?> to Dashboard</h3>
					
					<div class="row admin-control-panel">

					<div class="column-50 admin-panel"><a href="issuesdashboard.php"> <img id="adminPanel-img" src="images/admin-cat.png">Manage issues</a></div>

					<div class="column-50 admin-panel"><a href="articleDashboard.php"> <img id="adminPanel-img" src="images/admin-art.png">Manage Articles</a></div>

					<div class="column-50 admin-panel"><a href="submissiondashboard.php"> <img id="adminPanel-img" src="images/art-sub.png">Newest submissons</a><?php echo $alert; ?></div>

					<div class="column-50 admin-panel"><a href="messagesDashboard.php"> <img id="adminPanel-img" src="images/admin-msg.png"> Manage Messages</a><?php echo $message; ?></div>

					</div>

				</div>

			</div>

		</section>

	<?php

	include "footer.php";

	?>
