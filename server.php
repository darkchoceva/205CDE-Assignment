<?php 
	session_start();
	
	$name = "";
	$email = "";
	$errors = array();
	
	$db = mysqli_connect('localhost', 'root', '', 'wecare');
	
	if (isset($_POST['signupUsers'])){
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		if (empty($name)) {array_push($errors, "Caution: Name field is required.");}
		if (empty($email)) {array_push($errors, "Caution: Email address field is required.");}
		if (empty($password)) {array_push($errors, "Caution: Password field is required.");}
		
		$user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		
		if ($user){
			if ($user['name'] === $name){
				array_push($errors, "This name already exists.");
			}
			if ($user['email'] === $email){
				array_push($errors, "This email address already exists");
			}
		}
		
		if (count($errors) == 0){
			
			$query = "INSERT INTO users (name, email, password)
					  VALUES('$name', '$email', '$password')";
			mysqli_query($db, $query);
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "Your account is created successfully.";
			header('location: welcome.php');
		}
	}
	
	if (isset($_POST['loginUsers'])){
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		if (empty($email)) {array_push($errors, "Caution: Email address field is required.");}
		if (empty($password)) {array_push($errors, "Caution: Password field is required.");}
		
		if (count($errors) == 0) {
			$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1){
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "Logged in successfully.";
				header('location: welcome.php');
			}
			else {
				echo "<script type='text/javascript'>alert('Error: Wrong email address / password. Please enter again.');</script>";
			}
		}
	}
?>