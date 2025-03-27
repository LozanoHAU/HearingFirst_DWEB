<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hearingfirst";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$current_user_email = $_SESSION['logged_in_email'];

// Get data from the order_process table joined with product_details for the current user only
$sql = "SELECT 
            order_process.order_id, 
            order_process.address, 
            order_process.city, 
            order_process.province, 
            order_process.shipping, 
            order_process.quantity, 
            order_process.price_each, 
            order_process.price_total, 
            order_process.payment, 
            product_details.prod_name,
            product_details.prod_desc
        FROM order_process
        JOIN product_details ON order_process.prod_id = product_details.prod_id
        WHERE order_process.email = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $current_user_email);
$stmt->execute();
$result = $stmt->get_result();

$conn->close();
?>
