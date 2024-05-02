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
			<ul>
				<!-- this only for contents of the array -->
				<?php foreach($person as $features): ?>

					<li> <?= $features ?> </li>

				<?php endforeach; ?>


				<!-- for the key with the content -->
				<?php foreach($person as $key=>$features): ?>

					<li> <strong> <?= $key ?> </strong> <?= $features ?> </li>

				<?php endforeach; ?>
			</ul>
		</p>

	</body>

</html>