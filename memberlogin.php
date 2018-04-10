<?php
	session_start();

	if (!isset($_SESSION['member'])) {
		header("Location: loginasmember.php");
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Member Login</title>
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
								<h1>Member Login</h1>
								<?php
								if (isset($_SESSION['member_name'])) {
									echo "<h3 style='display:inline-block;'>Logged in as ". $_SESSION['member_name'] . ".</h3><a href='logout.php' class='button' style='display:inline-block;float:right;'>Logout</a>";
								}
								?>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Update information</h2>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Review membership options</h2>
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