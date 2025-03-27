<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hearingfirst";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// AJAX request to get product price and user's money_held
if (isset($_GET['action']) && $_GET['action'] === 'getDetails') {
    $email = $_GET['email'];
    $order_id = $_GET['order_id'];

    // Get product price
    $sql = "SELECT prod_price FROM product_details WHERE prod_id = $order_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $prod_price = $row['prod_price'];

    // Get user's money_held
    $sql = "SELECT money_held FROM users_details WHERE email = '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $money_held = $row['money_held'];

    // Return the response
    echo json_encode([
        'prod_price' => $prod_price,
        'money_held' => $money_held
    ]);

    exit;
}

// For form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $prod_id = $_POST['order_id'];
    $quantity = $_POST['quantity'];
    $shipping = $_POST['shipping'];

    // Get the price of the product
    $sql = "SELECT prod_price, quantity FROM product_details WHERE prod_id = $prod_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $prod_price = $row['prod_price'];
        $prod_quantity = $row['quantity'];

        // Check if the product quantity will be negative after the order
        $new_prod_quantity = $prod_quantity - $quantity;
        if ($new_prod_quantity < 0) {
            echo "<script>alert('Error: The stock of the product is not available. There are only $prod_quantity quantities left.');window.history.back();</script>";
            exit;
        }

        // Get the user's details, including money_held, address, city, and province
        $sql = "SELECT money_held, address, city, province FROM users_details WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $money_held = $row['money_held'];
            $address = $row['address'];
            $city = $row['city'];
            $province = $row['province'];

            // Calculate for the new money_held after subtracting the total price
            $total_price = ($prod_price * $quantity) + 85;
            $new_money_held = $money_held - $total_price;

            // Check if the user has enough money
            if ($new_money_held < 0) {
                echo "<script>alert('Error: You do not have enough money to complete this order.');window.history.back();</script>";
                exit;
            }

            // Update the money_held in the users_details table
            $sql = "UPDATE users_details SET money_held = $new_money_held WHERE email = '$email'";
            $conn->query($sql);

            // Reduce the product quantity in product_details
            $sql = "UPDATE product_details SET quantity = $new_prod_quantity WHERE prod_id = $prod_id";
            $conn->query($sql);

            // Insert the order into the order_process table, including address, city, and province
            $sql = "INSERT INTO order_process (email, prod_id, address, city, province, shipping, quantity, price_each, price_total, payment) 
                    VALUES ('$email', $prod_id, '$address', '$city', '$province', '$shipping', $quantity, $prod_price, $total_price, $total_price)";
            $conn->query($sql);

            echo "<script>alert('Order completed successfully.');window.location.href = '../shop.php';</script>";
        }
    }
}

$conn->close();
?>