
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='help.css'>
    <link rel="icon" href='blood-removebg-preview.png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<title>Blood Request</title>

<body>

    <header>
        <nav>
            <div class="header-logo"><img src="blood-removebg-preview.png"></div>
            <div class="header-list">
                <ul>
                    <li><a href="index.php#about-us">About Us</a></li>
                    <li><a href="donate.php">Donate</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>



    <main>
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                <form action ="connecthelp.php" method="POST">
                    <h2>Connect with us </h2>
                    <input type="text" class="field" placeholder="Your Name" id="name" name="name" required>
                    <input type="email" class="field" placeholder="Your Email" id="email" name="email" required>
                    <input type="tel" class="field" placeholder="Phone" id="phone" name="phone" required>
                    <textarea placeholder="Message (include blood group and date)" class="field" id="message" name="message" required></textarea>
                    <button class="btn">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </main>



    <footer>
        <div class="siteFooterBar">
            <div class="content1">
                <div class="foot">2023Donataro © All rights reserved.</div>
            </div>
        </div>
        <div class="footer-content">
            <h3>JOIN OUR CAUSE</h3>
            <p>Donating blood or platelets can be intimidating and even scary. Time to put those hesitations and fears aside. Learn from Blood Buddy and platelet donors how simple and easy it is to roll up a sleeve and help save lives.</p>
            <div class="socials">
                <ul class="sci">
                    <li><a href="https://www.facebook.com/givebloodnhs/" target="_blank"><i
                                class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/indiablooddonation/?hl=en" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="http://nbtc.naco.gov.in/" target="_blank"><i class="fas fa-globe"></i></a></li>
                </ul>
            </div>
        </div>


    </footer>
    

</body>

</html>