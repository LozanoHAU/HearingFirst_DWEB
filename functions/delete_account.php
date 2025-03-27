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


$email = $_SESSION['logged_in_email'];
$user_password = $conn->real_escape_string($_POST['password']);

// Verify password
$check_password_sql = "SELECT password FROM users_details WHERE email = '$email'";
$result = $conn->query($check_password_sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($user_password, $row['password'])) {

        // Delete related records in `earcleaning_process` first
        $delete_earcleanings_sql = "DELETE FROM earcleaning_process WHERE user_email = '$email'";

        if ($conn->query($delete_earcleanings_sql) === TRUE) {

            // Delete related records in `order_process` second
            $delete_orders_sql = "DELETE FROM order_process WHERE email = '$email'";

            if ($conn->query($delete_orders_sql) === TRUE) {
                // Step 3: Delete the user from `users_details` third
                $delete_user_sql = "DELETE FROM users_details WHERE email = '$email'";

                if ($conn->query($delete_user_sql) === TRUE) {
                    echo "<script>
                    alert('Account deleted');
                    </script>";
                    session_destroy();
                    header("Location: ../index.php");
                    exit();
                }
            } 
        }
    } else {
        echo "<script>
                alert('Error: Incorrect password');
                window.history.back();
              </script>";
    }
} 
$conn->close();
?>