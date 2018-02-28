<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
		<?php
			include 'head.php';
		?>
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php
						include 'header.php';
					?>

				<!-- Menu -->
					<?php
						include 'menu.php';
					?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Home</h1>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="userportal.php">
										<h2>User Portal</h2>
										<div class="content">
											<p>Create a new user, log in to manage user's information.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="usercheckin.php">
										<h2>User Checkin</h2>
										<div class="content">
											<p>Verify the user is in the system, check the user's certifications.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="staffportal.php">
										<h2>Staff Portal</h2>
										<div class="content">
											<p>Modify a user's certifications, change a user's membership option.</p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<?php
						include 'footer.php';
					?>

			</div>

		<!-- Scripts -->
			<?php 
				include 'scripts.php';
			?>

	</body>
</html>