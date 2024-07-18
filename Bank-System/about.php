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

</head>
<body>

<!-- header section starts -->
<?php include 'partials/header.php'; ?>
<!-- header section ends -->

<div class="heading" style="background:url(images/header_bg-1.jpg) no-repeat">
    <h1>about</h1>
</div>

<!-- about section starts -->
<section class="home-about">

    <div class="image">
    <img src="images/pfp-image.jpeg" width="100" height="100" alt="">
    </div>

    <div class="content">
        <h3>about</h3>
        <p>
        This is a project website created by <strong>Jeyadarshini S</strong> for the Graduate Rotational Internship Program, conducted by The Sparks Foundation. This project is created to complete the Task 1 for the 'Web and Mobile Development' category, which challenges the interns to build a simple banking website that demonstrates a specific user flow.</p>
        <p><strong>MAIN USER FLOW:</strong> User opens the Home Page > Goes to "View All Users" page > Finds their bank account details > Clicks "Send Money" > Fills in transaction details > Transaction success is updated on "Transactions" log page > Sender and Reciever balances are updated > End. </p>
        <p><strong>LANGUAGES USED:</strong> HTML, CSS, JAVASCRIPT, PHP, MYSQL.</p>
        <p>HTML, CSS and Javascript is used for creating a robust, functional front-end while PHP and MySQL served for the back-end processes.</p>

        <a href="home.php" class="btn">go back home</a>
    </div>

</section>

<!-- about section ends -->

<?php include 'partials/footer.php'; ?>


<!-- custom js file link -->
<script src="js/script.js"></script>



</body>
</html>