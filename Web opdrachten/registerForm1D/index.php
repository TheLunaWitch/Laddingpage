<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registerform</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" href="">
</head>
<body>
	<header>
	</header>
	<main>
		<?php

		if(isset($_GET['msg'])){
			echo $_GET['msg'];
		}

		?>
		<div class="form">
			<h2>Formulier</h2>
			<form action="backend/formController.php" method="post">
				
				<div class="form-group">
					<label for="username"> Username:</label>
					<input type="text" name="username" placeholder="vul je username in">
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" placeholder="bijv. test@test.com">
				</div>

				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" placeholder="vul hier je wachtwoord in" name="password">
				</div>

				<div class="form-group">
					<label for="password">Repeat password:</label>
					<input type="password" placeholder="vul je wachtwoord nogmaals in" name="password">
				</div>

				<div class="form-group">
					<input type="submit" value="verzend formulier">
				</div>

			</form>
		</div>
	</main>
	
</body>
</html>