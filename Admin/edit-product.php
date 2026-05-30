<?php

include 'conn.php';

$id = $_GET['id'];

$get_data = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");

$data = mysqli_fetch_assoc($get_data);

if(isset($_POST['update_product']))
{
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];

    // IMAGE

    $new_image = $_FILES['product_image']['name'];

    if($new_image != "")
    {
        $tmp_name = $_FILES['product_image']['tmp_name'];

        move_uploaded_file($tmp_name, "Uploads/".$new_image);

        // OLD IMAGE DELETE

        unlink("Uploads/".$data['product_image']);

        $update = mysqli_query($conn, "

        UPDATE products SET

        product_name='$product_name',
        product_price='$product_price',
        product_description='$product_description',
        product_image='$new_image'

        WHERE id='$id'

        ");
    }
    else
    {
        $update = mysqli_query($conn, "

        UPDATE products SET

        product_name='$product_name',
        product_price='$product_price',
        product_description='$product_description'

        WHERE id='$id'

        ");
    }

    if($update)
    {
        header("Location: manage-products.php");
    }
    else
    {
        echo "Update Failed";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Edit Product</title>

    <style>

        body{
            background:#f1f5f9;
            font-family:Arial;
        }

        .container{

            width:500px;

            background:white;

            padding:30px;

            margin:40px auto;

            border-radius:15px;

            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        input, textarea{

            width:100%;

            padding:12px;

            margin-top:10px;
            margin-bottom:20px;

            border:1px solid #ccc;

            border-radius:8px;
        }

        button{

            background:#2563eb;
            color:white;

            border:none;

            padding:12px 20px;

            border-radius:8px;

            cursor:pointer;
        }

        img{
            width:100px;
            border-radius:10px;
            margin-bottom:15px;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Edit Product</h2>

    <form method="POST" enctype="multipart/form-data">

        <label>Product Name</label>

        <input 
        type="text"
        name="product_name"
        value="<?php echo $data['product_name']; ?>"
        >

        <label>Product Price</label>

        <input 
        type="text"
        name="product_price"
        value="<?php echo $data['product_price']; ?>"
        >

        <label>Description</label>

        <textarea 
        name="product_description"><?php echo $data['product_description']; ?></textarea>

        <label>Current Image</label><br>

        <img src="Uploads/<?php echo $data['product_image']; ?>">

        <br><br>

        <label>Change Image</label>

        <input type="file" name="product_image">

        <button type="submit" name="update_product">
            Update Product
        </button>

    </form>

</div>

</body>
</html>