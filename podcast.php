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
    </div>
    <form id="form">
    <div class="search" style="width:50%; margin-left:25%">
            <input type="text" id="search-box" placeholder="Search any podcast">
            <button id="search-button" style="margin-left:4px">Search</button>
        </div>
    <div>
    <div class="row">
        <div class="col">
            <div id="videos">
            </div>
        </div>
    </div>
    </form>
    <h2 style="margin-bottom:2vh; text-align:center" class="rec-art">Recommended Podcasts</h2>
    <iframe width="33%" height="315" src="https://www.youtube.com/embed/tGLt7apJWS0?si=BVU88LPRbxS7omw2"></iframe>
    <iframe width="33%" height="315" src="https://www.youtube.com/embed/7n9IOH0NvyY?si=w2BdKSOBGPNJ2q1J"></iframe>
    <iframe width="33%" height="315" src="https://www.youtube.com/embed/sVo-sCPR5CA?si=VoNkKpc25hGQsw-z"></iframe>
    <iframe width="33%" height="315" src="https://www.youtube.com/embed/EC8iayukJuY?si=Z12uBNSAL8m_NcU4"></iframe>
    <iframe width="33%" height="315" src="https://www.youtube.com/embed/QjbnSAgeW6c?si=nstWHsUmbGBSohFN"></iframe>
    <iframe width="33%" height="315" src="https://www.youtube.com/embed/gy_-JQCyzlY?si=tEwdvHJrY4xOZ0np"></iframe>
    </div>
    <footer>
        <p>&copy; 2023 Article Posting Website</p>
    </footer>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="podcast.js"></script>
</html>
