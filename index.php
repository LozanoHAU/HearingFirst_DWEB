<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Homepage | Hearing First</title>
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



            .mobile-text{
            position: absolute;
            visibility: hidden;
            }

            #last-space{
                height:80px;  width:100%;
            }

            .group {
            margin: 40px auto;
            text-align: center;
            display: block;
            margin-left: auto; 
            margin-right: auto; 
            width:60%;
            border:1px solid black;
            box-shadow: 5px 10px;
            }

            /* TABLET VIEW SPECIFICS FOR INDEX */

            @media (min-width: 650.1px) and (max-width: 1075px) {
            .container3 {
            margin-top: 25px;
            }

            #last-space{
                height:20px;
            }
            }


            /* MOBILE VIEW SPECIFICS FOR INDEX */
            @media (min-width: 275px) and (max-width: 650px) {

            .desktop-text{
                font-size:13px;
            }

            .desktop-text strong{
                font-size:18px;
            }

            .nav-bar{
            visibility: hidden;
            }


            .container2{
            margin-top: 5px;
            padding-bottom: 0;
            margin-bottom: 0;
            height: auto;
            }
            .container2 h1, .container2 p{
            display: none;
            }

            .container2 h2{
            font-size: 15px;
            text-align: center;
            margin: 20px auto;
            margin-bottom: 5px;
            }

            .container2 .shoppage{
            height: auto;
            }

            .container2 img{
            height: 200px;
            width: 70%;
            margin: 10px auto;
            margin-left: 19.5%;
            position: relative;
            }

            .container3 {
            margin-top: 15px;
            }

            .container3 h1 {
            font-size: 20px;
            margin-bottom: 52px;
            }

            .container3 p {
            font-size: 10px;
            line-height: 29px;
            }

            .container3 strong {
            font-size: 30px;
            line-height: 29px;
            }

            #last-space{
                height:20px;
            }

            }
 
        </style>
    </head>

    <body>

    <header>

        <!-- BLUE BOX OF HEADER -->
        <div class="blue-box">
            <?php
            session_start(); // Start the session
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
        <!-- MAIN PART OF HEADER -->
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
    <img src = "images/headingimage.jpg" alt="'1st Class Hearing Care' - True Hearing Limited" class="headingpage" style="max-width: 100%; height: auto;">
    
    <!-- MAIN CONTAINER -->
    <div class="white-box-with-stroke" style="height: auto;">

        <!-- MAIN TITLE FOR A WEBPAGE -->
        <div class="blue-box-under-stroke">
            <p>WHAT’S IN STORE FOR YOU?</p>
        </div>
        
        
        <div class="container">

            <a href="earwax_removal.php" style="color: black;">
            <div class="waxremoval" style="width: 80%;">
                <div style="width:100%"><img src="images/microsuction-ear-wax-removal-procedure_for_website 1.png" alt="Ear Wax Removal"  style="margin-left:24%;width:50%"></div>
                <p class="mobile-text"> <strong>EarWax Removal</strong></p>
                <p class="desktop-text"> <strong>— EAR WELLNESS </strong>is often overlooked, but it is essential to ensure the overall health and well-being of an individual. Taking care of our ears not only helps in preventing potential hearing problems but also contributes to a better quality of life . . . .</p>
            </div>
            </a>


        </div>

        <div style="height:50px; width:100%"></div>
        

        <div class="container2">
            <div class="shoppage">
                <h1>NEED SOMETHING NEW?</h1>
                <a href="shop.php" style="color: white;"><h2>Visit our SHOP now!</h2></a>
                <p>* Find the product you are looking for just contact us and we will do our best to help! </p>
                <a href="shop.php"><img src="images/shopitem.png" alt="Starkey HearClear Wax Guards"></a>
            </div>
        </div>


        <div class="deskptop-text" id="last-space"></div>
        
        

        <div class="container3">
            <h1> WHY CHOOSE US?</h1>
            <p><strong>— At Hearing First,</strong> our aim is to make first class hearing care available to everyone, whether it be through our gold standard Microsuction Ear Wax Removal Network ear care service, or by offering genuinely independent hearing tests and advice. We are a family-owned and run company, and we treat our staff and clients as members of our extended Hearing First family.</p>
            <img src="images/group_photo.jpg" alt="Hearing First Group Photo" class="group">
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
