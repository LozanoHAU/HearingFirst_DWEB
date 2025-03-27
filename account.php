<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in_email'])) {
// Redirect to the login page if not logged in
header("Location: login.php");
exit();
}


$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "hearingfirst";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Get user details based on the logged-in email
$email = $conn->real_escape_string($_SESSION['logged_in_email']);
$sql = "SELECT * FROM users_details WHERE email = '$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About | Hearing First</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;600;700;800&family=Lekton:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="styles.css" type="text/css" />

        <link rel="shortcut icon" href="images/www.hearingfirst.co.uk.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="images/wwwhearingfirst.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/images/wwwhearingfirst.png">
        <link rel="icon" sizes="192x192" href="images/images/wwwhearingfirst.png">
        <title>User Details | Hearing First</title>
        <style>

        .user-details-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
        padding: 10px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin:15% 3%;
        margin-top:1%;
        margin-bottom:90px;
        }

        h1{
        font-size: 60px;
        margin-left: 53px;
        margin-bottom: -10px;
        }

        .grid-item {
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out;
        }

        .grid-item:hover {
        transform: translateY(-15px);
        }

        .grid-item h1 {
        margin: 0;
        font-size: 23px;
        color: #333;
        }

        .grid-item strong {
        color: #555;
        }

        #book-now-button-desktop{
            width:20%;
        }

        #addMoneyForm{
        width:100%;
        }

        #confirm_add{
        width:10%;font-family: 'Khula', sans-serif;background: #1D75BD;color:white;font-weight: 800;box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.25); cursor: pointer; transition: background-color 0.3s ease, box-shadow 0.3s ease;border-radius:3px;border: none;
        }

        label {

        margin-bottom: 5px;
        font-weight: bold;
        font-size:21px;
        }
        

        #appointmentTable, #ordersTable {
        width: 90%;
        margin: 0 auto; 
        padding: 20px;
        box-sizing: border-box;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        }

        th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }

        th {
        background-color:rgb(140, 185, 221);
        }

        tr:hover {
        background-color: #f9f9f9;
        }

        button {
        background-color: #ff4d4d;
        color: white;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 4px;
        }

        button:hover {
        background-color: #cc0000;
        }

        #deleteAccountModal #confirm_add{
            width:auto; 
            margin-left:15px;
        }

        .br_mobile{
        display:none;
        }


        /* MOBILE VIEW SPECIFICS FOR ACCOUNT */
        @media (min-width: 275px) and (max-width: 650px) {

        .nav-bar{
        visibility: hidden;
        }

        .user-details-grid {
        grid-template-columns: repeat(1, 1fr);
        gap: 4px;
        margin-bottom:10px;
        }


        .grid-item h1 {
        margin: 0;
        font-size: 14px;
        color: #333;
        }

        .grid-item strong {
        color: #555;
        font-size: 11px;
        }

        h1{
        font-size: 18px;
        text-align:center;
        margin: 0;
        margin-top: 30px;
        }

        .mobile{
        margin-top: 60px;
        }

        #book-now-button-desktop{
        font-size:14px;
        width:40%;
        height:auto;
        border-radius:3px;
        }


        #addMoneyForm{
        margin:0;
        padding:0;
        text-align:center;
        width:100%;
        
        }

        #addMoneyForm form{
        margin-right:auto;
        margin-left:auto;
        }

        #addMoneyForm label{
        font-size:15px;
        }

        #addMoneyForm input{
        width:60%;
        margin:30px auto;
        margin-top:10px;
        margin-left:50px;
        }

        #addMoneyForm button{
        width:auto;
        font-size:12px;
        }

        #deleteAccountModal label{
        font-size:19px;
        margin-bottom:45px;
        }

        #deleteAccountModal #confirm_add{
        width:auto;
        font-size:12px;
        }

        table{
        border-collapse: none;
        }

        table, thead, tbody, th, td, tr {
        display: block;
        }

  
        thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
        }

        tr {
        border: 1px solid #ccc;
        margin-bottom: 40px;
        }

        td {
        border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        padding-left: 50%;
        font-size:12px;
        }

        td:before {
        position: absolute;
        top: 6px;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
        color: black;
        font-weight: bold;
        padding: 5px;
        border-radius: 3px;
        content: attr(data-label);
        }


        #appointmentTable td:nth-of-type(1):before { content: "Staff Name"; }
        #appointmentTable td:nth-of-type(2):before { content: "Clinic Address"; }
        #appointmentTable td:nth-of-type(3):before { content: "Clinic Phone Number"; }
        #appointmentTable td:nth-of-type(4):before { content: "Which Ear"; }
        #appointmentTable td:nth-of-type(5):before { content: "Date"; }
        #appointmentTable td:nth-of-type(6):before { content: "Time"; }
        #appointmentTable td:nth-of-type(7):before { content: "Cancel"; }

       
        #ordersTable td:nth-of-type(1):before { content: "Product Name"; }
        #ordersTable td:nth-of-type(2):before { content: "Address"; }
        #ordersTable td:nth-of-type(3):before { content: "Quantity"; }
        #ordersTable td:nth-of-type(4):before { content: "Total Price"; }
        #ordersTable td:nth-of-type(5):before { content: "Date of Arrival"; }
        }




        @media (min-width: 650.1px) and (max-width: 1075px) {


        p {
        font-size: 16px;
        }

        strong {
        font-size: 14px;
        }

        .user-details-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        margin:1% 3%;
        margin-top:5%;
        gap: 20px;
        }

        .grid-item {
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out;
        }

        .grid-item:hover {
        transform: translateY(-15px);
        }

        .grid-item h1 {
        margin: 0;
        font-size: 15px;
        color: #333;
        }

        .grid-item strong {

        font-size: 18px;

        }

        h1{
        font-size: 38px;
        text-align:center;
        margin: 0;
        margin-top: 30px;
        }

        .mobile{
        margin-top: 65px;
        }

        .book-now-button{
        font-size:16px;
        width:auto;
        height:auto;
        padding:8px;
        border-radius:4px;
        }

        #addMoneyForm{
        margin:0;
        padding:0;
        text-align:center;
        width:100%;
        
        }

        #addMoneyForm form{
        margin-right:auto;
        margin-left:auto;
        }

        #addMoneyForm label{
        font-size:15px;
        }

        #addMoneyForm input{
        width:60%;
        margin:30px auto;
        margin-top:10px;
        margin-left:50px;
        }

        #addMoneyForm button{
        width:auto;
        }

        #deleteAccountModal #confirm_add{
        width:auto;
        }

        table{
        border-collapse: none;
        }

        table, thead, tbody, th, td, tr {
        display: block;
        }

        thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
        }

        tr {
        border: 1px solid #ccc;
        margin-bottom: 40px;
        }

        td {
        border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        padding-left: 50%;
        }

        td:before {
        position: absolute;
        top: 6px;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
        color: black; 
        font-weight: bold;
        padding: 5px;
        border-radius: 3px;
        content: attr(data-label);
        }

        /* Add data-label attributes to each td */
       
        #appointmentTable td:nth-of-type(1):before { content: "Staff Name"; }
        #appointmentTable td:nth-of-type(2):before { content: "Clinic Address"; }
        #appointmentTable td:nth-of-type(3):before { content: "Clinic Phone Number"; }
        #appointmentTable td:nth-of-type(4):before { content: "Which Ear"; }
        #appointmentTable td:nth-of-type(5):before { content: "Date"; }
        #appointmentTable td:nth-of-type(6):before { content: "Time"; }
        #appointmentTable td:nth-of-type(7):before { content: "Cancel"; }

       
        #ordersTable td:nth-of-type(1):before { content: "Product Name"; }
        #ordersTable td:nth-of-type(2):before { content: "Address"; }
        #ordersTable td:nth-of-type(3):before { content: "Quantity"; }
        #ordersTable td:nth-of-type(4):before { content: "Total Price"; }
        #ordersTable td:nth-of-type(5):before { content: "Date of Arrival"; }

        
        .br_mobile{
        display:block;
        }
        }
        </style>

        
        <script>
        
        function toggleAddMoneyForm() {
        var form = document.getElementById('addMoneyForm');
        form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
        }

        function showAppointments() {
        var table_appoint = document.getElementById("appointmentTable");
        table_appoint.style.display = (table_appoint.style.display === 'none' || table_appoint.style.display === '') ? 'block' : 'none';
        }

        function showOrders() {
        var table_orders = document.getElementById("ordersTable");
        table_orders.style.display = (table_orders.style.display === 'none' || table_orders.style.display === '') ? 'block' : 'none';
        }

        function confirmDeletewarning() {
        return confirm("Are you sure you want to cancel this appointment?");
        }

        function confirmDelete() {
        document.getElementById('deleteAccountModal').style.display = 'block';
        }

        function deleteAccount() {
        var password = document.getElementById('passwordInput').value;
        if (password) {
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "functions/delete_account.php");

        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "password");
        hiddenField.setAttribute("value", password);

        form.appendChild(hiddenField);
        document.body.appendChild(form);
        form.submit();
        } else {
        alert("Please enter your password.");
        }
        }

        function cancelDelete() {
        document.getElementById('deleteAccountModal').style.display = 'none';
        }

        function confirmLogout() {
        return confirm("Are you sure you want to logout?");
        }

        </script>
    
    </head>
    <body>
        <header>
            <div class="blue-box">
                <?php
                    if (isset($_SESSION['logged_in_email'])) {
                    echo '<span class="text">' . htmlspecialchars($_SESSION['logged_in_email']) . '</span>';
                    } else {
                    echo '<a href="login.php" class="text"><span>Login / Register</span></a>';
                    }
                ?>
                &nbsp;
                <span class="dot"></span>
                <span class="call-us"><a href="tel:09213167699" style="color: white; text-decoration:none;">Call Us! : 09213167699</a></span>
            </div>

            <div class="white-box"> 
                <img src="images/cropped-Hearing-First-Logo-For-Web.png" alt="Hearing First.logo">
                <div class="nav-bar">

                <ul class="nav-links">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="service.php">SERVICES</a></li>
                    <li><a href="shop.php">PRODUCTS</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <?php
                    if (isset($_SESSION['logged_in_email'])) {
                        echo '<a href="account.php"><li id="mobile-login" style="text-align: left; margin-left:-10px;">ACCOUNT</li></a>';
                    } else {
                        echo '<a href="login.php"><li id="mobile-login" style="text-align: left; margin-left:-9px;">LOGIN</li></a>';
                    }
                    ?>

                </ul>

                    <a href="earwax_removal.php" style="text-decoration: none;">
                    <div class="book-now-button">BOOK NOW</div></a>

                </div>
            </div>

        </header>


        <main>
        <div class="white-box-with-stroke" style="height: auto;">

        <div class="blue-box-under-stroke">
        <p>ACCOUNT</p>
        </div>

        <h1>User Details</h1>
        <div class="user-details-grid">
        <div class="grid-item">
        <h1><strong>First Name:</strong> <?php echo htmlspecialchars($row['first_name']); ?></h1>
        </div>
        <div class="grid-item">
        <h1><strong>Last Name:</strong> <?php echo htmlspecialchars($row['last_name']); ?></h1>
        </div>
        <div class="grid-item">
        <h1><strong>Age:</strong> <?php echo htmlspecialchars($row['age']); ?></h1>
        </div>
        <div class="grid-item">
        <h1><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></h1>
        </div>
        <div class="grid-item">
        <h1><strong>Phone Number:</strong> <?php echo htmlspecialchars($row['phone_num']); ?></h1>
        </div>
        <div class="grid-item">
        <h1><strong>Address:</strong> <?php echo htmlspecialchars($row['address']); ?></h1>
        </div>
        <div class="grid-item">
        <h1><strong>City:</strong> <?php echo htmlspecialchars($row['city']); ?></h1>
        </div>
        <div class="grid-item">
        <h1><strong>Province:</strong> <?php echo htmlspecialchars($row['province']); ?></h1>
        </div>
        <div class="grid-item">
        <h1><strong>Zip Code:</strong> <?php echo htmlspecialchars($row['zipcode']); ?></h1>
        </div>
        </div>

        <h1 class="mobile">Account Details</h1>
        <div class="user-details-grid" style="box-shadow:none; margin-bottom:10px; grid-template-columns: repeat(2, 1fr);">
        <div class="grid-item">
        <h1><strong>Type of Payment:</strong> <?php echo htmlspecialchars($row['payment_type']); ?></h1>
        </div>
        <div class="grid-item">
        <h1><strong>Money Held:</strong> <?php echo '₱ ' .  htmlspecialchars(number_format($row['money_held'], 2)); ?></h1>
        </div>
        </div>

        <div class="book-now-button" id ="book-now-button-desktop" style="margin:40px auto 40px auto;" onclick="toggleAddMoneyForm()">Add Money</div>
        <div id="addMoneyForm" style="display:none; text-align:center;margin-bottom:40px">
        <form action="functions/add_money.php" method="POST">
            <label for="bank_code">Bank Code:</label> <br class ="br_mobile">

            <input type="text" id="bank_code" name="bank_code" required style="margin-right:50px;"> <br class ="br_mobile">

            <label for="amount">Amount to Add:</label><br class ="br_mobile">

            <input type="number" id="amount" name="amount" required style="margin-right:50px;"> <br class ="br_mobile">
            
            <button type="submit" id="confirm_add">Confirm</button>
        </form>
        </div>


        <?php
        require 'functions/table_appointment.php';
        ?>

        
        <div class="book-now-button" id ="book-now-button-desktop" style="margin:0px auto 40px auto;" onclick="showAppointments()">Appointments</div>
        <div id="appointmentTable" style="display:none; margin-top:-30px;margin-bottom:30px;">
        <h2>Appointments</h2>
        <table>
            <thead>
                <tr>
                    <th>Staff Name</th>
                    <th>Clinic Address</th>
                    <th>Clinic Phone Number</th>
                    <th>Which Ear</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Cancel</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>{$row['staff_name']}</td>
                    <td>{$row['clinic_address']}</td>
                    <td>{$row['assigned_phone_number']}</td>
                    <td>{$row['which_ear']}</td>
                    <td>{$row['date']}</td>
                    <td>{$row['time']}</td>
                    <td>
                    <form method='post' onsubmit='return confirmDeletewarning()'>
                    <input type='hidden' name='delete_id' value='{$row['earcleaning_id']}'>
                    <button type='submit'>Confirm</button>
                    </form>
                    </td>
                    </tr>";
                    }
                    } else {
                    echo "<tr><td colspan='7'>No appointments found.</td></tr>";
                    }
                ?>
            </tbody>
        </table>
        <hr style="margin-top:30px;"/>
        </div>


        <?php require 'functions/table_orders.php';?>

        <div class="book-now-button" id ="book-now-button-desktop" style="margin:0px auto 40px auto;" onclick="showOrders()">Orders</div>
        <div id="ordersTable" style="display:none; margin-top:-30px;margin-bottom:30px;">
            <h2>Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Address</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Date of Arrival</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <td>{$row['prod_name']}</td>
                                <td>{$row['address']}</td>
                                <td>{$row['quantity']}</td>
                                <td>₱ " . number_format($row['price_total'], 2) . "</td>
                                <td>PENDING</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No orders found.</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
            <hr style="margin-top:30px;"/>
        </div>


        <a href="functions/logout.php" onclick="return confirmLogout()">
        <div class="book-now-button" id ="book-now-button-desktop" style="margin:0px auto 40px auto;">Logout</div>
        </a>

        <div class="book-now-button" id ="book-now-button-desktop" style="margin:0px auto 20px auto;color:#ff4d4d;" onclick="confirmDelete()">Delete Account</div>
        <div id="deleteAccountModal" style="display:none; text-align:center; width:100%; margin-top:50px; margin-bottom:20px;">
        <label style="color:#ff4d4d;">Please enter your password to confirm account deletion:</label><br><br>
        <input type="password" id="passwordInput" placeholder="Password" required>
        <button onclick="deleteAccount()" id="confirm_add">Confirm</button>
        <button onclick="cancelDelete()" id="confirm_add">Cancel</button>
        </div>
        <div style="height:30px; width:100%"></div>
        </div>

        </main>

        <script src="script.js"></script>

        <footer>
        <svg width="100%" height="auto" viewBox="0 0 1200 200" xmlns="http://www.w3.org/2000/svg">
        <image href="images/footerpage_final.png" width="1200" height="200" alt="@ Hearing First" />
        <a href="index.php"><rect x="515" y="50" width="50" height="25" fill="transparent" /></a>
        <a href="service.php"><rect x="580" y="50" width="65" height="25" fill="transparent" /></a>
        <a href="shop.php"><rect x="667" y="50" width="73" height="25" fill="transparent" /></a>
        <a href="about.php"><rect x="765" y="50" width="65" height="25" fill="transparent" /></a>
        

        <a href="https://www.youtube.com/c/HearingFirst" target="_blank"><rect x="515" y="125" width="40" height="30" fill="transparent" /></a>
        <a href="https://www.facebook.com/HearingFirstUK/" target="_blank"><rect x="560" y="125" width="40" height="30" fill="transparent" /></a>
        <a href="https://x.com/hearingfirstuk" target="_blank"><rect x="605" y="125" width="40" height="30" fill="transparent" /></a>

        <a href="mailto:hearingfirst.co.ok@gmail.com"><rect x="970" y="110" width="190" height="45" fill="transparent" /></a>
        <a href="tel:09213167699"><rect x="970" y="55" width="190" height="45" fill="transparent" /></a>

        <a href="index.php"><rect x="58" y="30" width="380" height="120" fill="transparent" /></a>
        </svg>
        </footer>
    </body>
</html>