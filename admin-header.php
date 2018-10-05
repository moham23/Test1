<?php 

	session_start();

	if(($_SESSION['user_name']) == FALSE)
	{

		header ("Location: index.php");
	}

	$lowerUser = strtolower($_SESSION['user_name']);
	$user = ucfirst($lowerUser);

?>

<!doctype html>
<html lang="en">
	
	<head>
	
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/CSS" href="css/style.css">
		<script type="text/javascript" src="js/pace.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width initial-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css.map">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css">		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css.map"> 

	</head>

	<body>

		<header>

			<img class="logo-img" src="images/logo.png">

			<nav class="menu">
			
			    <li><a 

			    	class="<?php 

				    	if($page == 'Home'){
				    		echo "active";
				    	}

				    ?>"

			    href="admin.php">Dashboard - <?php echo $user; ?></a></li>
			    <li><a 

			    	class="<?php 

				    	if($page == 'Editorial'){
				    		echo "active";
				    	}

				    ?>"

			    	href="issuesdashboard.php">Issues</a></li>
			    <li><a 

			    	class="<?php 

				    	if($page == 'Archives'){
				    		echo "active";
				    	}

				    ?>"

			    	href="articleDashboard.php">Articles</a></li>
			    <li><a 

			    		 class="<?php 

					    	if($page == 'instructions'){
					    		echo "active";
					    	}

				   		 ?>"

			    	href="submissiondashboard.php">Submssions</a></li>
			    <li><a 

			    	class="<?php 

				    	if($page == 'Submission'){
				    		echo "active";
				    	}

				    ?>"


			    	href="messagesDashboard.php">Messages</a></li>
			    <li><a 


			    	class="<?php 

				    	if($page == 'Contact'){
				    		echo "active";
				    	}

				    ?>"

			    	href="contact.php">Website</a></li>

			</nav>

		</header>
