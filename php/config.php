<?php 

	session_start();

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "uneswa";

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


	if (isset($_POST['create'])) {

		//echo "Successfully connected to the database";
	

		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$psw = mysqli_real_escape_string($conn, $_POST['psw']);
		$psw_repeat = mysqli_real_escape_string($conn, $_POST['psw_repeat']);
		
	

		//Error handlers

		//Checks for empty fields

	if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($psw) || empty($psw_repeat)) {

			echo "<script>alert('fill in all required details, please');</script>";
			
			exit();

			//Checks if whether data enter in firstname and last name is valid

		} elseif (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {

            echo "<script type='text/javascript'>alert('firstname or lastname not valid');</script>";
				
				exit();

				//Validates email
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                echo "<script type='text/javascript'>alert('invalid email');</script>";

					exit(); 
				
					// checks if usename exist already exists in the database
							$sql = "SELECT * FROM students WHERE username='$username'";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);

				} elseif ($resultCheck > 0) {
							// checks if usename exist already exists in the database
							$sql = "SELECT * FROM students WHERE username='$username'";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);

                            echo "<script type='text/javascript'>alert('username taken, please enter another username');</script>";
								exit(); 
						
						
						// checks whether 2 passwords match
					} elseif($_POST['psw'] != $_POST['psw_repeat']) {

                        echo "<script type='text/javascript'>alert('passwords entered do not match');</script>";

							exit();
					
							} else{
										//hashes the passwords
										$hashedPwrd = md5($psw);
										$hashedPass = md5($psw_repeat);
										$sql1 = "INSERT INTO students (firstname, lastname, username, email, psw, psw_repeat) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashedPwrd', '$hashedPass')";
										//connects to the database
										 mysqli_query($conn, $sql1);
										 $_SESSION['username'] = $username;
										 $_SESSION['success'] = "You are now logged in";
										 header("Location: ../landing.php");
										
									}
								
								
	} 

	// handles the login
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$hashedPass = mysqli_real_escape_string($conn, $_POST['psw']);

		// checks if fields are empty
		if (empty($username) || empty($hashedPass)) {
			echo "<script>alert('username or password not filled in');</script>";

			exit();

			$query = "SELECT * FROM students WHERE username = '$username' AND psw = '$hashedPass'";
			$result1 = mysqli_query($conn, $query);
			$resultCheck2 = mysqli_num_rows($result1);
		} elseif ($resultCheck2 == 1) {
			//login user
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header("Location: ../landing.php");
		} else {
			echo "<script>alert('User does not exist');</script>";
			header("Lcation: login.php");
		}
			
		}
	}
	
	//handles the logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("Location: index.html");
		exit();
	} 
		

 ?>

