<?php

include "conn.php";

/* LOGIN CHECK */

if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}

/* TOTAL PRODUCTS */

$product_query = $conn->query("SELECT * FROM products");
$total_products = $product_query->num_rows;

/* TOTAL ORDERS */


$order_query =
$conn->query("SELECT COUNT(*) as total FROM checkout_orders");

$order_data =
$order_query->fetch_assoc();

$total_orders =
$order_data['total'];
/* TOTAL CONTACT MESSAGES */

$message_query = $conn->query("SELECT * FROM contact_messages");
$total_messages = $message_query->num_rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <!-- BOOTSTRAP -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP ICONS -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

</head>

<body
    style="
    background:#f4f6f9;
    "
>

    <!-- TOP NAVBAR -->

    <nav
        class="navbar navbar-dark bg-dark px-4 py-3"
    >

        <div class="container-fluid">

            <span
                class="navbar-brand fw-bold"
            >

                Admin Dashboard

            </span>

            <a
                href="logout.php"
                class="btn btn-danger"
            >

                Logout

            </a>

        </div>

    </nav>

    <!-- MAIN CONTENT -->

    <div class="container py-5">

        <!-- WELCOME -->

        <div class="mb-5">

            <h2 class="fw-bold">

                Welcome,
                <?php echo $_SESSION['admin']; ?>

            </h2>

            <p class="text-muted">

                Manage your website from here.

            </p>

        </div>

        <!-- DASHBOARD CARDS -->

        <div class="row g-4">

            <!-- PRODUCTS -->

            <div class="col-md-4">

                <div
                    class="bg-white shadow rounded-4 p-4"
                >

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h5 class="text-muted">

                                Total Products

                            </h5>

                            <h2 class="fw-bold">

                                <?php echo $total_products; ?>

                            </h2>

                        </div>

                        <i
                            class="bi bi-box-seam"
                            style="font-size:45px;"
                        ></i>

                    </div>

                </div>

            </div>

            <!-- ORDERS -->

            <div class="col-md-4">

                <div
                    class="bg-white shadow rounded-4 p-4"
                >

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h5 class="text-muted">

                                Total Orders

                            </h5>

                            <h2 class="fw-bold">

                                <?php echo $total_orders; ?>

                            </h2>

                        </div>

                        <i
                            class="bi bi-cart-check"
                            style="font-size:45px;"
                        ></i>

                    </div>

                </div>

            </div>

            <!-- CONTACT MESSAGES -->

            <div class="col-md-4">

                <div
                    class="bg-white shadow rounded-4 p-4"
                >

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <h5 class="text-muted">

                                Contact Messages

                            </h5>

                            <h2 class="fw-bold">

                                <?php echo $total_messages; ?>

                            </h2>

                        </div>

                        <i
                            class="bi bi-envelope"
                            style="font-size:45px;"
                        ></i>

                    </div>

                </div>

            </div>

        </div>

        <!-- QUICK ACTION BUTTONS -->

        <div class="row mt-5 g-4">

            <div class="col-md-3">

                <a
                    href="add-product.php"
                    class="btn btn-dark w-100 p-3 rounded-4"
                >

                    Add Product

                </a>

            </div>

            <div class="col-md-3">

                <a
                    href="manage-products.php"
                    class="btn btn-primary w-100 p-3 rounded-4"
                >

                    Manage Products

                </a>

            </div>

            <div class="col-md-3">

                <a
                    href="orders.php"
                    class="btn btn-success w-100 p-3 rounded-4"
                >

                    View Orders

                </a>

            </div>

            <div class="col-md-3">

                <a
                    href="contact-messages.php"
                    class="btn btn-warning w-100 p-3 rounded-4"
                >

                    Contact Messages

                </a>

            </div>

        </div>

    </div>

</body>
</html>