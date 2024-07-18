<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- font awesome cdn link: https://cdnjs.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">

</head>
<body>


<!-- header section starts -->
<?php include 'partials/header.php'; ?>
<!-- header section ends -->


<!-- home hero section starts -->
<section class="home">
    <div class="home-hero" style="background:url(images/hero-img.jpg) no-repeat">
        <div class="content">
            <span>Make banking simple!</span>
            <h3>welcome to TSF bank</h3>
            <a href="#home-services" class="btn">explore our services</a>
        </div>
    </div>
</section>
<!-- home hero section ends -->


<!-- home about section starts -->
<section class="home-about">

    <div class="image">
    <img src="images/home-about-img.jpg" width="100" height="100" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>This is a project website created by Jeyadarshini S for the Graduate Rotational Internship Program, conducted by The Sparks Foundation. For more details, click the link below.</p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>
<!-- home about section ends -->


<!-- home services link section starts -->
<section class="home-services" id="home-services">

    <h1 class="heading-title"> our services</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/img-1.png" alt="">
            </div>
            <div class="content">
                <h3>View all Users</h3>
                <p>All the TSF bank account user details are at your disposal.  Including yours!</p>
                <a href="all_users.php" class="btn"> view now!</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.png" alt="">
            </div>
            <div class="content">
                <h3>View Transactions</h3>
                <p>Your transaction timeline. People you've sent money too. All data displayed with sheer transparency</p>
                <a href="transactions.php" class="btn"> view now!</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.png" height="25" width="25" alt="">
            </div>
            <div class="content">
                <h3>check balance</h3>
                <p>Want to make sure whether you bank balance is currently on balance?</p>
                <a href="all_users.php" class="btn"> Check now!</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-4.png" alt="">
            </div>
            <div class="content">
                <h3>Send Money</h3>
                <p>Instant money transfer made easy!</p>
                <a href="all_users.php" class="btn"> Send now!</a>
            </div>
        </div>

    </div>

</section>
<!-- home services link section ends -->


<!-- footer section section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer section section ends -->


<!-- Swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>