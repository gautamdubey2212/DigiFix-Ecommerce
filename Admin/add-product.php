<?php

include "conn.php";

/* LOGIN CHECK */

if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}

$message = "";

if(isset($_POST['add_product'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];

    /* IMAGE */

$image_name = $_FILES['product_image']['name'];

$tmp_name = $_FILES['product_image']['tmp_name'];

$upload_path = "Uploads/" . $image_name;

if(move_uploaded_file($tmp_name, $upload_path)){

    $message = "Product Added Successfully";

}else{

    $message = "Image Upload Failed";

}

    /* INSERT QUERY */

    $stmt = $conn->prepare("INSERT INTO products
    (
        product_name,
        product_price,
        product_image,
        product_description
    )
    VALUES (?, ?, ?, ?)");

    $stmt->bind_param(
        "ssss",
        $product_name,
        $product_price,
        $image_name,
        $product_description
    );

    if($stmt->execute()){

        $message = "Product Added Successfully";

    }else{

        $message = "Failed To Add Product";

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product</title>

    <!-- BOOTSTRAP -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body
    style="
    background:#f4f6f9;
    "
>

<div class="container py-5">

    <!-- TOP -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold">

            Add DigiFix Product

        </h2>

        <a
            href="dashboard.php"
            class="btn btn-dark"
        >

            Back Dashboard

        </a>

    </div>

    <!-- MESSAGE -->

    <?php if($message != ""){ ?>

        <div class="alert alert-success">

            <?php echo $message; ?>

        </div>

    <?php } ?>

    <!-- FORM -->

    <div
        class="bg-white shadow rounded-4 p-5"
    >

        <form
            method="POST"
            enctype="multipart/form-data"
        >

            <!-- PRODUCT NAME -->

            <div class="mb-3">

                <label class="form-label fw-semibold">

                    Product Name

                </label>

                <input
                    type="text"
                    name="product_name"
                    class="form-control p-3"
                    placeholder="Enter Product Name"
                    required
                >

            </div>

            <!-- PRODUCT PRICE -->

            <div class="mb-3">

                <label class="form-label fw-semibold">

                    Product Price

                </label>

                <input
                    type="text"
                    name="product_price"
                    class="form-control p-3"
                    placeholder="Enter Product Price"
                    required
                >

            </div>

            <!-- PRODUCT IMAGE -->

            <div class="mb-3">

                <label class="form-label fw-semibold">

                    Product Image

                </label>

                <input
                    type="file"
                    name="product_image"
                    class="form-control p-3"
                    required
                >

            </div>

            <!-- PRODUCT DESCRIPTION -->

            <div class="mb-4">

                <label class="form-label fw-semibold">

                    Product Description

                </label>

                <textarea
                    name="product_description"
                    rows="5"
                    class="form-control p-3"
                    placeholder="Enter Product Description"
                    required
                ></textarea>

            </div>

            <!-- BUTTON -->

            <button
                type="submit"
                name="add_product"
                class="btn btn-dark w-100 p-3"
            >

                Add Product

            </button>

        </form>

    </div>

</div>

</body>
</html>