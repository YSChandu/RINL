<?php 
session_start();

// Declaring and hoisting the variables
$username = "";
$email = "";
$errors = array(); 
$_SESSION['success'] = "";

include("connection.php");
// Registration code
if (isset($_POST['Submit'])) {

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "Passwords doesnt match !!");
		// Checking if the passwords match
	}

	// If the form is error free, then register the user
	if (count($errors) == 0) {
		
		// Password encryption to increase data security
		$password = md5($password_1);
		
		// Inserting data into table
        $sql = "INSERT INTO user_master (User_Name, Email_Id,Phone_No,Password) VALUES (?, ?, ?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $username, $email, $mobilenumber, $password);
		
		mysqli_query($db, $query);

		// Storing username of the logged in user,
		// in the session variable
		$_SESSION['username'] = $username;
		
		// Welcome message
		$_SESSION['success'] = "You have logged in";
        $_SESSION['status']=1;
		
		// Page on which the user will be 
		// redirected after logging in
		header('location: index.php'); 
	}
}

// User login
if (isset($_POST['login'])) {
	
	// Data sanitization to prevent SQL injection
	$username =  $_POST['username'];
	$password =  $_POST['password'];

	// Error message if the input field is left blank
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// Checking for the errors
	if (count($errors) == 0) {
		
		$query = "SELECT * FROM user_master WHERE User_Name=
				'$username' AND Password='$password'";
		$results = mysqli_query($conn, $query);

		// $results = 1 means that one user with the
		// entered username exists
		if (mysqli_num_rows($results) == 1) {
			
			// Storing username in session variable
			$_SESSION['username'] = $username;
			
			// Welcome message
			$_SESSION['success'] = "You have logged in!";
            $_SESSION['status']=1;
			
			// Page on which the user is sent
			// to after logging in
			header('location:home.php');
		}
		else {
			
			// If the username and password doesn't match
			array_push($errors, "Username or password incorrect"); 
		}
	}
}

?>
