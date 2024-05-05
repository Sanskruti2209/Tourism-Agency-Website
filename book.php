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

<div class="heading" style="background:url(book_form_img.jpg) no-repeat">
    <h1>Book Now</h1>
</div>

<!-- booking section starts -->
<section class="booking">
    <h1 class="haeding-title">Book your Tour</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="Enter your name" name="name">               
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="text" placeholder="Enter your email" name="email">               
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="Enter your number" name="phone">               
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="Enter your address" name="address">               
            </div>
            <div class="inputBox">
                <span>Where to :</span>
                <input type="text" placeholder="Enter your destination" name="location">               
            </div>
            <div class="inputBox">
                <span>How many :</span>
                <input type="number" placeholder="Number of guests" name="guests">               
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">               
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">               
            </div>
            <input type="submit" value="Submit" class="btn" name="send">
        </div>
    </form>
</section>
<!-- booking section ends -->

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