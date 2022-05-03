<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
	    <link rel="manifest" href="./fav/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>What rating of movie are you allowed to watch alone?</title>
	</head>
	<body>
				<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>What rating of movie are you allowed to watch alone?</h1></center>';
			echo '<img src="./images/movie.jpg" width="50%"/>';
			echo "<p><center>Enter your age below!</center></p>"; 
		?>

			<!-- Textfield for Age -->
		<form method = "post">   
			Temperature: <input type="number" name="age" step="0.1"> 

				<br></br>
			<!-- Submit button -->
			<input type = "submit" name = "enter" value="Temperature">  
			<br></br>
				</form>

		<?php  
			if(isset($_POST['enter'])) {
				// declare constants
				define('R_RATING', '18');
				define('PG_RATING', '13');
				define('G_RATING', '10');
				//declare variables
				$userAge = $_POST['age'];
				
				// IF statements
				if	($userAge >= R_RATING){
					echo "You can go see a R movie by yourself!";
				} 
				elseif ($userAge >= PG_RATING) {
					echo "You can go see a PG 13 movie by yourself!";
				}
				elseif ($userAge >= G_RATING) {
					echo "You can watch a G rated movie by yourself!";
				}
				else {
					echo "You can't go to a movie by yourself";
				}
			}
		?>
	</body>
</html>