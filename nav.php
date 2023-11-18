<?php   
           echo '<li><a href="index.php">Home</a></li>
                 <li><a href="article.php">Articles</a></li>
                 <li><a href="podcast.php">Podcast</a></li>';
           session_start();
            
           if (isset($_SESSION['user_id'])) {
               // User is logged in, display "Dashboard" and "Logout"
               echo '<li><a href="dashboard.php">Dashboard</a></li>';
               echo '<li><a href="logout.php">Logout</a></li>';
           } else {
               // User is not logged in, display "Login" and "Register"
               echo '<li><a href="login.html">Login</a></li>';
               echo '<li><a href="register.html">Register</a></li>';
           }
           echo '<li><a href="about.php">About us</a></li>'
           ?>