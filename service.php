<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Services | Hearing First</title>
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

        <?php session_start();  ?>

        <style>

            /*THE MAIN CONTAINER FOR BOTH EARWAX_REMOVAL AND HEARING*/
            .container {
            position: relative;
            height: auto;
            display: inline-block;
            clear: both;
            }

            .container p {
            padding:auto;
            font-size: 24px; 
            font-family: 'Khula', 'Roboto Slab', serif;
            font-weight: lighter;
            }

            .container strong {
            font-size: 48px; 
            font-family: 'Khula', 'Roboto Slab', serif;
            font-weight: lighter;
            }

            .container h1 {
            z-index: 2;
            font-family: 'Khula', 'Roboto Slab', serif;
            font-weight: 900;
            font-size: 70px; 
            margin-top: 19px;
            text-align: center;
            }

            /*THE IMAGE OF CONTAINER*/
            .container1-1 {
            width: 37%;
            height: 40%;
            float: left;
            margin: 50px;
            margin-bottom: 0;
            margin-right: 30px;

            }

            /*THE TITLE (H1) OF CONTAINER*/
            .container1-2 {
            margin-top: 50px;
            height: 100px;
            float: left;
            width: 53%;
            }

            /*THE DESCRIPTION (P) OF CONTAINER*/
            .container1-3 {
            margin-top: 20px;
            height: auto;
            float: left;
            width: 53%;
            margin-bottom: 0;
            }

            .container1-3 .hearingtext {
            font-size: 21.5px;
            }

            .container1-3 .hearingstrong {
            font-size: 35px;
            }

            /*THE REMINDER OF CONTAINER*/
            .container1-4 {
            height: auto;
            float: left;
            width: 93%;
            margin: 50px;
            margin-top: 0;
            }

            .container1-4 h1{
            font-family: 'Khula', 'Roboto Slab', serif;
            font-weight: lighter;
            font-size: 30px; 
            text-align: center;
            color: white;
            background-color: #4C92FD; 
            margin-bottom: -21px;
            padding-top: 25px;
            }

            .container1-4 ol{
            font-family: 'Khula', 'Roboto Slab', serif;
            font-weight: lighter;
            font-size: 20px; 
            text-align: left;
            color: white;
            background-color: #4C92FD;  
            padding-bottom: 25px;
            padding-top: 25px;
            margin-top: 0;
            }

            .container1-4 li{
            margin-top: 30px;
            }

            .container1-4 :first-of-type{
            margin-top: 0px;
            }

            .container1-4-1 {
            width: 93%;
            height: 48%;
            margin: 20px auto;
            padding: 20px;
            }

            /*THE BLUE BUTTON OF CONTAINER*/
            .container1-4-1 .book-now-button{
            width: 500px; text-align:center; padding-left:20%; padding-right:20%; margin: 40px auto;
            }

            .waxremoval {
            width: 40%;
            height: 96%;
            margin: 20px;
            }

            /* MOBILE VIEW SPECIFICS FOR SERVICE */

            @media (min-width: 275px) and (max-width: 650px) {
            .container1-4-1 ol, .container1-4-1 h1{
            display: none;
            }


            .nav-bar{
            visibility: hidden;
            }

            .container, .container1-1, .container1-2, .container1-3, .container1-4{
            margin: 20px auto;
            width: 95%;
            height: auto;
            text-align: center;
            }

            .container {
            margin-bottom: 80px;
            }

            .container1-4 {
            height: auto;
            width: 100%;
            margin: 0 0;
            padding: 0 0;
            }


            .container1-4-1 {
            height: auto;
            width: 100;
            margin: 0 auto;
            padding: 0 0;
            }

            .container1-4-1 .book-now-button{
            height: auto;
            margin: 0 auto;
            padding: 0 0;
            border-radius: 4px;
            padding: 2px 2px;
            }

            .container1-1{
            margin-left: 5.1%;
            }

            .container1-2{
            width: auto;
            height: auto;
            margin: -20px auto;
            text-align: center;
            margin-left: 4.6%;
            }

            .container1-2 h1{
            font-size: 30px;
            }

            .container1-3 {
            margin-left: 4.6%;
            text-align: left;
            margin-top: -20px;
            height: auto;
            padding: auto;
            }

            .container1-3 p, .container1-3 .hearingtext{
            font-size: 16px
            }

            .container1-3 strong, .container1-3 .hearingstrong{
            font-size: 22px
            }

            .container1-4-1 .book-now-button{
            width: auto; text-align:center; height: auto;
            margin-left: 4%;
            }
            }


            /* TABLET VIEW SPECIFICS FOR SERVICE */

            @media (min-width: 650.1px) and (max-width: 1075px) {

            .container, .container1-1, .container1-2, .container1-3, .container1-4{
            margin: 20px auto;
            width: 95%;
            height: auto;
            text-align: center;
            }


            .container1-1{
            height: auto;
            width:55%;
            margin:40px auto;
            padding-left: 21%;
            }

            .container {
            margin-bottom: 80px;
            }

            .container1-4 {
            height: auto;
            width: 100%;
            margin: 0 0;
            padding: 0 0;
            }

            .container1-4-1 {
            height: auto;
            width: 100;
            margin: 0 auto;
            padding: 0 0;
            text-align: center;
            border-radius:8px ;
            }

            .container1-4-1 li{
            font-size: 16px;
            padding: 20px 20px;
            padding-top: 0;
            }

            .container1-4-1 ol{
            margin-left: 44px;
            border-radius:11px ;
            }

            .container1-4-1 h1{
            font-size: 24px;
            padding: 20px 20px;
            margin-left: 44px;
            border-radius:11px ;
            }

            .container1-4-1 .book-now-button{
            height: auto;
            margin: 0 auto;
            padding: 0 0;
            border-radius: 4px;
            padding: 2px 2px;
            }

            .container1-1{
            margin-left: 5.1%;
            }

            .container1-2{
            width: auto;
            height: auto;
            margin: -20px auto;
            text-align: center;
            margin-left: 4.6%;
            }

            .container1-2 h1{
            font-size: 30px;
            }

            .container1-3 {
            margin-left: 4.6%;
            text-align: left;
            margin-top: -20px;
            height: auto;
            padding: auto;
            }

            .container1-3 p, .container1-3 .hearingtext{
            font-size: 16px
            }

            .container1-3 strong, .container1-3 .hearingstrong{
            font-size: 22px
            }

            .container1-4-1 .book-now-button{
            width: auto; text-align:center; height: auto;
            margin-left: 4%;
            }
            }

        </style>

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
            <p>OUR SERVICES</p>
        </div>
        <div class="container">
            <div class="container1-1">
                <img src="images/microsuction-ear-wax-removal-procedure_for_website 1.png" alt="Ear Wax Removal" width="100%" height="100%" style="border: 1px solid black;">
            </div>
            <div class="container1-2" id="waxremoval">
                <h1>Ear Wax Removal</h1>
            </div>
            <div class="container1-3">
                <p><strong>— EAR WELLNESS </strong> is often overlooked, but it is essential to ensure the overall health and well-being of an individual. Taking care of our ears not only helps in preventing potential hearing problems but also contributes to a better quality of life. In this procedure, we will remove any excess earwax and debris to avoid blockages and potential infections, maintaining ear wellness and enhancing our auditory experience.</p>
            </div>
            <div class="container1-4">
                <div class="container1-4-1" style="margin-bottom:-50px;">
                    <h1 style="font-weight:normal;">HERE ARE SOME SAFE TECHNIQUES FOR HOME EAR CLEANING:</h1>
                    <ol>
                        <li>Avoid Cotton Swabs: Contrary to popular belief, using cotton swabs (Q-tips) is not an effective way to clean the ears. Inserting cotton swabs into the ear canal can push earwax deeper, potentially causing blockages or damage to the eardrum. Instead, it is best to avoid using cotton swabs for ear cleaning and opt for safer alternatives.</li>
                        <li>Ear Irrigation: Ear irrigation is a safe and gentle technique for ear cleaning. It involves flushing the ear canal with a saline solution or warm water using a bulb syringe or specially designed ear irrigation kit. The warm water or saline solution helps soften and dislodge the earwax, allowing it to be easily flushed out. It is important to ensure that the water or saline solution is at body temperature to prevent discomfort or dizziness. Ear irrigation can help remove excess earwax and debris from the ear canal, promoting better hearing and reducing the risk of infections.</li>
                        <li>Over-the-Counter Ear Drops: Another option for gentle home ear cleaning is over-the-counter ear drops. These drops often contain a mild solution, such as hydrogen peroxide or glycerin, that can help soften and break up earwax. Following the instructions on the packaging, apply the recommended number of drops into the ear canal, and gently massage the area around the ear to facilitate the removal of earwax. It is important to note that overuse or misuse of ear drops can cause irritation or damage, so it is crucial to follow the instructions and consult a healthcare professional if you have any concerns.</li>
                        <li>Natural Oils: Some individuals prefer using natural oils for ear cleaning. Olive oil, baby oil, or mineral oil can help soften earwax, making it easier to remove. Warm the oil slightly and use a dropper to put a few drops into the ear canal. Allow the oil to sit for a few minutes, then tilt your head to let the oil and loosened earwax drain out. Natural oils can provide a gentle and soothing approach to ear cleaning, but it is important to ensure that the oil is not too hot to avoid burns or discomfort.</li>
                    </ol>
                    <div class="book-now-button">
                        <a href="earwax_removal.php" style="color: white; text-decoration:none; width:100%;">SET UP AN APPOINTMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

        <script src="script.js"></script>
        <footer class="desktop">
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
