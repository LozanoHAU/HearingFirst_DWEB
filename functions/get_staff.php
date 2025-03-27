<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hearingfirst";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$clinic_id = $_GET['clinic_id'];
$sql = "SELECT * FROM staff_details WHERE assigned_clinic = $clinic_id";
$result = $conn->query($sql);

$staff = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $staff[] = $row;
    }
}

echo json_encode($staff);
$conn->close();
?>