<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "hearingfirst";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect input data
$email = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

// Check if email already exists
$sql = "SELECT email, password FROM users_details WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Email exists, then verify password
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    if (password_verify($password, $hashed_password)) {
        // Password is correct, login successful
        $_SESSION['logged_in_email'] = $email; // Store email in session
        echo "<script>
                alert('Login successful!');
                window.location.href = '../index.php'; // Redirect to dashboard or another page
              </script>";
    } else {
        // Password is incorrect, show error popup
        echo "<script>
                alert('Login failed: Incorrect password.');
                window.history.back();
              </script>";
    }
} else {
    // Email does not exist, show error popup
    echo "<script>
            alert('Login failed: Email not found.');
            window.history.back();
          </script>";
}

$conn->close();
?>