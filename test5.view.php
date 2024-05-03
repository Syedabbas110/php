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
				<?php foreach($tasks as $task) : ?>
					<?php if($task->completed : ?>
						<strike>

					<?php endif; ?>
					<li> <?= $task->description ?> </li>
					<?php if($task->completed : ?>
						</strike>

					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</p>

	</body>

</html>