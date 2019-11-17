<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Sebastiaan Franken">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
		<link rel="stylesheet" href="assets/css/compiled/grid.css">
		<style>
		*, *::before, *::after {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			color: #222;
			background: #fff;
			padding: 2em;
		}

		.grid .cell {
			outline: 1px dashed #ddd;
			padding: 1em;
		}
		</style>
		<title>Pie CSS Grid</title>
	</head>

	<body>
		<div class="grid">
			<div class="cell span-16">
				<p>Cel</p>
			</div> <!-- /.cell /.span-16 -->

			<?php for($i = 1; $i <= 2; ++$i) : ?>
			<div class="cell span-8">
				<p>Cel</p>
			</div> <!-- /.cell /.span-8 -->
			<?php endfor;?>

			<?php for($i = 1; $i <= 4; ++$i) : ?>
			<div class="cell span-4">
				<p>Cel</p>
			</div> <!-- /.cell /.span-4 -->
			<?php endfor;?>

			<?php for($i = 1; $i <= 8; ++$i) : ?>
			<div class="cell span-2">
				<p>Cel</p>
			</div> <!-- /.cell /.span-2 -->
			<?php endfor;?>

			<?php for($i = 1; $i <= 16; ++$i) : ?>
			<div class="cell">
				<p>Cel</p>
			</div> <!-- /.cell -->
			<?php endfor;?>
		</div> <!-- /.grid -->
	</body>
</html>
