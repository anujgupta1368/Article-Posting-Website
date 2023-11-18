<!DOCTYPE html>
<html>
<head>
    <title>Article Details - Article Posting Website</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:wght@400;700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body id="animated-background">
    <header>
        <h1><span>ONE</span> FOR EVERYONE</h1>
    </header>
    <nav>
        <ul>
            <?php include 'nav.php' ?>
        </ul>
    </nav>
    <main>
        <?php include 'article_details_handler.php'; ?>
    </main>
    <footer>
        <p>&copy; 2023 Article Posting Website</p>
    </footer>
</body>
</html>
