<?php
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Validate the credentials (replace this with your own logic)
    if ($username == "admin" && $password == "admin123") {
      // Redirect to a success page or perform any other actions
      header("location: .nav/sidenav.html");
      // echo "Login successful!";
    } else {
      // Invalid credentials, show an error message
      echo "Invalid username or password";
    }
  }
?>
