<html>
<head>
    <link rel="stylesheet" href="css/feedback.css"> 
    
    <link rel="stylesheet"    href="css/search.css">
</head>

<body>
    <div class="ak">
        <div class="aka">
            <form method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required> 
                <label for="number">Number:</label>
                <input type="text" id="number" name="number" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <input type="submit" name="submit" value="Send">
            </form>
        </div>
    </div>

    <?php
    // Include your database configuration file here
    include 'config.php';

    if(isset($_POST['submit'])){

        // Get the form data
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = mysqli_real_escape_string($conn, $_POST['number']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        // Insert the form data into the database
        $insert = "INSERT INTO contact (name, email, number, message) VALUES('$name','$email','$number','$message')";
        if(mysqli_query($conn, $insert)){
            echo "Comment added successfully";
        } else{
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
    ?> 
</body>
</html>
