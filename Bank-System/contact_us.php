<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/connection.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_form` (`name`, `email`, `subject`, `message`, `time`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";
    $result = mysqli_query($conn , $sql);

    if ($result) {
        echo '<script>alert("Message Sended Successfully !!") </script>';
    }
    else {
        echo '<script>alert("Oops! Message failed to send!! Try after some time.") </script>';
    }

}

?>


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
    <link rel="stylesheet" href="css/contact_us.css">

    
</head>
<body>

<!-- header section starts -->
<?php include 'partials/header.php'; ?>
<!-- header section ends -->


<div class="heading" style="background:url(images/header_bg-5.jpg) no-repeat">
    <h1>contact us</h1>
</div>


<!-- check-balance section starts -->
<section class="contact-us">

    <h1 class="heading-title">Fill the form</h1>

    <form action="" method="post" class="contact-us-form">

        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email id" name="email" required>
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <span>subject :</span>
                <input type="text" placeholder="what is your message about" name="subject" required>
            </div>
        </div>

        <div class="flex">
            <div class="inputBox">
                <span>message:</span>
                <textarea type="message" placeholder="enter your queries" name="message" cols="30" rows="5" required></textarea>
            </div>
        </div>

        <button type="submit" class="btn">Send Message</button>

    </form>

</section>
<!-- check-balance section ends -->


<?php include 'partials/footer.php'; ?>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>