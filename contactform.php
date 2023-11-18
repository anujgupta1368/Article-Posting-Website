<!DOCTYPE html>
<html>
<head>
    <title>Article Posting Website</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="contactform.css">
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
    <h2 style="text-align:center; margin-top:8.2vh" class="rec-art">Contact Form</h2>
    <div class="contact-right" style="margin-top:8.2vh">
        <form name="submit-to-google-sheet">
            <input type="text" name="Name" placeholder="Your Name" required>
            <input type="email" name="Email" placeholder="Your Email" required>
            <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
            <button type="submit" class="btn btn2 btn3" style="color:white">Submit</button>
        </form>
        <span id="msg"></span>
     </div>
    <footer style="margin-top:8.2vh">
        <p>&copy; 2023 Article Posting Website</p>
    </footer>
</body>
<script src="contactform.js"></script>
</html>
