<?php

if(!empty($_POST['registration_form'])){
	if(!empty($_POST['first_name'])){
		$reg_first_name = apsauga($_POST['first_name']);
	}else{
		$errors[] = "First name is required";
		$reg_first_name = '';
	}

	if(!empty($_POST['last_name'])){
		$reg_last_name = apsauga($_POST['last_name']);
	}else{
		$errors[] = "Last name is required";
		$reg_last_name = '';
	}

	if(!empty($_POST['user_email'])){
		$reg_user_email = apsauga($_POST['user_email']);
	}else{
		$errors[] = "Email is required";
		$reg_user_email = '';
	}

	if(!empty($_POST['user_phone_1'])){
		$reg_user_phone_1 = apsauga($_POST['user_phone_1']);
	}else{
		$errors[] = "At least one phone number is required";
		$reg_user_phone_1 = '';
	}

	if(!empty($_POST['user_phone_2'])){
		$reg_user_phone_2 = apsauga($_POST['user_phone_2']);
	}else{
		$reg_user_phone_2 = '';
	}
	
	if(!empty($_POST['comment'])){
		$reg_comment = apsauga($_POST['comment']);
	}else{
		$reg_comment = '';
	}

 
	if(empty($errors)){


		$sql = 'SELECT id 
				FROM users 
				WHERE user_email="'.$reg_user_email.'"
				LIMIT 1';

		$DBatsakymas = $db->query($sql);
		
		if($DBatsakymas->num_rows == 0){
			$sql = 'INSERT INTO users (first_name, last_name, user_email, user_phone_1, user_phone_2)
					VALUES ("'.$reg_first_name.'", "'.$reg_last_name.'", "'.$reg_user_email.'","'.$reg_user_phone_1.'")';
			
			
			$DBatsakymas = $db->query($sql);
			
			
			if($DBatsakymas){
				$errors[] = "Registracija sekminga";
			}
		}else{
			$errors[] = "Vartotojas su tokiu Email jau egzistuoja";
		}
	}
}