    <?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        // User is logged in
        if (isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['img'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $user_id = $_SESSION['user_id'];
    
            // Check if an image file was uploaded
            if ($_FILES['img']['error'] === 0) {
                $fileName = $_FILES['img']['name'];
                $tmpName = $_FILES['img']['tmp_name'];
    
                // Verify if the file has a valid extension
                $validImageExtensions = ['jpg', 'jpeg', 'png'];
                $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    
                if (in_array($extension, $validImageExtensions)) {
                    // Generate a unique name for the image
                    $newImageName = uniqid() . '.' . $extension;
    
                    // Move the uploaded file to the desired directory
                    if (move_uploaded_file($tmpName, 'uploads/' . $newImageName)) {
                        // Database connection
                        $conn = new mysqli('localhost', 'root', '', 'btp website');
                        if ($conn->connect_error) {
                            die("Connection Failed: " . $conn->connect_error);
                        }
    
                        // Insert the article into the database
                        $query = "INSERT INTO articles (title, content, user_id, img) VALUES (?, ?, ?, ?)";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("ssis", $title, $content, $user_id, $newImageName);
    
                        if ($stmt->execute()) {
                            // Article creation successful
                            header("Location: dashboard.php");
                            exit;
                        } else {
                            // Article creation failed
                            echo "Article creation failed. Please try again.";
                        }
    
                        $stmt->close();
                        $conn->close();
                    } else {
                        echo "Error uploading the image.";
                    }
                } else {
                    echo "Invalid image file format. Allowed formats: jpg, jpeg, png.";
                }
            } else {
                echo "Error uploading the image.";
            }
        } else {
            echo "Title, content, and an image are required.";
        }
    } else {
        // User is not logged in, redirect to the login page
        header("Location: login.html");
        exit;
    }
        ?>
