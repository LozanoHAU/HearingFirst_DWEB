<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hearingfirst";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect input data
$first_name = $conn->real_escape_string($_POST['first_name']);
$last_name = $conn->real_escape_string($_POST['last_name']);
$age = $conn->real_escape_string($_POST['age']);
$email = $conn->real_escape_string($_POST['email']);
$password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT); // Hash the password
$phone_num = $conn->real_escape_string($_POST['phone_num']);
$address = $conn->real_escape_string($_POST['address']);
$city = $conn->real_escape_string($_POST['city']);
$province = $conn->real_escape_string($_POST['province']);
$zipcode = $conn->real_escape_string($_POST['zipcode']);
$payment_type = $conn->real_escape_string($_POST['payment_type']);
$bank_code = $conn->real_escape_string($_POST['bank_code']);
$money_held = $conn->real_escape_string($_POST['money_held']);

// Check if email already exists within the database
$check_email_sql = "SELECT email FROM users_details WHERE email = '$email'";
$result = $conn->query($check_email_sql);

if ($result->num_rows > 0) {
    // If email already exists, show error
    echo "<script>
            alert('Error: The email is already taken.');
            window.history.back();
          </script>";
} else {
    // Insert data into the table
    $sql = "INSERT INTO users_details (first_name, last_name, age, email, password, phone_num, address, city, province, zipcode, payment_type, bank_code, money_held)
            VALUES ('$first_name', '$last_name', '$age', '$email', '$password', '$phone_num', '$address', '$city', '$province', '$zipcode', '$payment_type', '$bank_code', '$money_held')";
    $conn->query($sql);
    echo "<script>
    alert('New record created successfully');
    window.location.href = '../login.php';
    </script>";
    
}
$conn->close();
?>
