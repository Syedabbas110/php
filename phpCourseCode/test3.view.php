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
			<?= ucwords('my name is qbbas') ?>
			<!-- make every starting letter of all words capitals -->
			<ul>
				<?php foreach($task as $heading => $value): ?>
					<li>
						<strong> <?= ucwords($heading); ?></strong>
						<?= $value?>
					</li>
				<?php endforeach; ?>
			</ul>
		</p>

		<p>
			<ul>
				<li>
					<strong>Status: </strong>
					<?= $task['completed'] ? 'true' : 'false'; ?>
					<!-- same as above -->
					<?php 
						if($task['completed']) {
							echo '&#9745';
						} else {
							echo '&#9746';
						}
					?>
				</li>
			</ul>
		</p>

	</body>

</html>