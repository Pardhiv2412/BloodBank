<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='./Images/bb_logo(white).png' type="image/png">
    <link rel="stylesheet" href='index.css'>
    <link rel="stylesheet" href='https://fontawesome.com/v4.7.0/icon/bars'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<title>Donataro</title>
<div class="preloader">
    <img src="pre-loader.svg" alt="spinner">
</div>

<body>
    <!--Scroll to top button-->
    <button onclick="topFunction()" id="myBtn" class="fas fa-arrow-up"></button>
    <!-- Home Page -->
    <header>
        <video autoplay muted loop plays-inline id="homevideo">
            <source src="./video/homevideo1.mp4" type="video/mp4">
        </video>
        <div id="logo"> <a href="index.php"><img src="Images\blood-removebg-preview.png"></a>
        </div>
        <div id="nav">
            <div class="header-list" id="headerl">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="help.php" target="_blank">In-Need</a></li>
                    <li><a class="scroll" href="#about-us">About Us</a></li>
                    <li><a class="scroll" href="#vol-sect">Volunteers</a></li>
                    <li><a href="login.php" target="_blank">Admin</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
        <div class="text-box">
            <h1> Start </h1>
            <h1>Saving Lives </h1>
            <p>Become a donor or request for blood And help save lives</p>
            <a href='Register.php' class="hero-btn" target="_blank">Donate</a>
        </div>
    </header>

    <!--ABOUT US -->

    <main>
        <section id="about-us">
            <div class="about">
                <h1 class="heading">What is this all about ?</h1> <br>
                <p class="head-des" class="text">We solve the problem of blood emergencies by connecting <span
                        class="one-line"><br></span> blood donors directly with people in blood need. </p>
                <div class="row">
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>What we do ?</h3>
                        <p>We connect blood donors with recipients, without any intermediary such as blood banks, for an
                            efficient and seamless process.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/innovation.png">
                        </div>
                        <br>
                        <h3>Innovative</h3>
                        <p>Donataro is an innovative approach to address global health.We provide <span>immediate
                                access</span> to blood donors.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/netwotk.png">
                        </div>
                        <h3>Network</h3>
                        <p>Donataro is one of several community organizations working together as a network that
                            responds to emergencies in an efficient manner.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/noti.png">
                        </div>
                        <h3>Get notified</h3>
                        <p>Donataro Connect works with network partners to connect blood donors and recipients
                            through an automated SMS service and a mobile app.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/cost.png">
                        </div>
                        <h3>Totally Free</h3>
                        <p>Donataro's ultimate goal is to provide an easy -to-use, easy-to-access, fast, efficient,
                            and reliable way to get life-saving blood, totally <span>Free of cost.</span></p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/save.png">
                        </div>
                        <h3>Save Life</h3>
                        <p>We are a non profit foundation and our main objective is to make sure that everything is done
                            to protect vulnerable persons.<span>Help
                                us by making a gift!</span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Volunteer Section -->

    <div class="volunteer" section id="vol-sect">
        <div class="title-head">
            <h1 class="title">Our super heroes </h1>
        </div>
        <p class="content">We depend on volunteers! Volunteers make up 96% of our total<span class="line"><br></span>
            workforce and carry on our humanitarian work. Blood donation is healthy,<span class="line"><br></span> our
            volunteers are available 24/7 to help and donate
            blood. Blood banks store blood<span class="line"><br></span> bags but our volunteers are there with you in
            an emergency for a blood transfusion real time.</p>
        <ul class="volunt">
            <li class="vol">
                <span class=" vol-i number">1 </span>
                <span class=" vol-i name">Parvathy</span>
                <span class=" vol-i location">Kerala,<br>India</span>
                <span class=" vol-i blood group">O+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
            <li class="vol">
                <span class=" vol-i number">2</span>
                <span class=" vol-i name">Sivanand</span>
                <span class=" vol-i location">Kerala,<br>india</span>
                <span class=" vol-i blood group">B+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
            <li class="vol">
                <span class=" vol-i number">3</span>
                <span class=" vol-i name">Nikhitha</span>
                <span class=" vol-i location">Kerela,<br>India</span>
                <span class=" vol-i blood group">AB+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
            <li class="vol">
                <span class=" vol-i number">4</span>
                <span class=" vol-i name">Noel</span>
                <span class=" vol-i location">Kerala,<br>India</span>
                <span class=" vol-i blood group">A+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">5</span>
                <span class=" vol-i name">Parvathy S Nair</span>
                <span class=" vol-i location">Kerala,<br>India</span>
                <span class=" vol-i blood group"> O+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
        </ul>
    </div>
    <!--REVIEW-->
    <section class="customer-review">
        <div class="row-customer">
            <h2>Testimonials<br>See what our users have to say</h2>
        </div>
        <div class="row-customer">
            <div class="col-customer span-1-of-3-customer customer-box">
                <div class="customer-text-box">
                    Donataro  is just awesome! I just donated for the first time and it could not have been
                    easier.Donataro is doing a very important work and I'm happy that I could contribute . It's
                    hygienic,safe and convenient, I recommend it to everyone!
                </div>
                <div class="customer">
                    <img src="Images/review-3.PNG" alt="Customer photo">
                    <p>Aniladaya</p>
                </div>
            </div>

            <div class="col-customer span-1-of-3-customer customer-box">
                <div class="customer-text-box">
                    I at a time that my mother was in urgent need of blood. Donataro arranged the
                    required amount in no time. It saved us a lot of hassle and worry especially in such a trying
                    time.<br> Thank you Donataro!
                </div>
                <div class="customer">
                    <img src="Images/review-2.PNG" alt="Customer photo">
                    <p>Pardhiv Krishna</p>
                </div>
            </div>
            <div class="col-customer span-1-of-3-customer customer-box">
                <div class="customer-text-box">
                    I have been a part of this organization for quite some time and each time I'm amazed by the seamless
                    and efficient system in place.The importance of timely care especially in the recent times is known
                    and having Donataro takes a load off my mind.
                </div>
                <div class="customer">
                    <img src="Images/review-1.PNG" alt="Customer photo">
                    <p>Dr.Shreya</p>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->

    <footer>
        <div class="siteFooterBar">
            <div class="content1">
                <div class="foot">2023Donataro © All rights reserved.</div>
            </div>
        </div>
        <div class="footer-content">
            <h3>JOIN OUR CAUSE</h3>
            <p>Donating blood or platelets can be intimidating and even scary. Time to put those hesitations
                and
                fears
                aside. Learn from Donataro and platelet donors how simple and easy it is to roll up a
                sleeve
                and help
                save lives.</p>
            <div class="socials">
                <ul class="sci">
                    <li><a href="https://www.facebook.com/givebloodnhs/" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/indiablooddonation/?hl=en" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="http://nbtc.naco.gov.in/" target="_blank"><i class="fas fa-globe"></i></a>
                    </li>
                </ul>
            </div>
        </div>


    </footer>
    <!--Javascript for pre-loader-->

    <script>
        const preloader = document.querySelector('.preloader');
        const fadeEffect = setInterval(() => {
            if (!preloader.style.opacity) {
                preloader.style.opacity = 1;
            }
            if (preloader.style.opacity > 0) {
                preloader.style.opacity -= 1.5;
            } else {
                clearInterval(fadeEffect);
            }
        }, 1500);
        window.addEventListener('load', fadeEffect);
    </script>
    <!--js for scroll to top-->
    <script src="up.js"></script>

    <!--JAVASCRIPT FOR TOGGLE MENU -->
    <script>
        var headerl = document.getElementById("headerl");

        function showMenu() {
            headerl.style.right = "0";
        }

        function hideMenu() {
            headerl.style.right = "-210px";
        }
    </script>


    <!--js for scroll effects-->
    <script src="scroll.js"></script>

</body>

</html>