<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/connection.php';

    $from = $_GET['id'];
    $to = $_POST['to'];
    $credit = $_POST['credit'];

    $sql = "SELECT * FROM `all_users` WHERE id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * FROM `all_users` WHERE id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

    // check input value is negative or not
    if (($credit)<0) {
        echo '<script type="text/javascript">alert("Oops! Negative values cannot be Transferred") </script>';
    }

    // check insufficient amount.
    else if($credit > $sql1['balance']) {
        echo '<script type="text/javascript">alert("Oops! Insufficient Amount") </script>';
    }
    
    // check zero values
    else if($credit == 0) {
        echo '<script type="text/javascript">alert("Oops! Zero value cannot be Transferred") </script>';
    }

    else {
        
        // deducting credit from sender's account
        $newbalance = $sql1['balance'] - $credit;
        $sql = "UPDATE all_users set balance=$newbalance where id=$from";
        mysqli_query($conn,$sql);
        

        // adding credit to receiver's account
        $newbalance = $sql2['balance'] + $credit;
        $sql = "UPDATE all_users set balance=$newbalance where id=$to";
        mysqli_query($conn,$sql);
        
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transactions(`sender`, `receiver`, `credit`) VALUES ('$sender','$receiver','$credit')";
        $query=mysqli_query($conn,$sql);

        // window.location='index.php';
        if($query){
            echo "<script> alert('Transaction Successful'); window.location='transactions.php'; </script>"; 
        }

        $newamount= 0;
        $credit =0;
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
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/send_money.css">
</head>

<body>

<!-- header section starts -->
<?php include 'partials/header.php'; ?>
<!-- header section ends -->


<div class="heading" style="background:url(images/header_bg-4.jpg) no-repeat">
    <h1>Send Money</h1>
</div>

<!-- Fetching selected user's details -->
<?php
    include 'partials/connection.php';
    $sid=$_GET['id'];
    $sql = "SELECT * FROM  all_users where id=$sid";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error : ".$sql."<br>".mysqli_error($conn);
    }
    $row=mysqli_fetch_assoc($result);
?>


<!-- sender details table starts -->
<section class="sender-details">
    
    <div class="table-container">

    <h1 class="heading-title"> SENDER DETAILS </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>ACCOUNT NUMBER</th>
                    <th>BALANCE</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    echo '
                    <tr>
                        <td>'.$row['id'].'</td>
                        <td><strong>'.$row['name'].'</strong></td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['acc_no'].'</td>
                        <td><strong>'.$row['balance'].'</strong></td>
                    </tr>';
                    //$conn->close();  
                    ?>
            </tbody>
        </table>
    </div>
</section>

<!--sender details table ends -->

<!-- send money section starts -->

<section class="send-money">

    <h1 class="heading-title">send money to</h1>

    <form class="send-money-form" method="POST">

    <div class="flex">

        <div class="inputBox">
            <span>receiver:</span>
            <select id="select" name="to" required>
                <option disabled selected>Transfer money to... </option>
                <?php
                $sql = "SELECT * FROM  all_users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="'.$row["id"].'">'.$row["name"].' (CURRENT BALANCE : '.$row["balance"].' )</option>';
                } 
            ?>
            </select>
        </div>

        <div class="inputBox">
            <span>amount :</span>
            <input type="number" placeholder="Amount to transfer" name="credit" required>
        </div>

    </div>

        <button type="submit" class="btn">Transfer</button>

    </form>

</section>

<!-- send money section ends -->


<?php include 'partials/footer.php'; ?>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>
