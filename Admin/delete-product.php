<?php

include 'conn.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    // OLD IMAGE FETCH

    $get = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
    $row = mysqli_fetch_assoc($get);

    $old_image = $row['product_image'];

    // DELETE IMAGE FROM FOLDER

    if(file_exists("Uploads/".$old_image))
    {
        unlink("Uploads/".$old_image);
    }

    // DELETE PRODUCT FROM DATABASE

    $delete = mysqli_query($conn, "DELETE FROM products WHERE id='$id'");

    if($delete)
    {
        header("Location: manage-products.php");
    }
    else
    {
        echo "Delete Failed";
    }
}

?>