<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/modal.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="" /> -->
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
            <!-- <button class="dropbtn">Dropdown
            <i class="far fa-caret-square-down"></i>
            </button> -->
            <div class="modal-window" id="open-modal">

                <div class="display">

                    <a href="" title="Close" class="modal-close">

                        <i class="fa fa-times"></i>

                    </a>

                    <form action="login_submit.php" method="POST">
                        <div class="login-form">
                            <h1>IDENTIFICATION <i class="far fa-user-circle"></i></h1>
                            <hr>
                            <h2>I ALREADY HAVE AN ACCOUNT</h2>
                            <div class="login-credentials">
                                <label for="email">
                                    <h3>EMAIL</h3>
                                </label>
                                <input type="email" placeholder="Example77@gmail.com" name="email" id="email" required> <br>
                                <br>

                                <label for="pass1">
                                    <h3>PASSWORD</h3>
                                    <input type="password" placeholder="Example@00" name="password" id="pass1" required> <br>
                                    <a href="#">Forgot Password?</a>
                                    <br>
                                </label>
                            </div>

                            <div class="buttons">
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                                <button type="submit">Login</button>

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
    <hr>

    <main>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="../Images/sofa-1.jpg" style="width: 1920px; height: 610px;">
                <div class="slideshow-transparent-bg-1 col-lg-6 col-md-6 col-tb-6 col-sm-8 col-xs-8"></div>
                <div class="slideshow-transparent-bg-2 col-lg-6 col-md-6 col-tb-6 col-sm-4 col-xs-4"></div>

                <div class="slideshow-text">
                    <h2>Medios Originals</h2>
                    <p>Starting From <span class="sofa-collection-price">&dollar;499</span></p> <br>
                    <a href="#"><span class="view-more">View More</span></a>
                </div>
            </div>


            <div class="mySlides fade">
                <img src="../Images/sofa-2.jpg" style="width: 1920px; height: 610px;">
                <div class="slideshow-transparent-bg-1 col-lg-6 col-md-6 col-tb-6 col-sm-8 col-xs-8"></div>
                <div class="slideshow-transparent-bg-2 col-lg-6 col-md-6 col-tb-6 col-sm-4 col-xs-4"></div>

                <div class="slideshow-text">
                    <h2>Unlimited Chair Collection</h2>
                    <p>Starting From <span class="sofa-collection-price">&dollar;399</span></p> <br>
                    <a href="#"><span class="view-more">View More</span></a>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="../Images/sofa-3.jpg" style="width: 1920px; height: 610px;">
                <div class="slideshow-transparent-bg-1 col-lg-6 col-md-6 col-sm-8"></div>
                <div class="slideshow-transparent-bg-2 col-lg-6 col-md-6 col-sm-4"></div>

                <div class="slideshow-text">
                    <h2>Unlimited Sofa Collection</h2>
                    <p>Starting From <span class="sofa-collection-price">&dollar;349</span></p> <br>
                    <a href="#"><span class="view-more">View More</span></a>
                </div>
            </div>
            <!--END OF SLIDES-FADE-->
        </div>
        <!--END OF SLIDESHOW-CONTAINER-->
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <!--FEATURED-->
        <div class="small-container" id="Featured">
            <div id="popular-product">
                <section class="section-header">
                    <h2>Featured</h2>
                </section>
                <div class=" col-lg-3 col-md-3 col-tb-3 col-sm-12 col-xs-12">
                    <div class="product-container">
                        <div class="single-popular-product-img" style="margin-top: 40px;">
                            <img src="../Images/popular-product-1.png" alt="">
                        </div>
                        <h2 class="item-name">
                            <a href="#">Arm Chair</a>
                        </h2>
                        <div class="single-popular-product-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, eveniet.
                            </p> <br>

                        </div>
                    </div>
                </div>


                <div class=" col-lg-6 col-md-6 col-tb-6 col-sm-12 col-xs-12">
                    <div class="product-container">
                        <div class="inner-product-container">
                            <div class="col-lg-5">
                                <div class="single-popular-product-img">
                                    <img src="../Images/popular-product-2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="single-popular-product-middle">
                                    <h2 class="item-name">
                                        <a href="#">Exclusive Design chairs </a>
                                    </h2>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo repellat fugiat non pariatur accusantium fugit consequatur.
                                    </p> <br>
                                    <a href="#" class="discover-more"> <span>View More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-3 col-tb-3 col-sm-12 col-xs-12">
                    <div class="product-container">
                        <div class="single-popular-product-img">
                            <img src="../Images/popular-product-3.png" alt="">
                        </div>
                        <h2 class="item-name">
                            <a href="#">Ceiling Lamp</a>
                        </h2>
                        <div class="single-popular-product-content">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, id!</p> <br>

                        </div>
                    </div>
                </div>
            </div> <!-- END OF POPULAR-PRODUCTS -->
        </div> <!-- END OF FEATURED-->

        <div class="small-container">
            <section id="New-Arrivals">
                <div class="New-Arrivals-container">
                    <section class="section-header">
                        <h2>New Arrivals</h2>
                    </section>
                    <?php
                    include "connection.php";
                    $select_query = mysqli_query($con, "SELECT * FROM items");

                    while ($row = mysqli_fetch_array($select_query)) {
                    ?>
                        <div class="col-lg-3 col-md-4 col-tb-6 col-sm-12 col-xs-12">
                            <div class="item-container">
                                <div class="image-wrapper">
                                    <figure>
                                        <img src="<?php echo $row['img'] ?>" alt="">
                                    </figure>
                                </div>
                                <h2 class="item-name">
                                    <a href="#"><?php echo $row['name'] ?></a>
                                </h2>
                                <p class="price-of-items">$<?php echo $row['price'] ?></p>
                                <p class="sale-tag">Sale</p>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </section> <!-- END OF NEW-ARRIVALS -->
        </div>
        <!--END OF SMALL-CONTAINER-->

    </main>

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

    <script src="../JS/script.js"></script>
    <script src="https://kit.fontawesome.com/a9b8edee7c.js" crossorigin="anonymous"></script>
</body>

</html>