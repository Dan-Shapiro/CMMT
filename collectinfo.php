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
							<span class="image main"><img src="images/pic13.jpg" alt="" /></span>
							<form method="post" action="createuser.php">
								<div class="field half first">
									<input type="text" name="firstname" id="firstname" placeholder="First Name" />
								</div>
								<div class="field half">
									<input type="text" name="lastname" id="lastname" placeholder="Last Name" />
								</div>
								<div class="field">
									<input type="email" name="email" id="email" placeholder="Email">
								</div>
								<div class="field">
									Date of Birth<br /><input type="date" name="birthdate" id="birthdate">
								</div>
								<div class="field">
									<input type="text" name="address" id="address" placeholder="Address">
								</div>
								<div class="field">
									<input type="text" name="city" id="city" placeholder="City">
								</div>
								<div class="field half first">
									<input type="text" name="state" id="state" placeholder="State" />
								</div>
								<div class="field half">
									<input type="text" name="zip" id="zip" placeholder="Zip Code" />
								</div>
								<div class="field">
									<input type="text" name="pphone" id="pphone" placeholder="Primary Phone">
								</div>
								<div class="field">
									<input type="text" name="aphone" id="aphone" placeholder="Alternate Phone">
								</div>
								<div class="field">
									<input type="text" name="econtact" id="econtact" placeholder="Emergency Contact">
								</div>
								<div class="field">
									<input type="text" name="ephone" id="ephone" placeholder="Emergency Phone">
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