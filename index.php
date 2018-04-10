<?php
	session_start();

	if (isset($_SESSION['member'])) {
		session_unset();
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
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
								<h1>Home</h1>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="memberportal.php">
										<h2>Member Portal</h2>
										<div class="content">
											<p>Create a new member, log in to manage member's information.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="membercheckin.php">
										<h2>Member Checkin</h2>
										<div class="content">
											<p>Verify the member is in the system, check the member's certifications.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="loginasstaff.php">
										<h2>Staff Portal</h2>
										<div class="content">
											<p>Modify a member's certifications, change a member's membership option.</p>
										</div>
									</a>
								</article>
							</section>
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