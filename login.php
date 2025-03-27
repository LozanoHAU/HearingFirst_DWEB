<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | Hearing First</title>
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

        

            <style>
            .container {
            max-width: 100%;
            margin: 0 auto;

            }

            .section {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            width:90%;
            }

            h2 {
            margin-bottom: 10px;
            font-size: 1.5rem;
            }

            p {
            margin-bottom: 20px;
            font-size: 0.9rem;
            color: #333;
            }

            label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            }

            input[type="email"],
            input[type="text"],
            input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 0.9rem;
            }

            button {
            font-size: 0.9rem;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            .btn-primary {
            background-color: #1D75BD;
            color: white;
            cursor: pointer;
            width: 20%;
            display: block;
            margin-top: 10px;
            }

            .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 2px 2px 3px #08406e6a;
            }

            .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            }


            .forgot-password {
            font-size: 0.9rem;
            color: #007bff;
            text-decoration: none;
            display: block;
            margin-top: 10px;
            }

            .forgot-password:hover {
            text-decoration: underline;
            }

            .required {
            color: red;
            }
            

            @media (min-width: 275px) and (max-width: 650px) {
            .section{
            border: none;
            }

            #login{
            width: auto;
            }

            .nav-bar{
            visibility: hidden;

            }
            }

            
            .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            }

            .form-group {
                display: flex;
                flex-direction: column;
            }

            .btn-primary {
                width: 100%;
                margin-top: 20px;
            }

            @media (max-width: 768px) {
                .form-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>

    <body>

    <script>
    function validateForm() {
        // Validate Age
        const age = document.getElementById('age').value;
        if (age < 18) {
            alert("Error: Age must be 18 or above.");
            return false;
        }

        if (age > 120) {
            alert("Error: Must set an appropriate age.");
            return false;
        }
    
        // Validate Phone Number
        const phone = document.getElementById('phone').value;
        const phonePattern = /^09\d{9}$/;
        if (!phonePattern.test(phone)) {
            alert("Error: Phone number must be in the format 09#########.");
            return false;
        }

        const money = document.getElementById('money_held').value;
        if (money < 0) {
            alert("Error: Must set an appropriate amount of money.");
            return false;
        }
    
        // Validate Email
        const email = document.getElementById('email').value;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com)$/;
        if (!emailPattern.test(email)) {
            alert("Error: Email must be a valid Gmail or Yahoo address.");
            return false;
        }
    
        return true;
    }
    </script>

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
        <div style="height:20px"></div>
        <div class="container" style="width:90%; margin-left:7.5%;">

            <!-- Login Section -->
            <div class="section">
                <h2>Login</h2>
                <form action="functions/login_process.php" method="POST">
                    <label for="username">Username or email address <span class="required">*</span></label>
                    <input type="text" id="username" name="username" placeholder="Username or email address" required>
                    
                    <label for="password">Password <span class="required">*</span></label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    
                    <div class="form-options">
                        <button type="submit" class="btn-primary" id="login">Log in</button>
                    </div>
                </form>
            </div>

            <!-- Sign Up Section -->
            <div class="section" style="margin-top: 20px; border: none;">
                <h2>Sign Up</h2>
                <p>Create a new account by filling out the form below.</p>
                <form action="functions/login_insert.php" method="POST" onsubmit="return validateForm()">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" name="last_name" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" id="age" name="age" placeholder="Age" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone_num" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label for="address">(Full) Address</label>
                            <input type="text" id="address" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" placeholder="city" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" id="province" name="province" placeholder="Province" required>
                        </div>
                        <div class="form-group">
                            <label for="zipcode">Zip Code</label>
                            <input type="text" id="zipcode" name="zipcode" placeholder="Zip Code" required>
                        </div>
                        <div class="form-group">
                            <label for="paymentType">Type of Payment</label>
                            <select id="paymentType" name="payment_type" required style="background-color:white;">
                                <option value="GCash" selected>GCash</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bankCode">Bank Code</label>
                            <input type="text" id="bankCode" name="bank_code" placeholder="Bank Code" required>
                        </div>
                        <div class="form-group">
                            <label for="money_held">Money Held (₱)</label>
                            <input type="number" id="money_held" name="money_held" placeholder="Money Held" required>
                        </div>
                    </div>
                    <button type="submit" class="btn-primary" style="width: 100%; margin-top: 20px;">Sign Up</button>
                </form>
            </div>
            
            <div style="height:10px"></div>
        </div>
        <div style="height:20px"></div>
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