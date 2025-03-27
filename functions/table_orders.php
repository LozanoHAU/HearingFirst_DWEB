<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hearingfirst";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the order_process table joined with users_details and product_details
$sql = "SELECT order_process.order_id, order_process.email, order_process.address, order_process.quantity, order_process.price_total, product_details.prod_name
FROM order_process
JOIN users_details ON order_process.email = users_details.email
JOIN product_details ON order_process.prod_id = product_details.prod_id";

$result = $conn->query($sql);

$conn->close();
?>