<?php
	session_start();

	if(isset($_POST['loggingin'])) {
		$db = new mysqli('localhost', 'root', '', 'CMMT');
		if($db->connect_error)
		{
			die ("Could not connect to db: " . $db->connect_error);
		}

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM staff WHERE username='$username' AND password='$password'";
		$result = $db->query($query) or die("Invalid insert: " . $db->error);		

		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_array();
			$username = $row[0];

			$_SESSION['staff_name'] = $username;

			header("Location: staffportal.php");
		}
		else {
			echo "<h3>Login Failure.";
		}
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Staff Portal</title>
		<?php
			include 'helpers/head.php';
		?>
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php
						include 'helpers/header.php';
					?>

				<!-- Menu -->
					<?php
						include 'helpers/menu.php';
					?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Login</h1>
								
								<form method="post" action="loginasstaff.php">
									<div class="field">
										<input type="text" name="username" id="username" placeholder="Username" required/>
									</div>
									<div class="field">
										<input type="password" name="password" id="password" placeholder="Password" required/>
									</div>
									<input type="hidden" name="loggingin" />
									<ul class="actions">
										<li><input type="submit" value="Login" class="special" /></li>
									</ul>
								</form>
						</div>
					</div>

				<!-- Footer -->
					<?php
						include 'helpers/footer.php';
					?>

			</div>

		<!-- Scripts -->
			<?php 
				include 'helpers/scripts.php';
			?>

	</body>
</html>
