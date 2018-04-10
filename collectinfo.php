<?php
	session_start();

	if (isset($_SESSION['member'])) {
		session_unset();
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Collect Info</title>
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
							<h1>Collect Info</h1>
							<form method="post" action="addmember.php">
								<div class="field half first">
									<input type="text" name="firstname" id="firstname" placeholder="First Name" required/>
								</div>
								<div class="field half">
									<input type="text" name="lastname" id="lastname" placeholder="Last Name" required/>
								</div>
								<div class="field">
									<input type="email" name="email" id="email" placeholder="Email" required/>
								</div>
								<div class="field">
									Date of Birth<br /><input type="date" name="birthdate" id="birthdate" required/>
								</div>
								<div class="field">
									<input type="text" name="address" id="address" placeholder="Address" required/>
								</div>
								<div class="field">
									<input type="text" name="city" id="city" placeholder="City" required/>
								</div>
								<div class="field half first">
									<input type="text" name="state" id="state" placeholder="State" required/>
								</div>
								<div class="field half">
									<input type="text" name="zip" id="zip" placeholder="Zip Code" required/>
								</div>
								<div class="field">
									<input type="text" name="pphone" id="pphone" placeholder="Primary Phone" required/>
								</div>
								<div class="field">
									<input type="text" name="aphone" id="aphone" placeholder="Alternate Phone">
								</div>
								<div class="field">
									<input type="text" name="econtact" id="econtact" placeholder="Emergency Contact" required/>
								</div>
								<div class="field">
									<input type="text" name="ephone" id="ephone" placeholder="Emergency Phone" required/>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Submit" class="special" /></li>
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