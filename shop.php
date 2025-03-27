<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Store | Hearing First</title>
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

        <?php
        session_start();
        ?>

        <style>

            .table-container {
            width: 90%;
            border: none;
            margin: auto auto;
            margin-top: 30px;
            padding-bottom: 50px;
            border-collapse: collapse;
            }

            .table-container th, .table-container td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            vertical-align: center;
            }

            .table-container th{
            font-size: 24px;
            color: white;
            background-color: black;
            }

            .table-container img {
            width: 100%;
            height: auto; 
            }
            .item-head {
            font-size: 28px;
            font-weight: lighter;
            margin-bottom: 10px;
            text-align: center;
            }
            .item-page {
            font-size: 16px;
            font-weight: lighter;
            }

            
            .form_order {
            width: 90%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color:rgb(223, 236, 255);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid black;
            }

            .form_order h1 {
            text-align: center;
            margin-bottom: 20px;
            }

            .form_order label {
            display: block;
            margin-bottom: 8px; 
            font-weight: bold;
            }

            .form_order input, .form_order select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            }

            .form_order button {
            width: 100%;
            padding: 10px;
            background-color:rgb(105, 165, 255);
            color: rgb(243, 248, 255);
            border: none; 
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
            font-weight: bold;
            }


            .form_order button:hover {
            background-color:rgb(76, 146, 252);
            }

            .form_order p {
            text-align: center; 
            margin: 10px 0;
            }


            @media (min-width: 275px) and (max-width: 650px) {

            .nav-bar{
            visibility: hidden;

            }
            .table-container {
            width: 100%;
            border-collapse: separate;
            border-spacing: 60px;
            margin-bottom: -100px;
            }

            #desktop-list, .table-container strong {
            display: none;
            }

            .table-container th, .table-container td {
            display: block;
            width: 100%;
            border: none;

            padding: 10px;
            text-align: center;
            }

            .blue-box-under-stroke{
            margin-bottom: -50px;
            }

            .table-container td {
            font-size: 15px;
            width: 85%;
            margin: -10px auto;
            }

            .table-container img {
            width: 50%;
            height: auto;
            margin: 10px auto;
            text-align: center;
            }

            .item-head {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            }

            .item-page {
            font-size: 14px;
            margin-bottom: 0px;

            }

            .form_order {
            width: 70%;
            margin: 90px auto;
            margin-bottom:30px;
            padding: 20px;
            }

            label{
            font-size:14px;
            }

            .form_order h1 {
            margin-bottom: 10px;
            font-size:24px;
            }


            .form_order input, .form_order select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            }

            .form_order button {
            width: 100%;
            border-radius: 4px;
            font-size: 14px;
            }

            }
            

            @media (min-width: 650.1px) and (max-width: 1075px) {
            .table-container th,  .table-container tr, .table-container .item-page{
            font-size: 15px;
            }

            .table-container .item-head{
            font-size: 24px;
            }

            .form_order {
            width: 80%;
            margin: 40px auto;
            margin-bottom:50px;
            padding: 20px;
            }

            label{
            font-size:14px;
            }

            .form_order h1 {
            margin-bottom: 10px;
            font-size:24px;
            }


            .form_order input, .form_order select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            }

            .form_order button {
            width: 100%;
            border-radius: 4px;
            font-size: 14px;
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
            <p>WEB SHOP</p>
            </div>
            
            <div class="form_order">
            <h1>PROCESS ORDER</h1>
            <hr style = "margin-bottom:40px;"/>
            <?php
            if (isset($_SESSION['logged_in_email'])) {
                echo '
                <form action="functions/process_order.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" style="width:auto;" id="email" name="email" value="' . htmlspecialchars($_SESSION['logged_in_email']) . '" readonly required><br><br>

                    <label for="order_id">Product Name:</label>
                    <select id="order_id" name="order_id" required style="background-color:white;">
                    <option value="1001">Direct Audio Input Cord</option>
                    <option value="1002">Starkey HearClear Wax Guards</option>
                    <option value="1003">Hearing Aid Batteries</option>
                    <option value="1004">Snapfit Receiver Wires</option>
                    <option value="1005">USB Bluetooth Dongle</option>
                    <option value="1006">Cleaning & Storage Case</option>
                    <option value="1007">Phonak & Unitron Domes</option>
                    <option value="1008">Ear Relief Ear Drops</option>
                    </select><br><br>

                    <label for="shipping">Shipping:</label>
                    <select id="shipping" name="shipping" required style="background-color:white;">
                    <option value="J&T Express">J&T Express</option>
                    </select><br><br>

                    <label for="quantity">Quantity:</label>
                    <select id="quantity" name="quantity" required style="background-color:white;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select><br><br>

                    <button type="button" onclick="calculateTotal()">Calculate Total Price</button>

                    <p id="total_price"></p>
                    <p id="money_held"></p>

                    <button type="submit">Submit Order</button>
                </form>';
            } else {
            echo '<p>*Login required</p>';
            }
            ?>
            </div>


            <table class="table-container">
                <tr id="desktop-list">
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
                </tr>
                <tr id="firstchild">
                <td>
                <div class="item-head">Direct Audio Input Cord</div>
                <img src="images/Binaural-DAI-Cable-1.png" alt="DAI CABLE">
                </td>
                <td class="item-page">A Direct Audio Input cable will plug into the DAI shoe of any BTE hearing instrument. The DAI cable plugs into the 3-pin socket located on the bottom of the DAI shoe, at the other end of the cable is a standard 3.5mm audio jack that will fit most headphone sockets.</td>
                <td><strong>₱ 3,787.40 <span style="font-size:13px;">(₱85 Shipping Fine)</span></strong></td>

                </tr>
                <tr>
                <td>
                <div class="item-head" id="hearclear">Starkey HearClear Wax Guards</div>
                <img src="images/Starkey-HearClear-1.png" alt="Starkey-HearClear">
                </td>
                <td class="item-page">Designed to be used with all Starkey hearing aids that use a wax guard. Hear Clear wax guards are backwards compatible with the older Waxceptor wax guards.</td>
                <td><strong>₱ 408.85 <span style="font-size:13px;">(₱85 Shipping Fine)</span></strong></td>

                </tr>
                <tr>
                <td>
                <div class="item-head">Hearing Aid Batteries</div>
                <img src="images/Rayovac-Extra-Size-675-1.png" alt="Rayovac Hearing Aid Batteries">
                </td>
                <td class="item-page">Rayovac Extra size 675 mercury free hearing aid batteries, colour coded blue. Used mainly for super power behind the ear (BTE) hearing aids.</td>
                <td><strong>₱ 650.44 <span style="font-size:13px;">(₱85 Shipping Fine)</span></strong></td>

                </tr>
                <tr>
                <td>
                <div class="item-head">Snapfit Receiver Wires</div>
                <img src="images/Starkey-SnapFit-Receiver-Wire-1.png" alt="Snapfit Receiver Wires">
                </td>
                <td class="item-page">Starkey Snapfit RIC Receiver Wires are compatible with 3 Series, Z Series, Muse, Halo, Livio and Evolv.</td>
                <td><strong>₱ 2,861.92 <span style="font-size:13px;">(₱85 Shipping Fine)</span></strong></td>

                </tr>
                <tr>
                <td>
                <div class="item-head">USB Bluetooth Dongle</div>
                <img src="images/Sennheiser-BTD800-1.png" alt="USB Bluetooth Dongle">
                </td>
                <td class="item-page">Can be used to connect various wireless streamers to a laptop / PC for media streaming and hands free Skype type calling via bluetooth.</td>
                <td><strong>₱ 3,872.51 <span style="font-size:13px;">(₱85 Shipping Fine)</span></strong></td>

                </tr>
                <tr>
                <td>
                <div class="item-head">Cleaning & Storage Case</div>
                <img src="images/Signia-Cleaning-Set-1.png" alt="Cleaning & Storage Case">
                </td>
                <td class="item-page">Smart zip-up canvas storage case to keep your hearing aid cleaning consumables together, can also double up as a travel case for your hearing aids.</td>
                <td><strong>₱ 1,631.67 <span style="font-size:13px;">(₱85 Shipping Fine)</span></strong></td>

                </tr>
                <tr>
                <td>
                <div class="item-head">Phonak & Unitron Domes</div>
                <img src="images/Phonak-Domes-1.png" alt="Phonak & Unitron Domes">
                </td>
                <td class="item-page">If your hearing aids are anything before Marvel technology then you will need SDS3 domes.</td>
                <td><strong>₱ 516.63 <span style="font-size:13px;">(₱85 Shipping Fine)</span></strong></td>

                </tr>
                <tr>
                <td>
                <div class="item-head">Ear Relief Ear Drops</div>
                <img src="images/Cl-ear-Ear-Relief-1.png" alt="Ear Relief Ear Drops">
                </td>
                <td class="item-page">Cl-ear Ear Relief Ear Drops effectively soothe and reduce ear pain, itching and inflammation of the outer ear canal.</td>
                <td><strong>₱ 888.31 <span style="font-size:13px;">(₱85 Shipping Fine)</span></strong></td>

                </tr>
            </table>


            <div style="height: 50px; background-color: white; width: 100%;"></div>
            </div>

        </main>


        <script>
            
        function calculateTotal() {
        const email = document.getElementById('email').value;
        const orderId = document.getElementById('order_id').value;
        const quantity = document.getElementById('quantity').value;

        if (email && orderId && quantity) {
        // Get product price and user's money_held via AJAX
        fetch(`functions/process_order.php?action=getDetails&email=${email}&order_id=${orderId}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert(data.error);
            } else {
                const totalPrice = (data.prod_price * quantity) + 85;
                const moneyHeld = parseFloat(data.money_held); // Ensure money_held is a number

                // Format totalPrice and moneyHeld
                const formattedTotalPrice = totalPrice.toLocaleString('en-PH', {
                    style: 'currency',
                    currency: 'PHP'
                });
                const formattedMoneyHeld = moneyHeld.toLocaleString('en-PH', {
                    style: 'currency',
                    currency: 'PHP'
                });

                //
                document.getElementById('total_price').innerText = `Total Price: ${formattedTotalPrice}`;
                document.getElementById('money_held').innerText = `Money Held: ${formattedMoneyHeld}`;
            }
        });
        }
        }
        </script>

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