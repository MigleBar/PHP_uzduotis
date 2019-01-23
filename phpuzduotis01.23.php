<!DOCTYPE html>


<html> 
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Praktikos uzduotis</title>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<?php
		
		$salt = "as12gfK%#K6%tg"; 
		
		function apsauga($data){
			return stripslashes(strip_tags($data));
		}

		$errors = [];
		$reg_first_name = $reg_last_name = $reg_user_email = $reg_user_phone_1 = $reg_user_phone_2 = $reg_comment = '';

		require_once "db_conn.php";
		require_once "registration.php";

		if(sizeof($errors)>0){
			echo "<ol>";
			foreach($errors as $error){
				echo "<li>".$error."</li>";
			}
			echo "</ol>";
		}


		?>

		<!-- 
		first name
		last name
		email
		phone 1
		phone 2
		comment
		-->
		<form name="registration" method="POST" enctype="multipart/form-data">
			
			<label for="first_name">First name:</label><br>
			<input type="text" id="first_name" name="first_name" value="<?php echo $reg_first_name ?>" placeholder="Enter your First name">
			<br>
			
			<label for="last_name">Last name:</label><br>
			<input type="text" id="last_name" name="last_name" value="<?php echo $reg_last_name ?>" placeholder="Enter your Last name">
			<br>

			<label for="user_email">Email:</label><br>
			<input type="email" id="user_email" name="user_email" value="<?php echo $reg_user_email ?>" placeholder="Enter your Email">
			<br>
			
			<label for="user_phone_1">Phone number 1:</label><br>
			<input type="phone_number" id="user_phone_1" name="user_phone_1" value="<?php echo $reg_user_phone_1 ?>" placeholder="Enter your phone number 1">
			<br>
			
			<label for="user_phone_2">Phone number 2:</label><br>
			<input type="phone_number" id="user_phone_2" name="user_phone_2" value="<?php echo $reg_user_phone_2 ?>" placeholder="Enter your phone number 2">
			<br>

			<label for="user_comment">Comment:</label><br>
			<input type="text" id="user_comment" name="user_comment" value="<?php echo $reg_comment ?>" placeholder="Type a comment">
			<br>

			<input type="submit" name="registration_form" value="Register">
		</form>
		
	</body>
</html>