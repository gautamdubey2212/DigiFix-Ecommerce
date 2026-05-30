
<?php

include "DB.php";

/* GET LATEST ORDER */

$sql = "SELECT * FROM checkout_orders
ORDER BY id DESC LIMIT 1";

$result = mysqli_query($conn, $sql);

$order = mysqli_fetch_assoc($result);


/* GET ORDER ITEMS */

$order_id = $order['id'];

$item_sql = "SELECT * FROM order_items
WHERE order_id = '$order_id'";

$item_result = mysqli_query($conn, $item_sql);


/* CALCULATE TOTAL */

$subtotal = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>DigiFix Invoice</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
    background:#f5f7fb;
    font-family:Arial, Helvetica, sans-serif;
}

.invoice-box{
    max-width:900px;
    margin:auto;
    margin-top:40px;
    background:#fff;
    padding:50px;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.invoice-title{
    font-size:32px;
    font-weight:bold;
}

.invoice-header{
    border-bottom:2px solid #eee;
    padding-bottom:20px;
    margin-bottom:30px;
}

.table th{
    background:#f8f9fa;
}

.status-badge{
    background:#fff3cd;
    color:#856404;
    padding:8px 18px;
    border-radius:30px;
    font-weight:600;
    display:inline-block;
}

.total-box{
    background:#f8f9fa;
    padding:25px;
    border-radius:20px;
}

.download-btn{
    border-radius:50px;
    padding:14px 30px;
    font-weight:600;
}

</style>

</head>

<body>

<div class="container">

<div class="invoice-box">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center invoice-header">

        <div>

            <h1 class="invoice-title">
                DIGIFIX INVOICE
            </h1>

            <p class="text-muted mb-0">
                Genuine Software Licensing
            </p>

        </div>

        <div class="text-end">

            <h5>
                Invoice No:
            </h5>

            <strong>
                <?php echo $order['order_custom_id']; ?>
            </strong>

        </div>

    </div>


    <!-- CUSTOMER INFO -->
    <div class="row mb-5">

        <div class="col-md-6">

            <h5 class="fw-bold mb-3">
                Billing Details
            </h5>

            <p class="mb-1">
                <strong>Name:</strong>
                <?php echo $order['full_name']; ?>
            </p>

            <p class="mb-1">
                <strong>Email:</strong>
                <?php echo $order['email']; ?>
            </p>

            <p class="mb-1">
                <strong>Phone:</strong>
                <?php echo $order['phone']; ?>
            </p>

            <p class="mb-1">
                <strong>Address:</strong>

                <?php
                echo $order['street_address'] . ", " .
                     $order['city'] . ", " .
                     $order['state'] . ", " .
                     $order['country'];
                ?>

            </p>

        </div>

        <div class="col-md-6 text-md-end mt-4 mt-md-0">

            <h5 class="fw-bold mb-3">
                Payment Status
            </h5>

            <span class="status-badge">

                <?php echo $order['payment_status']; ?>

            </span>

        </div>

    </div>


    <!-- PRODUCTS -->
    <div class="table-responsive">

        <table class="table align-middle">

            <thead>

                <tr>

                    <th>Product</th>

                    <th>Price</th>

                    <th>Qty</th>

                    <th>Total</th>

                </tr>

            </thead>

            <tbody>

            <?php

            while($item = mysqli_fetch_assoc($item_result)){

                $total =
                $item['product_price'] *
                $item['quantity'];

                $subtotal += $total;

            ?>

            <tr>

                <td>

                    <?php echo $item['product_name']; ?>

                </td>

                <td>

                    ₹<?php echo number_format($item['product_price']); ?>

                </td>

                <td>

                    <?php echo $item['quantity']; ?>

                </td>

                <td>

                    ₹<?php echo number_format($total); ?>

                </td>

            </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>


    <?php

    $discount =
    $subtotal >= 5000 ? 1000 : 0;

    $gst =
    ($subtotal - $discount) * 0.18;

    $grand_total =
    ($subtotal - $discount) + $gst;

    ?>


    <!-- TOTAL -->
    <div class="row justify-content-end mt-5">

        <div class="col-md-5">

            <div class="total-box">

                <div class="d-flex justify-content-between mb-2">

                    <span>Subtotal</span>

                    <strong>
                        ₹<?php echo number_format($subtotal); ?>
                    </strong>

                </div>

                <div class="d-flex justify-content-between mb-2">

                    <span>Discount</span>

                    <strong class="text-success">
                        - ₹<?php echo number_format($discount); ?>
                    </strong>

                </div>

                <div class="d-flex justify-content-between mb-2">

                    <span>GST (18%)</span>

                    <strong>
                        ₹<?php echo number_format($gst); ?>
                    </strong>

                </div>

                <hr>

                <div class="d-flex justify-content-between">

                    <h5 class="fw-bold">
                        Grand Total
                    </h5>

                    <h5 class="fw-bold text-primary">

                        ₹<?php echo number_format($grand_total); ?>

                    </h5>

                </div>

            </div>

        </div>

    </div>


    <!-- BUTTON -->
    <div class="text-center mt-5">

        <button onclick="window.print()"
        class="btn btn-dark download-btn">

        Download Invoice

        </button>

    </div>

</div>

</div>

</body>

</html>

