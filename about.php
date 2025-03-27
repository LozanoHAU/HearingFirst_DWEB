<!DOCTYPE html>
<html lang="en">
    <head>
        <?php session_start();?>
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

        <style>

            .group {
            margin: 90px auto;
            text-align: center;
            display: block;
            margin-left: auto; 
            margin-right: auto; 
            width:60%;
            border:1px solid black;
            box-shadow: 5px 10px;
            }

            #group{
            text-align: center; 
            display: block; 
            margin-left: auto;  
            margin-right: auto;
            }

            h1{
            font-size: 70px;
            margin-left: 53px;
            margin-bottom: -10px;
            }

            p{
            font-size: 24px;
            margin-left: 53px;
            margin-right: 53px;
            font-weight: lighter;
            }

            strong{
            font-size: 48px;
            font-weight: lighter;
            }

            .container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 10px;
            padding-top:-10px;
            }

            .square {
            width: calc(50% - 5px); 
            background-color:rgb(255, 255, 255);
            border: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            box-sizing: border-box;
            border:none;
            }


            .image-placeholder {
            width: 350px;
            height: 350px;
            background-color: #ddd;
            border: 1px solid #999;
            margin-bottom: 10px;
            }

 
            .square .img_text {
            font-size: 14px;
            color: #333;
            margin:20px auto;
            text-align:center;
            }

            .square .img_text p{
            text-align:center;
            font-weight:bold;
            }




            /* MOBILE VIEW SPECIFICS FOR ABOUT */
            @media (min-width: 275px) and (max-width: 650px) {

            .nav-bar{
            visibility: hidden;
            }

            .group, #group, #desktop-space{
            display: none;
            }

            #group{
            display: none;
            }

            h1{
            font-size: 22px;
            margin-bottom: 5px;
            margin-top: 40px;
            }

            p {
            font-size: 14px;
            }

            strong {
            font-size: 23px;
            }


            #last-text{
            margin-bottom: -120px;
            }

            .square {
            width: 90%;
            margin:10px auto;
            }

            .image-placeholder {
            width: 150px;
            height: 150px;
            }
            }

            /* TABLET VIEW SPECIFICS FOR ABOUT */

            @media (min-width: 650.1px) and (max-width: 1075px) {
            #group{
            display: none;
            }

            h1{
            font-size: 29px;
            }

            p {
            font-size: 16px;
            }

            strong {
            font-size: 24px;
            }

            .group{
            height: 400px;
            margin-top: 30px;
            margin-bottom: 30px;
            }

            .square {
            width: calc(50% - 5px);
            margin:10px auto;
            }

            .image-placeholder {
            width: 250px;
            height: 250px;
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
                <p>ABOUT US</p>
            </div>

            <img src="images/group_photo.jpg" alt="Hearing First Group Photo" class="group">
            <h1>HearingFirst (Revamped!)</h1>
            <p><strong>— HearingFirst</strong> is dedicated to improving the lives of individuals with hearing difficulties by providing comprehensive and accessible hearing care services. Its mission is to ensure that everyone has the tools and support they need to enhance their ear health. <b>We, HearingFirst's aspiring web designer and database managers,</b> recently undertook a transformative project to improve upon the original website, ensuring it aligns with modern design principles and user expectations.</p>

            <br id="desktop-space">

            <p>One of the key improvements we made was simplifying the website’s layout, color palette, and navigation, ensuring users can quickly find the information they need. We also introduced an enhanced booking system, making it easier for users to schedule appointments for ear wax removal. The new system displays available dates, times, pricing, and clinic locations, along with clear instructions for preparation and reminders about policies. Additionally, we optimized our online store, the Web Shop, to provide a seamless shopping experience. Users can now browse products by category, and order items directly to shipping.</p>

            <br id="desktop-space">

            <p>By focusing on user needs and incorporating modern design principles, we’ve created a website that reflects our commitment to exceptional hearing care. Whether you’re booking an appointment, shopping for products, or learning about ear care, Hearing First is here to support you every step of the way. Explore our revamped website today!</p>

            <br>

        
            <h1 style="text-align: center; margin-left:0;" id="h1-desktop">MEET THE TEAM</h1>

            <br>
            
            <div class="container">
            <div class="square">
            <img src="images/aaron.jpg" class="image-placeholder">
            <div class="img_text"><p>Aaron Lozano</p></div>
            </div>
            <div class="square">
            <img src="images/bundalian.jpeg" class="image-placeholder">
            <div class="img_text"><p>Aishley Bundalian</p></div>
            </div>
            <div class="square">
            <img src="images/claire.jpeg" class="image-placeholder">
            <div class="img_text"><p>Claire Mangacu</p></div>
            </div>
            <div class="square">
            <img src="images/lacanlale.jpeg" class="image-placeholder">
            <div class="img_text"><p>Princess Lacanlale</p></div>
            </div>
            </div>

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