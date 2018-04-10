<?php

	session_start();

	if (isset($_SESSION['member'])) {
		session_unset();
	}

	$db = new mysqli('localhost', 'root', '', 'CMMT');
	if($db->connect_error)
	{
		die ("Could not connect to db: " . $db->connect_error);
	}

	$member_id = $_POST['memberid'];
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Member Checkin</title>
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
								<?php
									# if memberid is valid
									$query = "SELECT * FROM members WHERE member_id='$member_id'";
									$result = $db->query($query) or die("Invalid insert: " . $db->error);

									$rows = $result->num_rows;

									if($rows > 0) {
										echo "<h1>Check In Successful!</h1>";
										echo "<p>visual or auditory notification and go back automatically</p>";
									}
									else {
										echo "<h1>Check In Failure!</h1>";
										echo "<p>notify staff in some way</p>";
									}
								?>

								<a href="membercheckin.php" class="button">Back</a>
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