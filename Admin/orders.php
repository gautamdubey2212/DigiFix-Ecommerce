<?php

include "conn.php";

/* LOGIN CHECK */

if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}


/* UPDATE PAYMENT STATUS */

if(isset($_POST['update_status'])){

   
        $order_id =
        intval($_POST['order_id']);



   
            $payment_status =
            mysqli_real_escape_string(
            $conn,
            $_POST['payment_status']
            );



    $update_query =
    "UPDATE checkout_orders
    SET payment_status='$payment_status'
    WHERE id='$order_id'";

    mysqli_query($conn, $update_query);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>View Orders</title>

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

        body{
            background:#f4f6f9;
            font-family:Arial, sans-serif;
        }

       .main-content{
    padding:40px;
      }

       .page-title{
    font-size:32px;
    font-weight:bold;
    color:#111827;
    text-align:center;
}

        .order-card{
    border:none;
    border-radius:24px;
    overflow:hidden;

    width:85%;
    margin:30px auto;
}

        .table thead{
            background:#111827;
            color:white;
        }

        .product-img{
            width:70px;
            height:70px;
            object-fit:cover;
            border-radius:12px;
            border:2px solid #eee;
        }

        .badge-status{
            background:#fef3c7;
            color:#92400e;
            padding:8px 14px;
            border-radius:20px;
            font-size:13px;
            font-weight:bold;
        }

        .customer-box{
            background:#f9fafb;
            border-radius:16px;
            padding:15px;
        }

        .table td{
            vertical-align:middle;
        }
        .top-bar{
    width:85%;
    display:flex;
    align-items:center;
    gap:20px;
}

.top-header{
    width:85%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}


.back-btn{
    background:#111827;
    color:white;
    text-decoration:none;
    padding:12px 22px;
    border-radius:10px;
    font-size:15px;
    font-weight:500;
    transition:0.3s;
}

.back-btn:hover{
    background:#1f2937;
    color:white;
}
.top-header{
    width:85%;
    display:flex;
    justify-content:flex-end;
    position:relative;
    top:115px;
}


/* PAYMENT SCREENSHOT */

.payment-proof{
    width:80px;
    height:80px;
    object-fit:cover;
    border-radius:12px;
    border:2px solid #e5e7eb;
    transition:0.3s;
}

.payment-proof:hover{
    transform:scale(1.05);
}


/* STATUS DROPDOWN */

.status-select{
    min-width:220px;
    border-radius:12px;
}

    </style>

</head>

<body>

<div class="top-header">



    <a href="dashboard.php" class="back-btn">

        Back Dashboard

    </a>

</div>





<div class="main-content">

    <!-- TOP -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="page-title">

            View Orders

        </h2>

    </div>


    <?php

    $orders_query =
    "SELECT * FROM checkout_orders ORDER BY id DESC";

    $orders_result =
    mysqli_query($conn, $orders_query);


    if(mysqli_num_rows($orders_result) > 0){

        while($order = mysqli_fetch_assoc($orders_result)){

            $order_id = $order['id'];

    ?>

    

    <!-- ORDER CARD -->
    <div class="card shadow order-card mb-5">

        <div class="card-body p-4">

            <!-- CUSTOMER INFO -->
            <div class="customer-box mb-4">

                <div class="row">

                    <div class="col-md-4 mb-3">

                        <h6 class="text-muted">

                            Customer Name

                        </h6>

                        <h5>

                            <?php echo $order['full_name']; ?>

                        </h5>

                    </div>

                    <div class="col-md-4 mb-3">

                        <h6 class="text-muted">

                            Email

                        </h6>

                        <h5>

                            <?php echo $order['email']; ?>

                        </h5>

                    </div>

                    <div class="col-md-4 mb-3">

                        <h6 class="text-muted">

                            Phone

                        </h6>

                        <h5>

                            <?php echo $order['phone']; ?>

                        </h5>

                    </div>

                    <div class="col-md-6 mb-3">

                        <h6 class="text-muted">

                            Address

                        </h6>

                        <h6>

                            <?php

                            echo
                            $order['street_address'] . ", " .
                            $order['flat_no'] . ", " .
                            $order['city'] . ", " .
                            $order['state'] . ", " .
                            $order['country'];

                            ?>

                        </h6>

                    </div>

                    <div class="col-md-3 mb-3">

                        <h6 class="text-muted">

                            Order Date

                        </h6>

                        <h6>

                            <?php echo $order['created_at']; ?>

                        </h6>

                    </div>

                    
<div class="col-md-3 mb-3">

    <h6 class="text-muted">

        Payment Status

    </h6>

    <form method="POST">

        <input type="hidden"
        name="order_id"
        value="<?php echo $order['id']; ?>">

        <select
        name="payment_status"
        class="form-select status-select mb-2">

            <option value="Pending Verification"
            <?php
            if($order['payment_status']
            == 'Pending Verification'){
            echo 'selected';
            }
            ?>>

            Pending Verification

            </option>

            <option value="Paid"
            <?php
            if($order['payment_status']
            == 'Paid'){
            echo 'selected';
            }
            ?>>

            Paid

            </option>

            <option value="Rejected"
            <?php
            if($order['payment_status']
            == 'Rejected'){
            echo 'selected';
            }
            ?>>

            Rejected

            </option>

        </select>

        <button type="submit"
        name="update_status"
        class="btn btn-success btn-sm">

        Update Status

        </button>

    </form>

</div>


        <div class="col-md-3 mb-3">

            <h6 class="text-muted">
                Payment Proof
            </h6>

            <?php
            if(!empty($order['payment_screenshot'])){
            ?>

            <a href="/DFI/<?php echo $order['payment_screenshot']; ?>" target="_blank">

                <img
                src="/DFI/<?php echo $order['payment_screenshot']; ?>"
                class="payment-proof">

            </a>

            <?php
            }else{
                echo "No Screenshot";
            }
            ?>

            </div>
    
           </div> <!-- row -->
</div> <!-- customer-box -->





            <!-- PRODUCTS TABLE -->
            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                    <tr>

                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>

                    </tr>

                    </thead>

                    <tbody>

                    <?php

                    $items_query =
                    "SELECT * FROM order_items
                     WHERE order_id = '$order_id'";

                    $items_result =
                    mysqli_query($conn, $items_query);


                    $grand_total = 0;


                    while($item = mysqli_fetch_assoc($items_result)){

                        $total =
                        $item['product_price'] *
                        $item['quantity'];

                        $grand_total += $total;

                    ?>

                    <tr>

                        <td>

                           
                            <img
                            src="<?php echo $item['product_image']; ?>"
                            class="product-img"
                            >



                        </td>

                        <td>

                            <strong>

                                <?php echo $item['product_name']; ?>

                            </strong>

                        </td>

                        <td>

                            ₹<?php echo number_format($item['product_price']); ?>

                        </td>

                        <td>

                            <?php echo $item['quantity']; ?>

                        </td>

                        <td>

                            <strong>

                                ₹<?php echo number_format($total); ?>

                            </strong>

                        </td>

                    </tr>

                    <?php
                    }
                    ?>

                    </tbody>

                </table>

            </div>


            <!-- GRAND TOTAL -->
            <div class="text-end mt-4">

                <h4 class="fw-bold text-primary">

                    Grand Total :
                    ₹<?php echo number_format($grand_total); ?>

                </h4>

            </div>

        </div>

    </div>

    <?php
        }
    }else{
    ?>

    <div class="alert alert-warning">

        No Orders Found

    </div>

    <?php
    }
    ?>

</div>

</body>
</html>