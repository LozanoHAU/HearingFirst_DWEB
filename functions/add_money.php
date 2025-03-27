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
$bank_code = $conn->real_escape_string($_POST['bank_code']);
$amount = $conn->real_escape_string($_POST['amount']);
$email = $_SESSION['logged_in_email'];


// Check if $amount is a negative value
if ($amount < 0) {
    echo "<script>
            alert('Error: Amount cannot be negative.');
            window.history.back();
          </script>";
    exit();
}


// Check if the bank code matches
$check_bank_sql = "SELECT bank_code FROM users_details WHERE email = '$email' AND bank_code = '$bank_code'";
$result = $conn->query($check_bank_sql);

if ($result->num_rows > 0) {
    // Bank code matches, update the money_held
    $update_sql = "UPDATE users_details SET money_held = money_held + $amount WHERE email = '$email'";
    if ($conn->query($update_sql) === TRUE) {
        echo "<script>
                alert('Money added successfully');
                window.location.href = '../account.php'; // Redirect to account details page
              </script>";
    }
} else {
    // Bank code does not match, show error popup and go back
    echo "<script>
            alert('Error: Invalid bank code.');
            window.history.back();
          </script>";
}
$conn->close();
?>