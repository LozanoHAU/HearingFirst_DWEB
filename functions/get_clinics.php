<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hearingfirst";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$area = $_GET['area'];
$sql = "SELECT * FROM clinics_details WHERE area = '$area'";
$result = $conn->query($sql);

$clinics = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $clinics[] = $row;
    }
}

echo json_encode($clinics);
$conn->close();
?>

