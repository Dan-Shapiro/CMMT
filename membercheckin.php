<?php
	session_start();

	if (isset($_SESSION['member'])) {
		session_unset();
	}
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
								<h1>Member Checkin</h1>
							
								<form method="post" action="confirmcheckin.php">
									<div class="field">
										<input type="text" name="memberid" id="memberid" placeholder="Member ID" />
									</div>
									<ul class="actions">
										<li><input type="submit" value="Check In" class="special" /></li>
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