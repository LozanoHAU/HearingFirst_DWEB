<!DOCTYPE html>
<html lang="en">
        <head>
        <title>Ear Wax Removal | Hearing First</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;600;700;800&family=Lekton:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <?php session_start(); ?>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <style>

        /* Video Player */
        iframe {
        width: 100%;
        height: 100vh;
        border: none;
        overflow: hidden;
        }

        .iframe-container {
        position: relative;
        padding-bottom: 26.25%;
        height: 10px;
        display: flex;
        justify-content: center;
        }

        .iframe-container iframe {
        top: 0;
        width: 80%;
        height: 100%;
        margin: 70px auto;
        position: absolute;
        z-index: 10;
        margin-top: 10px;
        }


        /* THE BLUE BOX WITH OF THE REMINDERS FOR EAR WAX REMOVAL */
        .reminder {
        background-color: #4C92FD;
        height: auto;
        padding-bottom: 15px;
        width: 100%;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
        }

        h2 {
        font-size: 40px;
        text-align: left;
        padding-top: 30px;
        margin-bottom: -10px;
        margin-left: 45px;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px gray;
        }


        ol{
        font-weight: lighter;
        font-size: 20px; 
        color: white;
        margin-left: 29px;
        margin-right: 29px;
        text-align: left;
        text-shadow: 2px 2px gray;
        }

        li{
        margin-top: 20px;
        }


        .white-box-with-stroke h1 {
        font-size: 64px;
        text-align: center;
        margin: 60px 7%;
        margin-bottom: -1px;
        }


        .calendar {
        background-color:rgb(223, 236, 255);
        color: white;
        width: 90%;
        border: 1px solid black;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-left: auto;
        margin-right: auto;
        
        }


        .month {
        margin-top: 0;
        font-size: 64px;
        text-align: center;
        margin-bottom: 0;
        padding-top: 20px;
        font-weight: bold;
        background-color: black;
        letter-spacing: 7px;
        height: auto;
        }

        form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        width: 90%;
        margin: 30px auto;
        }

        label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color:black;
        }

        input, select {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        }

        input[type="submit"] {
        grid-column: span 2;
        padding: 10px;
        background-color:rgb(105, 165, 255);
        color: white;
        border: none;
        cursor: pointer;
        font-weight:bold;
        font-size:20px;
        width:70%;
        margin:20px auto;
        margin-bottom:5px;
        }

        input[type="submit"]:hover {
        background-color:rgb(76, 146, 252);}


        #remember-reminder {
        font-size: 48px;
        }

        #reminder-ol{
        color: black; 
        font-weight:bold; 
        text-shadow: 0 0 black; 
        margin-left: 39px; 
        margin-right: 39px;
        }




        /* MOBILE VIEW SPECIFICS FOR EARWAX_REMOVAL */

        @media (min-width: 275px) and (max-width: 650px) {


        .nav-bar{
        visibility: hidden;
        }


        .reminder{
        margin-top: -60px;
        }
        .reminder h2, .reminder #remember-reminder{
        font-size: 24px;
        margin-right: 25px;
        }

        .reminder ol{
        font-size: 14px;
        }

        #reminder-ol{
        margin-left: auto; 
        margin-right: 35px;
        }


        #mobile-head, .iframe-container {
        display: none;
        }

        .month{
            font-size:16px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        label{
            font-size:13px;
        }
        }


        /* TABLET VIEW SPECIFICS FOR EARWAX_REMOVAL */

        @media (min-width: 650.1px) and (max-width: 1075px) {


        .reminder{
        margin-top: -60px;
        }

        .reminder h2, .reminder #remember-reminder{
        font-size: 24px;
        margin-right: 25px;
        }

        .reminder ol{
        font-size: 14px;
        }

        #reminder-ol{
        margin-left: auto; 
        margin-right: 35px;
        }


        #mobile-head {
        font-size: 30px;
        }

        .iframe-container{
        margin-bottom: 70px;
        }

        .month{
            font-size:34px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        }

        </style>

        <script>
        // Load clinics based on the selected area
        function loadClinics() {
            const area = document.getElementById("area").value;
            fetch(`functions/get_clinics.php?area=${area}`)
            .then(response => response.json())
            .then(data => {
            const clinicDropdown = document.getElementById("clinic_id");
            clinicDropdown.innerHTML = "<option value=''>Select a clinic</option>";
            data.forEach(clinic => {
            clinicDropdown.innerHTML += `<option value='${clinic.clinic_id}'>${clinic.clinic_address} (${clinic.clinic_zipcode})</option>`;
            });
            });
        }

        // Load staff based on the selected clinic
        function loadStaff() {
            const clinic_id = document.getElementById("clinic_id").value;
            fetch(`functions/get_staff.php?clinic_id=${clinic_id}`)
            .then(response => response.json())
            .then(data => {
            const staffDropdown = document.getElementById("staff_id");
            staffDropdown.innerHTML = "<option value=''>Select a staff member</option>";
            data.forEach(staff => {
            staffDropdown.innerHTML += `<option value='${staff.staff_id}'>${staff.staff_name}</option>`;
            });
            });
        }

        // Set the minimum date for the date input
        function setMinDate() {
            const dateInput = document.getElementById("date");
            const today = new Date();
            const minDate = new Date(today.setDate(today.getDate() + 1)).toISOString().split("T")[0];
            dateInput.setAttribute("min", minDate);
        }
        window.onload = setMinDate;
        </script>

        <link rel="shortcut icon" href="images/www.hearingfirst.co.uk.ico">
        <link rel="icon" type="image/png" sizes="32x32" href="images/wwwhearingfirst.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/images/wwwhearingfirst.png">
        <link rel="icon" sizes="192x192" href="images/images/wwwhearingfirst.png">
    </head>

    <body>

    <header>
        <div class="blue-box">
            <?php
                if (isset($_SESSION['logged_in_email'])) {
                echo '<a href="account.php" class="text"><span>' . htmlspecialchars($_SESSION['logged_in_email']) . '</span></a>';
                } else {
                echo '<a href="login.php" class="text"><span>Login / Register</span></a>';
                }
            ?>
            &nbsp;
            <span class="dot"></span>
            <span class="call-us"><a href="tel:09213167699" style="color: white; text-decoration:none;">Call Us! : 09213167699</a></span>
        </div>


        <div class="white-box" > 
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
        <p id="waxremoval">Ear Wax Removal</p>
        </div>
        <h1 id="mobile-head">Video: What Happens In Your Ear Wax Removal Appointment</h1>
        <br>
        <div class="iframe-container">
        <iframe src="https://player.vimeo.com/video/230119320?h=069606a53b" frameborder="0" allowfullscreen></iframe>
        </div>

        <br>

        <div class="reminder">
        <h2>How To Book Microsuction Ear Wax Removal Online</h2>
        <ol>
        <li>Fill in the required fields on the appointment form, including your email, preferred clinic, and the ear to be treated.</li>
        <li>Select the staff member you prefer and pick a suitable date and time for your appointment. We only allow booking appointments in advance for both the staff and the user to ready themselves up first.</li>
        <li>Carefully review all the necessary steps and details below before the actual procedure. Ensure that all your inputs are correct.</li>
        <li>Click 'Submit' to finalize your appointment. The price for the appointment is <strong style="font-size:30px;">₱ 3,200.</strong></li>
        </ol>
        </div>

        <div style="height:50px;"></div>

        <div class="calendar" style="height:auto;">

        <div class="month">APPOINTMENT FORM</div>


        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hearingfirst";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            // Get all unique areas
            $areas = [];
            $sql = "SELECT DISTINCT area FROM clinics_details";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            $areas[] = $row['area'];
            }
            }

            // Check if the form has been submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user_email = $_POST['user_email'];
            $staff_id = $_POST['staff_id'];
            $clinic_id = $_POST['clinic_id'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $which_ear = $_POST['which_ear'];
            $earcleaning_price = 3200;

            // Get the user's balance from the users_details table
            $sql = "SELECT money_held FROM users_details WHERE email = '$user_email'";
            $result = $conn->query($sql);

            $row = $result->fetch_assoc();
            $money_held = $row['money_held'];

            // Check if the date is in the future
            $current_date = date("Y-m-d");
            if ($date < $current_date) {
            echo "<script>alert('Error: You must select a FUTURE date for the appointment.');window.location.href = 'earwax_removal.php';</script>";
            } else {
            // Check if the user has enough money
            if ($money_held >= $earcleaning_price) {
            // Check if the staff is already booked at the same date and time
            $check_sql = "SELECT * FROM earcleaning_process WHERE staff_id = $staff_id AND date = '$date' AND time = '$time'";
            $check_result = $conn->query($check_sql);

            if ($check_result->num_rows > 0) {
            echo "<script>alert('Error: The selected staff is already booked at this date and time.');window.location.href = 'earwax_removal.php';</script>";
            } else {
            // Subtract the service price from the user's balance
            $new_money_held = $money_held - $earcleaning_price;
            $update_sql = "UPDATE users_details SET money_held = $new_money_held WHERE email = '$user_email'";
            $conn->query($update_sql);

            // Insert the record into the earcleaning_process table
            $insert_sql = "INSERT INTO earcleaning_process (user_email, staff_id, clinic_id, which_ear, date, time, earcleaning_price, earcleaning_payment)
            VALUES ('$user_email', $staff_id, $clinic_id, '$which_ear', '$date', '$time', $earcleaning_price, $earcleaning_price)";
            $conn->query($insert_sql);
            $formatted_money_held = "₱ " . number_format($new_money_held, 2);
            echo "<script>alert('Your appointment has been made. Remaining balance: $formatted_money_held');window.location.href = 'earwax_removal.php';</script>";
            }
            } else {
            echo "<script>alert('Error: Insufficient balance to perform the service.');window.location.href = 'earwax_removal.php';</script>";
            }
            }
            
            }

            $conn->close();
        ?>


        <div>
        <?php if (isset($_SESSION['logged_in_email'])): ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <div>
        <label for="user_email">Email:</label>
        <input type="email" id="user_email" name="user_email" value="<?php echo htmlspecialchars($_SESSION['logged_in_email']); ?>" readonly required>
        </div>


        <div>
        <label for="area">Area:</label>
        <select id="area" name="area" onchange="loadClinics()" required style="background-color:white;">
        <option value="">Select an area</option>
        <?php foreach ($areas as $area): ?>
        <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
        <?php endforeach; ?>
        </select>
        </div>


        <div>
        <label for="clinic_id">Clinic:</label>
        <select id="clinic_id" name="clinic_id" onchange="loadStaff()" required style="background-color:white;">
        <option value="">Select a clinic</option>
        </select>
        </div>


        <div>
        <label for="staff_id">Staff:</label>
        <select id="staff_id" name="staff_id" required style="background-color:white;">
        <option value="">Select a staff member</option>
        </select>
        </div>


        <div>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        </div>


        <div>
        <label for="time">Time:</label>
        <select id="time" name="time" required style="background-color:white;">
        <option value="10:30 am">10:30 am</option>
        <option value="12:30 pm">12:30 pm</option>
        <option value="1:30 pm">1:30 pm</option>
        <option value="4:30 pm">4:30 pm</option>
        <option value="6:15 pm">6:15 pm</option>
        </select>
        </div>


        <div>
        <label for="which_ear">Ear:</label>
        <select id="which_ear" name="which_ear" required style="background-color:white;">
        <option value="left_ear">Left Ear</option>
        <option value="right_ear">Right Ear</option>
        <option value="both_ears">Both Ears</option>
        </select>
        </div>

        <input type="submit" value="Submit">
        </form>
        <?php else: ?>
        <p style="color:black; text-align: center; margin: 40px; font-size:24px;">*Login required</p>
        <?php endif; ?>

        </div>
        </div>

        <br><br><br>
        <div class="reminder" style="background-color: white; height:auto; margin-bottom:-30px; margin-top:-100px">
        <h1 id="remember-reminder">A few things to remember before you book...</h1>
        <ol id="reminder-ol">

        <li>We strongly recommend that you soften your ear wax with Earol spray, 2 squirts in each ear, 4 times a day for at least 5 days prior to your appointment. If you want to use cotton wool to hold the oil in, first saturate the cotton wool in petroleum jelly (such as Vaseline), so the cotton wool doesn’t soak up all the Earol. Make sure you squirt the Earol over a sink until you see oil spray out in order to expel any air prior to application.
        <br><br>If you’re looking to buy Earol, Hearing First now sells 10mL bottles! Just click here to get your bottle now.</li><br>
        <li>As per our professional body guidance, mask use remains mandatory in healthcare settings for the protection of all our patients and clinicians</li><br>
        <li>Because we operate via a booking system, we employ a 36-hour policy for all appointments. That means that if you want to cancel or reschedule your booking, it must be done 36 hours before your scheduled appointment.</li><br>
        <li>If you book for both ears and only one has ear wax, we cannot refund the other ear as we cannot give that time to another patient. The same principle applies when we find no earwax during the appointment.</li><br>
        </ol>
        </div>
        </div>

    </main>

    <script src="script.js"></script>

    <footer>
        <svg width="100%" height="auto" viewBox="0 0 1200 200" xmlns="http://www.w3.org/2000/svg">
        <image href="images/footerpage_final.png" width="1200" height="200" alt="@ Hearing First" />
        <a href="index.php">
        <rect x="515" y="50" width="50" height="25" fill="transparent" />
        </a>
        <a href="service.php">
        <rect x="580" y="50" width="65" height="25" fill="transparent" />
        </a>
        <a href="shop.php">
        <rect x="667" y="50" width="73" height="25" fill="transparent" />
        </a>
        <a href="about.php">
        <rect x="765" y="50" width="65" height="25" fill="transparent" />
        </a>

        <a href="https://www.youtube.com/c/HearingFirst" target="_blank">
        <rect x="515" y="125" width="40" height="30" fill="transparent" />
        </a>
        <a href="https://www.facebook.com/HearingFirstUK/" target="_blank">
        <rect x="560" y="125" width="40" height="30" fill="transparent" />
        </a>
        <a href="https://x.com/hearingfirstuk" target="_blank">
        <rect x="605" y="125" width="40" height="30" fill="transparent" />
        </a>

        <a href="mailto:hearingfirst.co.ok@gmail.com">
        <rect x="970" y="110" width="190" height="45" fill="transparent" />
        </a>
        <a href="tel:09213167699">
        <rect x="970" y="55" width="190" height="45" fill="transparent" />
        </a>

        <a href="index.php">
        <rect x="58" y="30" width="380" height="120" fill="transparent" />
        </a>
        </svg>
    </footer>
    </body>
</html>