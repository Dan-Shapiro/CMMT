<?php
	session_start();

	if(isset($_SESSION['member_name'])) {
		header("Location: memberlogin.php");
	}

	if(isset($_POST['loggingin'])) {
		$db = new mysqli('localhost', 'root', '', 'CMMT');
		if($db->connect_error)
		{
			die ("Could not connect to db: " . $db->connect_error);
		}

		$last_name = $_POST['lastname'];
		$birth_date = $_POST['birthdate'];
		$phone = $_POST['phone'];

		$query = "SELECT * FROM members WHERE last_name='$last_name' AND birth_date='$birth_date' AND primary_phone='$phone'";
		$result = $db->query($query) or die("Invalid insert: " . $db->error);		

		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_array();
			$fname = $row[0];
			$lname = $row[1];
			$id = $row[12];

			$_SESSION['member_name'] = $fname . " " . $lname;
			$_SESSION['member'] = $id;

			header("Location: memberlogin.php");
		}
		else {
			echo "<h3>Login Failure.";
		}
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Member Portal</title>
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
								
								<form method="post" action="loginasmember.php">
									<div class="field">
										<input type="text" name="lastname" id="lastname" placeholder="Last Name" required/>
									</div>
									<div class="field">
										Date of Birth<br /><input type="date" name="birthdate" id="birthdate" required />
									</div>
									<div class="field">
										<input type="text" name="phone" id="phone" placeholder="Phone" required/>
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
