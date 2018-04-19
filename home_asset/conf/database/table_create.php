<?php
	include("conn.php"); // import connection script
	
	// create sign_up table if it does not exist
	$sql_signup = $conn->query("CREATE TABLE IF NOT EXISTS `sign_up_users`( 
	`id` INT(50) UNSIGNED NOT NULL AUTO_INCREMENT, 
	`type` VARCHAR(10) NOT NULL , 
	`firstname` VARCHAR(150) NOT NULL , 
	`lastname` VARCHAR(150) NOT NULL , 
	`username` VARCHAR(150) NOT NULL , 
	`password` VARCHAR(250) NOT NULL , 
	`email` VARCHAR(150) NOT NULL , 
	`phone` VARCHAR(30) NOT NULL , 
	`reg_date` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `username` (`username`),
	UNIQUE KEY `email` (`email`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1") or die("Error creating database: " . $conn->error());
	
	if($sql_signup == TRUE){
		// create sign_in table if it does not exist
		$sql_signin = $conn->query("CREATE TABLE IF NOT EXISTS `sign_in_users`( 
		`id` INT(50) UNSIGNED NOT NULL AUTO_INCREMENT, 
		`type` VARCHAR(10) NOT NULL , 
		`username` VARCHAR(150) NOT NULL , 
		`password` VARCHAR(250) NOT NULL , 
		`email` VARCHAR(150) NOT NULL ,
		`Activated` INT(10) NOT NULL ,
		`reg_date` TIMESTAMP NULL DEFAULT NULL,
		`Last_seen` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL,
		PRIMARY KEY (`id`),
		UNIQUE KEY `username` (`username`),
		UNIQUE KEY `email` (`email`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1");
		
		if($sql_signin == TRUE){
		}
		else{
			echo "Error creating table!!: " . $conn->connect_error;
		}
	}
	else{
		echo "Error creating table!!";
	}
?>