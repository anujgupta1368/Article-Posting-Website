<?php
// Check if the article ID is provided in the URL
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'btp website');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        // Query to fetch the article details by ID
        $query = "SELECT title, content, img FROM articles WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $article_id);
        $stmt->execute();
        $stmt->bind_result($title, $content, $img);

        // Fetch and display article details
        if ($stmt->fetch()) {
            // echo '<img>' . $img . '<img>';
            // echo '<h2>' . $title . '</h2>';
            // echo '<p>' . $content . '</p>';
            echo '<div>
                    <h1 style="text-align:center; font-family: Playfair Display, serif; font-size:40px; margin-bottom:4vh;">' . $title . '</h1>
                    <img src="uploads/' . $img . ' "style=width:100%;" class="card-img-top" alt="...">
                    <div>
                      <p style="margin-top: 10px; font-family: Playfair Display, serif; font-size:20px">' .$content. '</p>
                    </div>
                  </div>';
        } else {
            echo 'Article not found.';
        }

        $stmt->close();
        $conn->close();
    }
} else {
    echo 'Article ID not provided.';
}
?>
