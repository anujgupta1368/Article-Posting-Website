<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'btp website');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    // Query to fetch all articles from the database
    $query = "SELECT id, title, img FROM articles";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // Output articles as list items
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">
            <img src="uploads/' . $row['img'] . ' "style=width:100%;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">' . $row['title'] . '</h5>
              <a href="article_details.php?id=' . $row['id'] . '" class="btn btn-primary">Read more...</a>
            </div>
          </div>';
        }
    } else {
        echo 'No articles available.';
    }

    $conn->close();
}
?>
