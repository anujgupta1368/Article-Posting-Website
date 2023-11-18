<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'btp website');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		// Check if the username is already registered
		$checkUserQuery = "SELECT id FROM users WHERE username = ?";
		$stmt = $conn->prepare($checkUserQuery);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$stmt->store_result();

		// Check if the email is already registered
		$checkEmailQuery = "SELECT id FROM users WHERE email = ?";
		$stmt2 = $conn->prepare($checkEmailQuery);
		$stmt2->bind_param("s", $email);
		$stmt2->execute();
		$stmt2->store_result();

		if ($stmt->num_rows > 0) {
			// Username is already registered
			echo "Username is already registered.";
		} elseif ($stmt2->num_rows > 0) {
			// Email is already registered
			echo "Email is already registered.";
		} else {
			// No existing record, proceed with registration
			$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
			$stmt->bind_param("sss", $username, $email, $password);
			$execval = $stmt->execute();
			$stmt->close();
			$conn->close();

			if ($execval) {
				// Registration successful, redirect to the home page
				header("Location: index.php");
				exit;
			} else {
				// Handle registration failure
				echo "Registration failed...";
			}
		}

		$stmt->close();
		$stmt2->close();
		$conn->close();
	}
?>
