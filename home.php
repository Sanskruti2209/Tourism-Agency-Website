<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Swiper css link -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- css file  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- header section starts -->


<section class="header">
    <a href="home.php" class="logo">Befikre Travels</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends  -->

<!-- home section starts -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(home_img_1.jpg) no-repeat">
            <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Travel around the world</h3>
                <a href="package.php" class="btn">Discover more</a>
            </div>

            </div>
       

    
            <div class="swiper-slide slide" style="background:url(home_img_2.jpg) no-repeat">
            <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Discover new places</h3>
                <a href="package.php" class="btn">Discover more</a>
            </div>

            </div>
       
    
    
            <div class="swiper-slide slide" style="background:url(home_img_3.jpg) no-repeat">
            <div class="content">
                <span>Explore, Discover, Travel</span>
                <h3>Make your tour worthwhile</h3>
                <a href="package.php" class="btn">Discover more</a>
            </div>

            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- home section ends -->

<!-- services section starts -->

<section class="services" id="serve">
    <h1 class="heading-title">Our Services</h1>

    <div class="box-container">
        <div class="box">
            <img src="mountains_193189.png" alt="">
            <h3>Adventure</h3>
        </div>

        <div class="box">
            <img src="address.png" alt="">
            <h3>Tour Guide</h3>
        </div>

        <div class="box">
            <img src="luggage_7997756.png" alt="">
            <h3>Trekking</h3>
        </div>

        <div class="box">
            <img src="bonfire_7591361.png" alt="">
            <h3>Campfire</h3>
        </div>

        <div class="box">
            <img src="direction_4869839.png" alt="">
            <h3>Offroad</h3>
        </div>

        <div class="box">
            <img src="camp.png" alt="">
            <h3>Camping</h3>
        </div>

    </div>
</section>

<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">
    <div class="image">
        <img src="home_about_img.jpg" alt="">
    </div>

    <div class="content">
        <h3>About us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptatibus officiis laboriosam. Qui facilis assumenda illo, repudiandae repellendus natus cupiditate provident totam consectetur nostrum itaque asperiores aperiam officiis, impedit doloremque?</p>
        <a href="about.php" class="btn">Read more</a>
    </div>
</section>

<!-- home about section ends -->

<!-- home packages section starts -->

<section class="home-packages" id="package">
    <h1 class="heading-title">Our Packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="p-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure and Tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, doloremque.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="p-2.avif" alt="">
            </div>
            <div class="content">
                <h3>Adventure and Tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, doloremque.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="p-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure and Tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, doloremque.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
    </div>
    <div class="load-more"> <a href="package.php" class="btn">Load More</a></div>
</section>

<!-- home packages section ends -->

<!-- home offer section starts -->
<section class="home-offer" id="offer">
    <div class="content">
        <h3>Upto 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, doloremque.</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</section>
<!-- home offer section ends -->

<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
        <h3>Quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
        <h3>Extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>        
        </div>

        <div class="box">
        <h3>Contact Information</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
        <a href="#"><i class="fas fa-phone"></i>+111-222-333</a>
        <a href="#"><i class="fas fa-envelope"></i>befikretravels@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Mumbai, India-400104</a>            
        </div>

        <div class="box">
        <h3>Follow Us</h3>
        <a href="https://www.facebook.com/befikretourism/"><i class="fab fa-facebook-f"></i>Facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
        <a href="https://www.instagram.com/befikretourism/"><i class="fab fa-instagram"></i>Instagram</a>
        <a href="https://www.linkedin.com/company/befikre-tourism/"><i class="fab fa-linkedin"></i>LinkedIn</a>            
        </div>
    </div>
    <div class="credit">Created by <span>US </span>|All Rights Reserved!</div>
</section>

<!-- footer section ends -->


<!-- swiper js link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- js file -->
<script src="script.js"></script>
</body>
</html>