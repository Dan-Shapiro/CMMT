<?php
	
	//set up db
	$db = new mysqli('localhost', 'root', '', 'CMMT');
	if($db->connect_error):
		die ("Could not connect to db: " . $db->connect_error);
	endif;
	
	//drop table
	$db->query("DROP TABLE members");
	$db->query("DROP TABLE staff");
	
	//create table
	$result = $db->query("CREATE TABLE `CMMT`.`members` ( 
												`first_name` VARCHAR(60) NOT NULL , 
												`last_name` VARCHAR(60) NOT NULL , 
												`email` VARCHAR(60) NOT NULL , 
												`street` VARCHAR(60) NOT NULL , 
												`city` VARCHAR(60) NOT NULL , 
												`state` VARCHAR(30) NOT NULL , 
												`zip` VARCHAR(30) NOT NULL , 
												`primary_phone` VARCHAR(30) NOT NULL , 
												`alt_phone` VARCHAR(30) , 
												`birth_date` DATE NOT NULL , 
												`emergency_contact_full_name` VARCHAR(60) NOT NULL , 
												`emergency_contact_phone` VARCHAR(30) NOT NULL,
												`member_id` VARCHAR(30) DEFAULT NULL ) 
												ENGINE = InnoDB;") 
												or die ("Invalid: " . $db->error);

	$result = $db->query("CREATE TABLE `cmmt`.`staff` ( 
												`username` VARCHAR(30) NOT NULL , 
												`password` VARCHAR(60) NOT NULL ) 
												ENGINE = InnoDB;") 
												or die ("Invalid: " . $db->error);

	$result = $db->query("INSERT INTO `cmmt`.`staff` VALUES('admin', 'admin');") or die("Invalid: " . $db->error);
	
	//go to homepage
	header("Location: index.php");
?>
</html>