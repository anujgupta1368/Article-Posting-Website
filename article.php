<!DOCTYPE html>
<html>
<head>
    <title>Article Posting Website - Articles</title>
    <link rel="stylesheet" type="text/css" href="styles1.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body id="animated-background">
    <header>
        <h1><span>ONE</span> FOR EVERYONE</h1>
    </header>
    <nav>
        <ul style="margin-bottom:1vh">
            <?php include 'nav.php' ?>
        </ul>
    </nav>
    <main>
        <h2 style="margin-bottom:2vh; text-align:center">Article List</h2>
        <div class="search">
            <input type="text" id="search-box" placeholder="Search by article name">
            <button id="search-button" style="margin-left:4px">Search</button>
        </div>
        <ul id="article-list" style="margin-bottom:37.5vh; ">
            <?php include 'article_handler.php'; ?>
        </ul>
    </main>
    <footer style="margin-top:1vh">
        <p>&copy; 2023 Article Posting Website</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
