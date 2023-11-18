<!DOCTYPE html>
<html>
<head>
    <title>Article Posting Website</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:wght@400;700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body id="animated-background">
    <div class="main">
    <header>
        <h1><span>ONE</span> FOR EVERYONE</h1>
    </header>
    <nav>
        <ul>
            <?php include 'nav.php'?> 
        </ul>
    </nav>
    <a href="contactform.php">
    <button class="btn btn-primary">need help?</button>
    </a>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="5000" style="width:65%; height:60vh; margin-left:36vh; margin-bottom:4vh">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="about/WhatsApp Image 2023-11-18 at 02.13.32.jpeg" alt="First slide" style="width:100%; height:60vh">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="about/WhatsApp Image 2023-11-18 at 02.14.25.jpeg" alt="Second slide" style="width:100%; height:60vh">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="about/WhatsApp Image 2023-11-18 at 02.23.48.jpeg" alt="Third slide" style="width:100%; height:60vh">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <main>
        <h2 style="margin-bottom:2vh; text-align:center" class="rec-art">Recent Articles</h2>
        <ul id="article-list" style="margin-bottom:44.5vh; list-style-type:none;">
            <?php
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'btp website');
            if ($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
            } else {
                // Query to fetch the most recent 10 articles
                $query = "SELECT id, title, img FROM articles ORDER BY created_at DESC LIMIT 10";
                $result = $conn->query($query);
                
                while ($row = $result->fetch_assoc()) {
                    // echo '<div class="rec-art"><li><a href="article_details.php?id=' . $row['id'] . '">' . $row['title'] . '</a></li></div>';
                    echo '<div class="card">
                    <img src="uploads/' . $row['img'] . ' "style=width:100%;" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">' . $row['title'] . '</h5>
                      <a href="article_details.php?id=' . $row['id'] . '" class="btn btn-primary">Read more...</a>
                    </div>
                  </div>';
                }

                $conn->close();
            }
            ?>
        </ul>
    </main>
    </div>
    <footer>
        <p>&copy; 2023 Article Posting Website</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
