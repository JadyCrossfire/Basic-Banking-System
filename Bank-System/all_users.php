<?php
    include "partials/connection.php";
    $sql = "SELECT * FROM all_users";
    $result = mysqli_query($conn,$sql);
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
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/footer.css">



</head>
<body>

<!-- header section starts -->
<?php include 'partials/header.php'; ?>
<!-- header section ends -->


<div class="heading" style="background:url(images/header_bg-2.jpg) no-repeat">
    <h1>All Users - Details</h1>
</div>

<!-- Table Starts -->
<section class="home-services">
    
    <div class="table-container">

    <h1 class="heading-title"> USERS </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>ACCOUNT NUMBER </th>
                    <th>CURRENT BALANCE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <tr>
                            <td>".$row['id']."</td>
                            <td><strong>".$row['name']."</strong></td>
                            <td>".$row['email']."</td>
                            <td>".$row['acc_no']."</td>
                            <td>".$row['balance']."</td>
                            
                            <td id='transfer'>
                                <a href='send_money.php?id= ".$row['id']."'><button type='button' class='spl-btn'>Send money</button></a>
                            </td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
</div>
</section>


<!-- Table Ends -->

<!-- footer section section starts -->
<?php include 'partials/footer.php'; ?>
<!-- footer section section ends -->


<!-- Swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>



</body>
</html>