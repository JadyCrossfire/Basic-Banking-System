<?php

include 'partials/connection.php';
$sql = "SELECT * FROM `transactions`";
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
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/table.css">



</head>
<body>

<!-- header section starts -->
<?php include 'partials/header.php'; ?>
<!-- header section ends -->


<div class="heading" style="background:url(images/header_bg-1.jpg) no-repeat">
    <h1>Transactions</h1>
</div>


<!-- transaction details table starts -->
<section class="transaction-details">
    
    <div class="table-container">

    <h1 class="heading-title"> TRANSACTION DETAILS </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SENDER</th>
                    <th>receiver</th>
                    <th>AMOUNT CREDITED</th>
                    <th>TIME OF TRANSACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <tr>
                        <td>'.$row['id'].'</td>
                        <td><strong>'.$row['sender'].'</strong></td>
                        <td>'.$row['receiver'].'</td>
                        <td><strong>'.$row['credit'].'</strong></td>
                        <td>'.$row['time'].'</td>
                    </tr>';
                    //$conn->close();  
                }
                    ?>
            </tbody>
        </table>
    </div>
</section>

<!--transaction details table ends -->

<?php include 'partials/footer.php'; ?>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>