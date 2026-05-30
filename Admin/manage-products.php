<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Products</title>

    <link rel="stylesheet" href="style.css">

    <style>

        /* =========================
           GLOBAL STYLE
        ========================= */

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f1f5f9;
        }

        /* =========================
           MAIN CONTENT
        ========================= */

        .main-content{

                width:100%;

                min-height:100vh;

                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:flex-start;

                padding:40px;
            }

            /* =========================
            TOP BAR
            ========================= */

            .top-bar{

                width:100%;
                max-width:1300px;

                display:flex;
                justify-content:space-between;
                align-items:center;

                margin-bottom:25px;
            }

        .top-bar h2{
            font-size:32px;
            color:#0f172a;
            font-weight:bold;
        }

        /* =========================
           ADD PRODUCT BUTTON
        ========================= */

        .add-btn{

            background:#2563eb;
            color:white;

            padding:12px 22px;

            text-decoration:none;

            border-radius:10px;

            font-size:15px;
            font-weight:bold;

            transition:0.3s ease;
        }

        .add-btn:hover{
            background:#1d4ed8;
            transform:translateY(-2px);
        }

        /* =========================
   TABLE CONTAINER
========================= */

.table-container{

    width:100%;
    max-width:1300px;

    background:white;

    border-radius:20px;

    overflow:hidden;

    box-shadow:0 8px 25px rgba(0,0,0,0.08);

    margin:auto;
}

        /* =========================
           TABLE STYLE
        ========================= */

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th{

            background:#0f172a;
            color:white;

            padding:20px;

            text-align:left;

            font-size:15px;
            font-weight:600;
        }

        table td{

            padding:18px;

            border-bottom:1px solid #e5e7eb;

            color:#374151;

            font-size:15px;

            vertical-align:middle;
        }

        table tr:hover{
            background:#f8fafc;
            transition:0.2s;
        }

        /* =========================
           PRODUCT IMAGE
        ========================= */

        .product-img{

            width:75px;
            height:75px;

            object-fit:cover;

            border-radius:12px;

            border:2px solid #e5e7eb;
        }

        /* =========================
           PRICE STYLE
        ========================= */

        .price{
            color:#059669;
            font-weight:bold;
            font-size:16px;
        }

        /* =========================
           DESCRIPTION
        ========================= */

        .description{
            max-width:300px;
            line-height:1.5;
            color:#6b7280;
        }

        /* =========================
           ACTION BUTTONS
        ========================= */

        .actions{
            display:flex;
            gap:10px;
        }

        /* =========================
           EDIT BUTTON
        ========================= */

        .edit-btn{

            background:#10b981;
            color:white;

            padding:9px 16px;

            border-radius:8px;

            text-decoration:none;

            font-size:14px;
            font-weight:bold;

            transition:0.3s;
        }

        .edit-btn:hover{
            background:#059669;
            transform:scale(1.05);
        }

        /* =========================
           DELETE BUTTON
        ========================= */

        .delete-btn{

            background:#ef4444;
            color:white;

            padding:9px 16px;

            border-radius:8px;

            text-decoration:none;

            font-size:14px;
            font-weight:bold;

            transition:0.3s;
        }

        .delete-btn:hover{
            background:#dc2626;
            transform:scale(1.05);
        }

        /* =========================
           NO PRODUCTS
        ========================= */

        .no-data{
            padding:40px;
            text-align:center;
            color:#6b7280;
            font-size:18px;
        }

        /* =========================
           RESPONSIVE DESIGN
        ========================= */

        @media(max-width:992px){

            .main-content{
                margin-left:0;
                padding:20px;
            }

            .top-bar{
                flex-direction:column;
                align-items:flex-start;
                gap:15px;
            }

            .table-container{
                overflow-x:auto;
            }

            table{
                min-width:1000px;
            }
        }

    </style>

</head>

<body>

<?php include 'sidebar.php'; ?>

<div class="main-content">

    <!-- TOP BAR -->

    <div class="top-bar">

        <h2>Manage Products</h2>

        <a href="add-product.php" class="add-btn">
            + Add Product
        </a>

    </div>

    <!-- TABLE -->

    <div class="table-container">

        <table>

            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>

            <?php

            $query = "SELECT * FROM products ORDER BY id DESC";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0)
            {

                while($row = mysqli_fetch_assoc($result))
                {
            ?>

            <tr>

                <!-- ID -->

                <td>
                    #<?php echo $row['id']; ?>
                </td>

                <!-- IMAGE -->

                <td>

                    <img 
                        src="Uploads/<?php echo $row['product_image']; ?>" 
                        class="product-img"
                    >

                </td>

                <!-- PRODUCT NAME -->

                <td>
                    <?php echo $row['product_name']; ?>
                </td>

                <!-- PRICE -->

                <td class="price">
                    ₹<?php echo $row['product_price']; ?>
                </td>

                <!-- DESCRIPTION -->

                <td class="description">
                    <?php echo $row['product_description']; ?>
                </td>

                <!-- CREATED DATE -->

                <td>
                    <?php echo $row['created_at']; ?>
                </td>

                <!-- ACTIONS -->

                <td>

                    <div class="actions">

                        <a 
                           href="edit-product.php?id=<?php echo $row['id']; ?>" 
                           class="edit-btn">

                           Edit

                        </a>

                        <a 
                           href="delete-product.php?id=<?php echo $row['id']; ?>"
                           class="delete-btn"
                           onclick="return confirm('Are you sure you want to delete this product?')">

                           Delete

                        </a>

                    </div>

                </td>

            </tr>

            <?php
                }
            }
            else
            {
            ?>

            <tr>
                <td colspan="7" class="no-data">
                    No Products Found
                </td>
            </tr>

            <?php
            }
            ?>

        </table>

    </div>

</div>

</body>
</html>