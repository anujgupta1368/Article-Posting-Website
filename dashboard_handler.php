<?php

if (isset($_SESSION['user_id'])) {
    // User is logged in
    $user_id = $_SESSION['user_id'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'btp website');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        // Query to fetch the user's articles
        $query = "SELECT id, title, content, img FROM articles WHERE user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">
                    <img src="uploads/' . $row['img'] . ' "style=width:100%;" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">' . $row['title'] . '</h5>
                      <p>' . $row['content'] . '</p>
                      <a href="delete_article.php?id=' . $row['id'] . '" class="btn btn-primary">Delete</a>
                    </div>
                  </div>';
        }
        

        $stmt->close();
        $conn->close();
    }
    
} else {
    // User is not logged in, redirect to the login page
    header("Location: login.html");
    exit;
}
?>
