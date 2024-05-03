<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="UTF-8">

		<title>Page Title</title> 
		<!-- normal html page -->

		<style>
			
			header {

				background: #e3e3e3;

				padding: 2en;

				text-align: center;

			}

		</style>

	</head>

	<body>

		<header>
			
			<h1>My First Heading</h1>

		</header>
		
		<p>
			<?php

			// <?php marks the start of php and 
		    // _<? marks the end of the php (_ is blank)

		    $name = $_GET['name']; // gets the value from the url associated with name

		    // url-> http://localhost/test1/?name=Abbas

			echo "Hello $name";
			
			?>

		</p>
		<!-- another way -->
		<p> <?php echo "Hello" . $_GET['name']; ?> </p>

		<!-- as we are referencing items in an array not variable; echo("hello $_GET['name']") doesn't work -->

		<!-- another way -->
		<!-- = after ? <==> php echo  -->
		<!-- htmlspecialchars -> convert text (for security) -->
		<p> <?= 'Hello' . htmlspecialchars($_GET['name']); ?> </p>

	</body>

</html>