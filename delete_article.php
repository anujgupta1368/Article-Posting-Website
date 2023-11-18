<?php
session_start();

if (isset($_SESSION['user_id'])) {
    if (isset($_GET['id'])) {
        $article_id = $_GET['id'];

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'btp website');
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        } else {
            $user_id = $_SESSION['user_id'];

            // Query to delete the article
            $query = "DELETE FROM articles WHERE id = ? AND user_id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ii", $article_id, $user_id);

            if ($stmt->execute()) {
                // Article deletion successful
                header("Location: dashboard.php");
                exit;
            } else {
                // Article deletion failed
                echo "Article deletion failed. Please try again.";
            }

            $stmt->close();
            $conn->close();
        }
    }
} else {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}
