<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hearingfirst";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Get data from the earcleaning_process table joined with users_details, staff_details, and clinics_details
$email = $conn->real_escape_string($_SESSION['logged_in_email']);
$sql = "SELECT earcleaning_process.earcleaning_id, earcleaning_process.which_ear, earcleaning_process.date, earcleaning_process.time, staff_details.staff_name, clinics_details.clinic_address, clinics_details.assigned_phone_number
FROM earcleaning_process
JOIN staff_details ON earcleaning_process.staff_id = staff_details.staff_id
JOIN clinics_details ON earcleaning_process.clinic_id = clinics_details.clinic_id
WHERE earcleaning_process.user_email = '$email'";

$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_id"])) {
    // Delete the appointment and refund the user
    $delete_id = $_POST["delete_id"];
    $sql_delete = "DELETE FROM earcleaning_process WHERE earcleaning_id = $delete_id AND user_email = '$email'"; // Also add email check for security
    
    if ($conn->query($sql_delete) === TRUE) {
        $sql_refund = "UPDATE users_details SET money_held = money_held + 3200 WHERE email = '$email'";
        $conn->query($sql_refund);
        echo "<script>alert('Appointment has been cancelled and ₱ 3200 has been refunded.');window.location.href = 'account.php';</script>";
    }
}
$conn->close();
?>
