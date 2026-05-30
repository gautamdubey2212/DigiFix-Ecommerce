```php
<?php

include "DB.php";

/* GET LATEST ORDER */

$sql = "SELECT * FROM checkout_orders
ORDER BY id DESC LIMIT 1";

$result = mysqli_query($conn, $sql);

$order = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Order Success</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
    background:#f5f7fb;
    font-family:Arial, Helvetica, sans-serif;
}

.success-box{
    max-width:700px;
    margin:auto;
    margin-top:80px;
    background:#fff;
    border-radius:25px;
    padding:60px 40px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.success-icon{
    width:100px;
    height:100px;
    background:#e9f9ef;
    color:#28a745;
    font-size:50px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    margin:auto;
}

.btn-custom{
    padding:14px 28px;
    border-radius:50px;
    font-weight:600;
}

.info-text{
    color:#6c757d;
    font-size:16px;
}

.order-info{
    background:#f8f9fa;
    border-radius:20px;
    padding:25px;
    margin-top:30px;
    text-align:left;
}

.order-info p{
    margin-bottom:10px;
    font-size:15px;
}

.status-badge{
    background:#fff3cd;
    color:#856404;
    padding:8px 16px;
    border-radius:30px;
    font-weight:600;
    display:inline-block;
}

</style>

</head>

<body>

<div class="container">

    <div class="success-box">

        <!-- SUCCESS ICON -->
        <div class="success-icon">

            <i class="bi bi-check-lg"></i>

        </div>

        <!-- HEADING -->
        <h1 class="fw-bold mt-4">

            Order Successfully Placed

        </h1>

        <!-- TEXT -->
        <p class="info-text mt-3">

            Thank you for choosing DigiFix.<br>

            Your payment screenshot has been submitted successfully.

        </p>


        <!-- ORDER INFO -->
        <div class="order-info">

            <p>
                <strong>Customer Name:</strong>
                <?php echo $order['full_name']; ?>
            </p>

            <p>
                <strong>Order ID:</strong>
                <?php echo $order['order_custom_id']; ?>
            </p>

            <p>
                <strong>Email:</strong>
                <?php echo $order['email']; ?>
            </p>

            <p>
                <strong>Payment Status:</strong>

                <span class="status-badge">

                <?php echo $order['payment_status']; ?>

                </span>
            </p>

        </div>


        <!-- BUTTONS -->
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-5">

            <a href="invoice.php"
               class="btn btn-dark btn-custom">

               <i class="bi bi-download"></i>
               Download Invoice

            </a>

           

            <a href="Product.php"
               class="btn btn-primary btn-custom">

               <i class="bi bi-bag"></i>
               Continue Shopping

            </a>

        </div>

    </div>

</div>

</body>

</html>
```
