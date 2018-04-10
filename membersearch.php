<?php
	session_start();

	if (isset($_SESSION['member'])) {
		session_unset();
	}

	if (!isset($_SESSION['staff_name'])) {
		header("Location: loginasstaff.php");
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Member Search</title>
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
								<h1>Search for a Member</h1>
								<form method="post" action="search.php">
									<div class="field half first">
										<input type="text" name="firstname" id="firstname" placeholder="First Name" />
									</div>
									<div class="field half">
										<input type="text" name="lastname" id="lastname" placeholder="Last Name" />
									</div>
									<div class="field">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										Date of Birth<br /><input type="date" name="birthdate" id="birthdate" />
									</div>
									<div class="field">
										<input type="text" name="address" id="address" placeholder="Address" />
									</div>
									<div class="field">
										<input type="text" name="city" id="city" placeholder="City" />
									</div>
									<div class="field half first">
										<input type="text" name="state" id="state" placeholder="State" />
									</div>
									<div class="field half">
										<input type="text" name="zip" id="zip" placeholder="Zip Code" />
									</div>
									<div class="field">
										<input type="text" name="phone" id="phone" placeholder="Phone" />
									</div>
									<ul class="actions">
										<li><input type="submit" value="Search" class="special" /></li>
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