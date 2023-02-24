<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the email address from the form
  $email = $_POST['email'];

  // Check if the email exists in the database
  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "user_db");

  // Query to check if the email exists
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $query);

  // If the email exists
  if (mysqli_num_rows($result) == 1) {
    // Generate a new password
    $new_password = substr(md5(rand()), 0, 7);

    // Update the password in the database
    $user_db= "UPDATE users SET password='$user_form' WHERE email='$email'";
    mysqli_query($conn, $user_db);

    // Send the new password to the email address
    $to = $email;
    $subject = "Password Recovery";
    $message = "Your new password is: " . $new_password;
    $headers = "From: no-reply@example.com";
    mail($to, $subject, $message, $headers);

    // Show a message that the password has been sent to the email address
    echo "A new password has been sent to your email address.";
  } else {
    // Show an error message if the email doesn't exist
    echo "The email address doesn't exist.";
  }

  // Close the database connection
  mysqli_close($conn);
}

?>

<!-- The password recovery form -->
<form action="" method="post">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <input type="submit" name="submit" value="Submit">
</form>
