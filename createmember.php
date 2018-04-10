<?php
	session_start();

	if (isset($_SESSION['member'])) {
		session_unset();
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Create New Member</title>
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
								<h1>Create New Member</h1>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Fill out waiver</h2>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="collectinfo.php">
										<h2>Collect information</h2>
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