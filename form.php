<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>form</title>
</head>
<body>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}
		#form {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			gap: 5px;
		}
		button {
			width: 100px;
			height: 20px;
		}
	</style>
	<form id="form" method="get" action="">
		<input type="text" placeholder="name" name="name">
		<input type="password" placeholder="password" name="password">
		<button type="submit">validate</button>
	</form>
	<?php 
		
	?>
</body>
</html>