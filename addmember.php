<?php
	/*
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	*/

	session_start();

	if (isset($_SESSION['member'])) {
		session_unset();
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
	$primary_phone = $_POST['pphone'];
	$alt_phone = $_POST['aphone'];
	$emergency_contact_name = $_POST['econtact'];
	$emergency_contact_phone = $_POST['ephone'];

	// check if exists
	$query = "SELECT * FROM members WHERE last_name='$last_name' AND birth_date='$birth_date' AND primary_phone='$primary_phone'";
	$result = $db->query($query) or die("Invalid insert: " . $db->error);

	$rows = $result->num_rows;
	if($rows > 0) {
		echo "A member already exists with this information.";
	}
	else {
		$query = "SELECT MAX(member_id) FROM members";
		$result = $db->query($query) or die("Invalid insert: " . $db->error);

		$row = $result->fetch_array();
		$max_id = $row[0];
		if($max_id < 100000000) {
			$member_id = 100000000;
		}
		else {
			$member_id = $max_id + 1;
		}

		$query = "INSERT INTO members VALUES ('$first_name', '$last_name', '$email', '$street', '$city', '$state', '$zip', '$primary_phone', '$alt_phone', '$birth_date', '$emergency_contact_name', '$emergency_contact_phone', $member_id)";
		$db->query($query) or die("Invalid insert: " . $db->error);

		//mail info////////////////////////////////////////////

		/*
		require 'vendor/autoload.php';

		$mail = new PHPMailer(true);

		$mail->isSMTP();
		$mail->SMTPDebug = 2;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587;
		$mail->isHTML(true);

		$mail->Username = "cmmt.tester@gmail.com";
		$mail->Password = "cmmt.tester00";

		$mail->setFrom('cmmt.tester@gmail.com', 'CMMT');
		$mail->addAddress('ds5ct@virginia.edu', 'Dan Shapiro');

		$mail->Subject = 'Here is the subject';
		$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

		if(!$mail->send()) {
		  echo 'Message was not sent.';
		  echo 'Mailer error: ' . $mail->ErrorInfo;
		} else {
		  echo 'Message has been sent.';
		}
		*/
		

		header("Location: createmember.php");
	}
?>