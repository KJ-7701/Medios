<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/registration.css">
    <link rel="stylesheet" href="../CSS/modal.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    <title>Medios</title>
</head>

<body>
    <header>
        <div class="top-nav-bg"></div>
        <hr class="upper-line">
        <div class="navbar-container">
            <a href="Index.php" style="color: #5f5b57;">
                <h1>Medios</h1>
            </a>
            <div class="nav-menu">
                <nav>
                    <a href="Index.php">Home</a>
                    <a href="#Featured">Featured</a>
                    <a href="#New-Arrivals">New Arrivals</a>
                    <a href="#Contact">Contact</a>
                    <a href="#open-modal">Login</a>
                </nav>
            </div>

            <div class="modal-window" id="open-modal">

                <div class="display">

                    <a href="" title="Close" class="modal-close">

                        <i class="fa fa-times"></i>

                    </a>

                    <form action="Index.php">
                        <div class="login-form">
                            <h1>IDENTIFICATION <i class="far fa-user-circle"></i></h1>
                            <hr>
                            <h2>I ALREADY HAVE AN ACCOUNT</h2>
                            <div class="login-credentials">
                                <label for="Username">
                                    <h3>NAME</h3>
                                </label>
                                <input type="text" placeholder="Dwayne Johnson" name="name" id="name" required> <br>
                                <br>

                                <label for="pass1">
                                    <h3>PASSWORD</h3>
                                    <input type="password" placeholder="Example@00" name="password" id="pass1" required>
                                    <br>
                                    <a href="#">Forgot Password?</a>
                                    <br>
                                </label>
                            </div> <br>

                            <div class="buttons">
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                                <span class="login-button"><button type="submit">Login</button></span>

                            </div>
                            <hr>
                            <div class="create-new-account">
                                <h2>I DON'T HAVE AN ACCOUNT</h2>
                                <p>Enjoy added benefits and a richer experience by creating a personal account</p> <br>
                                <a href="registration.php">CREATE ACCOUNT</a>
                            </div>
                        </div>

                    </form>

                </div>

            </div>


            <div class="search-bar">
                <div class="search-container">
                    <input type="search" placeholder="Product, Store..." name="search">
                    <button type="submit"><span><i class="fas fa-search"></i></span></button>
                </div>
            </div>

            <div class="sidebar">
                <nav class="icons">
                    <a href="#" class="heart-icon">
                        <span><i class="far fa-heart"></i></span>
                    </a>
                    <a href="#" class="hide-icon">
                        <span><i class="fas fa-shopping-cart"></i></span>
                    </a>
                    <a href="#open-modal" class="user-icon">
                        <span><i class="far fa-user"></i></span>
                    </a>
                </nav>
            </div>

            <div class="top-nav">
                <nav>

                    <a href="#">
                        <span><i class="fas fa-globe"></i></span>
                        ENGLISH [INTL]
                    </a>
                    <a href="#">
                        <span><i class="far fa-question-circle"></i></span>
                        Can we help you?
                    </a>
                    <a href="#">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        Locate a Store
                    </a>


                </nav>

            </div>
        </div>
    </header>
    <hr style="margin-bottom: 0;">


    <div class="col-lg-8">
        <div class="create-account">
            <h1>CREATE A NEW ACCOUNT</h1>
            <hr>

            <form id="Phase2" action="signup_script.php" method="POST" onsubmit="return validateform()"> <br>
                <h2>LOGIN INFORMATION</h2> <br>
                <div class="information-page-form-section">
                    <div class="id-page-form-section">
                        <label for="email">
                            <h3>EMAIL</h3>
                        </label> <br>
                        <input type="email" placeholder="name@example.com" name="email" id="email" required> <br>
                        <br>

                        <label for="emailConf">
                            <h3>EMAIL CONFIRMATION</h3>
                        </label> <br>
                        <input type="email" placeholder="name@example.com" name="emailConf" id="emailConf" required> <br>
                        <br>

                    </div>

                    <label for="password">
                        <h3>PASSWORD</h3>
                    </label> <br>
                    <input type="password" placeholder="Example@00" name="password" id="password" maxlength="14">
                    <br> <br>

                    <label for="pass2">
                        <h3>PASSWORD CONFIRMATION</h3>
                    </label> <br>
                    <input type="password" placeholder="Example@00" name="pass2" id="pass2" maxlength="14" required>
                    <br> <br>

                </div> <br> <br>

                <h2>PERSONAL INFORMATION</h2> <br>
                <div class="information-page-form-section">
                    <label for="title">
                        <h3>TITLE</h3>
                    </label> <br>
                    <select name="title" id="title" required>
                        <option value="">Select your title</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                        <option value="Mx">Mx</option>
                        <option value="No say">Prefer not to say</option>
                    </select> <br> <br>

                    <label for="username">
                        <h3>NAME</h3>
                    </label> <br>
                    <input type="text" placeholder="Dwayne Johnson" name="name" id="username"> <br>
                    <br>

                    <label for="contact">
                        <h3>CONTACT</h3>
                    </label> <br>
                    <input type="tel" placeholder="1234567890" name="contact" id="contact"  minlength="10" required> <br> <br>

                    <label for="address">
                        <h3>ADDRESS</h3>
                    </label> <br>

                    <textarea placeholder="apartment, xx, street, city" name="address" id="address" cols="30" rows="1" required></textarea> <br> <br>

                    <label for="country">
                        <h3>COUNTRY/REGION</h3>
                    </label> <br>
                    <input type="text" placeholder="RUSSIA" name="country" id="country" maxlength="16" required> <br>
                    <br>


                </div>
                <h2></h2> <br>
                <div class="information-page-form-section-subscribe">
                    <input type="checkbox" placeholder="RUSSIA" name="subscribe" id="subscribe" maxlength="14" autofocus required>
                    <span>Subscribe to receive Medios emails. By subscribing you agree to our <a href="#" class="privacy-policy">Privacy Policy.</a></span>
                </div> <br> <br>


                <div class="proceed">
                    <a href="Index.php" class="buttons" onclick="alert('Do you wish to go back?')">Back</a>

                    <input class="buttons" id="reset" onclick="alert('Do you wish to reset?')" type="reset" value="Reset">

                    <input class="buttons" onclick="alert('Do you wish to Sign-up?')" type="submit" value="Sign-up">
                </div>

            </form>
        </div>
        <!--END OF CREATE-ACCOUNT-->
    </div>

    <div class="col-lg-4 col-md-12 col-tb-12 col-sm-12 col-xs-12">
        <div class="join-us">
            <div class="client-services">
                <h3>Client Services</h3>
                <hr>
                <a href="#">
                    <span><i class="far fa-envelope"></i></span>
                    Email Us
                </a>
            </div>

            <div class="join-us-message">
                <h2>WHAT YOU WILL FIND IN YOUR MEDIOS ACCOUNT</h2>
                <p>
                    <span><i class="far fa-folder-open"></i></span>
                    Manage your personal information
                </p>
                <hr>

                <p>
                    <span><i class="fas fa-envelope-open-text"></i></span>
                    Receive MEDIOS's digital communications
                </p>
                <hr>

                <p>
                    <span><i class="far fa-heart"></i></span>
                    Register your wishlist
                </p>

            </div>
        </div>
    </div>
    <hr>


    <footer>

        <div class="copyright" id="Contact">
            <div class="footer-start">
                <div class="small-container">
                    <div class="footer-panel">
                        <div class="footer-container">
                            <div class="col-lg-3 col-md-6 col-tb-6 col-sm-12 col-xs-12">
                                <section class="footer-widget">
                                    <div class="section-title">
                                        <h2>Information</h2>
                                    </div>
                                    <hr>
                                    <div class="section-menu">
                                        <ul>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Contact us</a></li>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Store</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>

                            <div class="col-lg-3 col-md-6 col-tb-6 col-sm-12 col-xs-12">
                                <section class="footer-widget">
                                    <div class="section-title">
                                        <h2>Collections</h2>
                                    </div>
                                    <hr>
                                    <div class="section-menu">
                                        <ul>
                                            <li><a href="#">Basic Edition</a></li>
                                            <li><a href="#">Ripped Jeans</a></li>
                                            <li><a href="#">Party Wear</a></li>
                                            <li><a href="#">Casuals</a></li>
                                            <li><a href="#">Denims</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>

                            <div class="col-lg-3 col-md-6 col-tb-6 col-sm-12 col-xs-12">
                                <section class="footer-widget">
                                    <div class="section-title">
                                        <h2>Manage</h2>
                                    </div>
                                    <hr>
                                    <div class="section-menu">
                                        <ul>
                                            <li><a href="#">My Profile</a></li>
                                            <li><a href="#">Wishlist</a></li>
                                            <li><a href="#">My Cart</a></li>
                                            <li><a href="#">Order-history</a></li>
                                            <li><a href="#">Shipping</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>

                            <div class="col-lg-3 col-md-6 col-tb-6 col-sm-12 col-xs-12">
                                <section class="footer-widget">
                                    <div class="section-title">
                                        <h2>Before You Buy</h2>
                                    </div>
                                    <hr>
                                    <div class="section-menu">
                                        <ul>
                                            <li><a href="#">Fees &amp; Payment</a></li>
                                            <li><a href="#">Shipping &amp; Delivery</a></li>
                                            <li><a href="#">Warranty, Return &amp; Refund</a></li>
                                            <li><a href="#">Certifications</a></li>
                                            <li><a href="#">Terms &amp;Conditions</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!--END OF FOOTER-PANEL-->
                </div>
                <!--END OF SMALL-CONTAINER-->
            </div>
            <hr>

            <div class="footer-end">
                <div class="footer-end-icons">
                    <h2>Connect With Us</h2>
                    <a href="#">
                        <span><i class="fab fa-facebook-square"></i></span>
                    </a>
                    <a href="#">
                        <span><i class="fab fa-instagram-square"></i></span>
                    </a>
                    <a href="#">
                        <span><i class="fab fa-twitter-square"></i></span>
                    </a>
                    <a href="#">
                        <span><i class="fab fa-youtube-square"></i></span>
                    </a>
                    <a href="#">
                        <span><i class="fab fa-pinterest-square"></i></span>
                    </a>
                </div>
                <p>&copy;copyright. Designed by students</p>
            </div>
        </div>
    </footer>

    <script src="../JS/registration.js"></script>
    <script src="https://kit.fontawesome.com/a9b8edee7c.js" crossorigin="anonymous"></script>
</body>

</html>