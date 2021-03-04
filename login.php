<?php include('includes/functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="csstemplates/login.css">
</head>
<body>
<a href="index.php" class="terug-box">terug</a>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Naam</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Wachtwoord</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
	</form>
</body>
</html>