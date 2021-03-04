<?php 
include('../includes/functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "Je moet ingelogd zijn!";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../csstemplates/login.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	
	<div class="menu-admin">
	<div class="menu-admin-header">
		<h2>Admin-Menu</h2>
	</div>	
	<div class="admin-content">

		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		
		<div class="profile_info">

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>

		<a href="../index.php" class="terug-box">terug</a>
	<!---pagina naar de showroom editer-->
		<a href="../adminpage.php" class="pagina-box">Auto Toevoegen</a>

		
	

	</div>

	
</body>
</html>