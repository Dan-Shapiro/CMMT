<?php
	session_start();

	if (isset($_SESSION['member'])) {
		session_unset();
	}

	if (!isset($_SESSION['staff_name'])) {
		header("Location: loginasstaff.php");
	}

	$db = new mysqli('localhost', 'root', '', 'CMMT');
	if($db->connect_error)
	{
		die ("Could not connect to db: " . $db->connect_error);
	}

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$birth_date = $_POST['birthdate'];
	$street = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];

	$fields = "";
	if($first_name != '') {
		if($fields != '') {
			$fields = $fields . " AND ";
		}
		$fields = $fields . "first_name='$first_name'";
	}
	if($last_name != '') {
		if($fields != '') {
			$fields = $fields . " AND ";
		}
		$fields = $fields . "last_name='$last_name'";
	}
	if($email != '') {
		if($fields != '') {
			$fields = $fields . " AND ";
		}
		$fields = $fields . "email='$email'";
	}
	if($birth_date != '') {
		if($fields != '') {
			$fields = $fields . " AND ";
		}
		$fields = $fields . "birth_date='$birth_date'";
	}
	if($street != '') {
		if($fields != '') {
			$fields = $fields . " AND ";
		}
		$fields = $fields . "street='$street'";
	}
	if($city != '') {
		if($fields != '') {
			$fields = $fields . " AND ";
		}
		$fields = $fields . "city='$city'";
	}
	if($state != '') {
		if($fields != '') {
			$fields = $fields . " AND ";
		}
		$fields = $fields . "state='$state'";
	}
	if($zip != '') {
		if($fields != '') {
			$fields = $fields . " AND ";
		}
		$fields = $fields . "zip='$zip'";
	}
	if($phone != '') {
		if($fields != '') {
			$fields = $fields . " AND ";
		}
		$fields = $fields . "primary_phone='$phone'";
	}

	if($fields == '') {
		$fields = "1";
	}

	$query = "SELECT * FROM members WHERE " . $fields;
	$result = $db->query($query) or die("Invalid: " . $db->error);
	$rows = $result->num_rows;

	$keys = ['first_name', 'last_name', 'email', 'street', 'city', 'state', 'zip', 'primary_phone', 'birth_date', 'member_id']
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Search Results</title>
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
								<h1>Member Search Results</h1>
							</header>
							<?php
								echo "<table border = '1' width='100%'>";
								echo "<tr>";
								echo "<th>First Name</th>";
								echo "<th>Last Name</th>";
								echo "<th>Email</th>";
								echo "<th>Address</th>";
								echo "<th>City</th>";
								echo "<th>State</th>";
								echo "<th>Zip Code</th>";
								echo "<th>Phone</th>";
								echo "<th>Birth Date</th>";
								echo "<th>Member ID</th>";

								for($i = 0; $i < $rows; $i++) {
									$row = $result->fetch_array();

									echo "<tr>";
									foreach($keys as $next_key) {
										echo "<td> $row[$next_key] </td>";
									}
									echo "</tr>";
								}
								echo "</table>";
							?>
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