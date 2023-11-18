<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'btp website');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        // Query to fetch user data
        $query = "SELECT id, username, password FROM users WHERE username = ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            // Username exists, fetch data
            $stmt->bind_result($userId, $dbUsername, $dbPassword);
            $stmt->fetch();
            if ($password===$dbPassword) {
                // Password matches, create a user session
                session_start();
                $_SESSION['user_id'] = $userId;
                $_SESSION['username'] = $dbUsername;
                header("Location: index.php");
                exit;
            } else {
                // Password does not match
                echo "Incorrect password. Please try again.";
            }
        } else {
            // Username not found
            echo "Username not found. Please check your username or register if you haven't.";
        }

        $stmt->close();
        $conn->close();
    }
}
?>
