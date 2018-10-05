<!doctype html>
<html lang="en">
	
	<head>
	
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/CSS" href="css/style.css">
		<link rel="stylesheet" type="text/CSS" href="css/responsive.css">
		<script type="text/javascript" src="js/pace.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width initial-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script src="https://use.fontawesome.com/4a923eedef.js"></script>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css.map">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css">		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css.map"> 
		<script src="search.js" type="text/Javascript"></script>


		<script type="text/Javascript">

		$(document).ready(function(){

			$("#search").click(function(){
				$("#search-container").slideToggle();
			});
			
		
		
		});

		</script>

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

			    href="index.php"></a></li>
			    <li><a 

			    	class="<?php 

				    	if($page == 'Editorial'){
				    		echo "active";
				    	}

				    ?>"

			    	href="editorial.php">Editorial Board</a></li>
			    <li><a 

			    	class="<?php 

				    	if($page == 'Archives'){
				    		echo "active";
				    	}

				    ?>"

			    	href="archives.php">Archives</a></li>
			    <li><a 

			    		 class="<?php 

					    	if($page == 'instructions'){
					    		echo "active";
					    	}

				   		 ?>"

			    	href="instructions.php">Instructions</a></li>
			    <li><a 

			    	class="<?php 

				    	if($page == 'Submission'){
				    		echo "active";
				    	}

				    ?>"


			    	href="submission.php">Submissions</a></li>
			    <li><a 


			    	class="<?php 

				    	if($page == 'Contact'){
				    		echo "active";
				    	}

				    ?>"

			    	href="contact.php">Contact us</a></li>

			   	<li><a 


			    	class="<?php 

				    	if($page == 'login'){
				    		echo "active";
				    	}

				    ?>"

			    	href="login.php">Login</a></li>

			    	<li><span id="search"></span></li>

			</nav>

			<div id="search-container">

				<form method="post" action="search-process.php">

					<h3>Search articles:</h3>

					<input name="searchTerm" id="searchTerm" value="Search article" type="input">

					<div id="display"></div>

				</form>

			</div>

		</header>
