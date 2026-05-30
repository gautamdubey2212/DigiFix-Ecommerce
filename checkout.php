<?php

include "DB.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    /* =========================
       GET FORM DATA
    ========================== */

    $name =
    mysqli_real_escape_string(
        $conn,
        $_POST['name']
    );

    $email =
    mysqli_real_escape_string(
        $conn,
        $_POST['email']
    );

    $phone =
    mysqli_real_escape_string(
        $conn,
        $_POST['phone']
    );

    $country =
    mysqli_real_escape_string(
        $conn,
        $_POST['country']
    );

    $state =
    mysqli_real_escape_string(
        $conn,
        $_POST['state']
    );

    $city =
    mysqli_real_escape_string(
        $conn,
        $_POST['city']
    );

    $street =
    mysqli_real_escape_string(
        $conn,
        $_POST['street']
    );

    $flat =
    mysqli_real_escape_string(
        $conn,
        $_POST['flat']
    );

    $notes =
    mysqli_real_escape_string(
        $conn,
        $_POST['notes']
    );


    /* =========================
       ORDER ID
    ========================== */

    $order_custom_id =
    mysqli_real_escape_string(
        $conn,
        $_POST['order_custom_id']
    );


    /* =========================
       CART DATA
    ========================== */

    $cart_data = $_POST['cart_data'];


    /* =========================
       SCREENSHOT UPLOAD
    ========================== */

    $upload_dir = "uploads/";


    if (!file_exists($upload_dir)) {

        mkdir($upload_dir, 0777, true);
    }


    $file_name =
        time() . "_" .
        basename($_FILES["payment_screenshot"]["name"]);


    $target_file =
        $upload_dir . $file_name;


    if (
    !move_uploaded_file(
        $_FILES["payment_screenshot"]["tmp_name"],
        $target_file
    )
) {

    die("UPLOAD FAILED");

}


    /* =========================
       INSERT MAIN ORDER
    ========================== */

    $sql = "INSERT INTO checkout_orders(

        full_name,
        email,
        phone,
        country,
        state,
        city,
        street_address,
        flat_no,
        notes,
        order_custom_id,
        payment_screenshot,
        payment_status

    )

    VALUES(

        '$name',
        '$email',
        '$phone',
        '$country',
        '$state',
        '$city',
        '$street',
        '$flat',
        '$notes',
        '$order_custom_id',
        '$target_file',
        'Pending Verification'

    )";


    $result = mysqli_query($conn, $sql);


    /* =========================
       CHECK INSERT
    ========================== */

    if (!$result) {

        die("Order Insert Failed : " . mysqli_error($conn));
    }


    /* =========================
       GET LAST ORDER ID
    ========================== */

    $order_id = mysqli_insert_id($conn);


    /* =========================
       CONVERT CART JSON
    ========================== */

    $cart_items = json_decode($cart_data, true);


    /* =========================
       INSERT PRODUCTS
    ========================== */

    foreach ($cart_items as $item) {

        $product_name =
        mysqli_real_escape_string(
            $conn,
            $item['name']
        );

        $product_price =
        mysqli_real_escape_string(
            $conn,
            $item['price']
        );

        $product_image =
        mysqli_real_escape_string(
            $conn,
            $item['image']
        );

        $quantity =
        mysqli_real_escape_string(
            $conn,
            $item['quantity']
        );


        $item_sql = "INSERT INTO order_items(

            order_id,
            product_name,
            product_price,
            product_image,
            quantity

        )

        VALUES(

            '$order_id',
            '$product_name',
            '$product_price',
            '$product_image',
            '$quantity'

        )";


        mysqli_query($conn, $item_sql);
    }


    /* =========================
       SUCCESS REDIRECT
    ========================== */

    header("Location: order-success.php");

    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Secure software checkout and payment verification for DigiFix customers.">

    <title>DigiFix Secure Checkout</title>

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

        .checkout-card{
            border:none;
            border-radius:24px;
        }

        .summary-card{
            position:sticky;
            top:20px;
            border:none;
            border-radius:24px;
        }

        .product-img{
            width:80px;
            height:80px;
            object-fit:cover;
            border-radius:16px;
        }

        .qty-btn{
            width:34px;
            height:34px;
            border-radius:50%;
        }

        .place-btn{
            transition:0.3s;
        }

        .place-btn:hover{
            transform:translateY(-2px);
        }

        .trust-box{
            background:#f8f9fa;
            border-radius:18px;
        }

        textarea{
            resize:none;
        }

    </style>

</head>
<body>

<div class="container py-5">

    <!-- HEADING -->
    <div class="text-center mb-5">

        <h1 class="fw-bold">

            <i class="bi bi-shield-lock text-primary"></i>
            Secure Checkout

        </h1>

        <p class="text-muted">

            Genuine Software Licensing & Instant Digital Delivery

        </p>

    </div>


<form method="POST" enctype="multipart/form-data">

<div class="row g-4">

    <!-- LEFT SIDE -->
    <div class="col-lg-8">

        <!-- BILLING -->
        <div class="card shadow checkout-card p-4 mb-4">

            <h3 class="fw-bold mb-4">

                Billing Details

            </h3>

            <div class="row g-3">

                <!-- FULL NAME -->
                <div class="col-md-6">

                    <label class="form-label">

                        Full Name

                    </label>

                    <input type="text"
                           id="name"
                           name="name"
                           required
                           class="form-control rounded-4 p-3"
                           placeholder="Enter full name">

                </div>


                <!-- EMAIL -->
                <div class="col-md-6">

                    <label class="form-label">

                        Email Address

                    </label>

                    <input type="email"
                           id="email"
                           name="email"
                           required
                           class="form-control rounded-4 p-3"
                           placeholder="Enter email">

                </div>


                <!-- PHONE -->
                <div class="col-md-6">

                    <label class="form-label">

                        Contact Number

                    </label>

                    <input type="text"
                           id="phone"
                           name="phone"
                           required
                           class="form-control rounded-4 p-3"
                           placeholder="Enter contact number">

                </div>


               <!-- COUNTRY -->
                <div class="col-md-6">

                    <label class="form-label">
                        Country
                    </label>

                    <select id="country"
                            name="country"
                            required
                            class="form-select rounded-4 p-3">

                        <option value="">Select Country</option>

                        <option value="India">India</option>
                        <option value="Australia">Australia</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Canada">Canada</option>
                        <option value="Germany">Germany</option>
                        <option value="France">France</option>
                        <option value="Japan">Japan</option>
                        <option value="China">China</option>
                        <option value="Russia">Russia</option>
                        <option value="Brazil">Brazil</option>
                        <option value="South Africa">South Africa</option>
                        <option value="UAE">UAE</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Bangladesh">Bangladesh</option>

                    </select>

                </div>


               <!-- STATE -->
                <div class="col-md-6">

                    <label class="form-label">
                        State
                    </label>

                    <select id="state"
                            name="state"
                            required
                            class="form-select rounded-4 p-3">

                        <option value="">Select State</option>

                        <!-- States -->
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>

                        <!-- Union Territories -->
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadra and Nagar Haveli and Daman and Diu">
                            Dadra and Nagar Haveli and Daman and Diu
                        </option>
                        <option value="Delhi">Delhi</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Ladakh">Ladakh</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>

                    </select>

                </div>


               <!-- CITY -->
                <div class="col-md-6">

                    <label class="form-label">
                        City
                    </label>

                    <select id="city"
                            name="city"
                            required
                            class="form-select rounded-4 p-3">

                        <option value="">Select City</option>

                        <!-- Maharashtra -->
                        <option value="Mumbai">Mumbai</option>
                        <option value="Pune">Pune</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="Nashik">Nashik</option>
                        <option value="Thane">Thane</option>
                        <option value="Navi Mumbai">Navi Mumbai</option>

                        <!-- Delhi -->
                        <option value="New Delhi">New Delhi</option>

                        <!-- Karnataka -->
                        <option value="Bengaluru">Bengaluru</option>
                        <option value="Mysore">Mysore</option>

                        <!-- Tamil Nadu -->
                        <option value="Chennai">Chennai</option>
                        <option value="Coimbatore">Coimbatore</option>

                        <!-- Telangana -->
                        <option value="Hyderabad">Hyderabad</option>

                        <!-- Gujarat -->
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Surat">Surat</option>
                        <option value="Vadodara">Vadodara</option>

                        <!-- Rajasthan -->
                        <option value="Jaipur">Jaipur</option>
                        <option value="Udaipur">Udaipur</option>

                        <!-- Uttar Pradesh -->
                        <option value="Lucknow">Lucknow</option>
                        <option value="Kanpur">Kanpur</option>
                        <option value="Noida">Noida</option>

                        <!-- West Bengal -->
                        <option value="Kolkata">Kolkata</option>

                        <!-- Madhya Pradesh -->
                        <option value="Indore">Indore</option>
                        <option value="Bhopal">Bhopal</option>

                        <!-- Bihar -->
                        <option value="Patna">Patna</option>

                        <!-- Punjab -->
                        <option value="Amritsar">Amritsar</option>
                        <option value="Ludhiana">Ludhiana</option>

                        <!-- Kerala -->
                        <option value="Kochi">Kochi</option>
                        <option value="Thiruvananthapuram">Thiruvananthapuram</option>

                        <!-- Odisha -->
                        <option value="Bhubaneswar">Bhubaneswar</option>

                        <!-- Assam -->
                        <option value="Guwahati">Guwahati</option>

                        <!-- Jammu & Kashmir -->
                        <option value="Srinagar">Srinagar</option>

                    </select>

                </div>


                <!-- STREET -->
                <div class="col-md-8">

                    <label class="form-label">

                        Street Address

                    </label>

                    <input type="text"
                           id="street"
                           name="street"
                           required
                           class="form-control rounded-4 p-3"
                           placeholder="Enter street name">

                </div>


                <!-- FLAT -->
                <div class="col-md-4">

                    <label class="form-label">

                        Flat / House No.

                    </label>

                    <input type="text"
                           id="flat"
                           name="flat"
                           required
                           class="form-control rounded-4 p-3"
                           placeholder="Flat No">

                </div>


               <!-- NOTES -->
<div class="col-md-12">

    <label class="form-label">

        Order Notes

    </label>

    <textarea id="notes"
              name="notes"
              class="form-control rounded-4 p-3"
              rows="4"
              placeholder="Write additional notes here..."></textarea>

</div>


<!-- PAYMENT SECTION -->
<div class="col-12 d-none"
id="payment-section">

    <div class="card shadow checkout-card p-4 mt-4">

        <h3 class="fw-bold mb-4">
            Complete Payment
        </h3>

        <div class="alert alert-primary rounded-4 border-0">

            <h5 class="fw-bold mb-3">
                Bank Transfer Details
            </h5>

            <p class="mb-2">
                <strong>Account Name:</strong>
                DIGIFIX INFO TECH PVT LTD
            </p>

            <p class="mb-2">
                <strong>Bank Name:</strong>
                YES BANK
            </p>

            <p class="mb-2">
                <strong>Account Number:</strong>
                034661900004280
            </p>

            <p class="mb-2">
                <strong>IFSC Code:</strong>
                YESB0000346
            </p>

            <p class="mb-0 text-danger fw-bold">
                Upload payment screenshot after transfer.
            </p>

        </div>

        <!-- ORDER ID -->
        <div class="mb-3">

            <label class="form-label fw-bold">
                Order ID
            </label>

            <input type="text"
                   name="order_custom_id"
                   id="order_custom_id"
                   readonly
                   class="form-control rounded-4 p-3 bg-light">

        </div>

        <!-- SCREENSHOT -->
        <div class="mb-3">

            <label class="form-label fw-bold">
                Payment Screenshot
            </label>

            <input type="file"
                   name="payment_screenshot"
                   accept="image/*"
                   required
                   class="form-control rounded-4 p-3">

        </div>

        <!-- FINAL PAYMENT BUTTON -->
        <button type="submit"
        class="btn btn-success rounded-pill py-3 fw-bold w-100 mt-3">

        <i class="bi bi-check-circle-fill"></i>
        I Have Completed Payment

        </button>

    </div>

</div>


</div>

</div>

</div>





       <!-- RIGHT SIDE -->
<div class="col-lg-4">

    <div class="card shadow summary-card p-4">

        <h3 class="fw-bold mb-4">

            Order Summary

        </h3>

        <!-- PRODUCTS -->
        <div id="checkout-products"></div>

        <hr>

        <!-- TOTAL ITEMS -->
        <div class="d-flex justify-content-between mb-3">

            <h6>Total Items</h6>

            <h6 id="items-count">

                0

            </h6>

        </div>

        <!-- SUBTOTAL -->
        <div class="d-flex justify-content-between mb-3">

            <h6>Subtotal</h6>

            <h6 id="subtotal">

                ₹0

            </h6>

        </div>

        <!-- DISCOUNT -->
        <div class="d-flex justify-content-between mb-3">

            <h6>Discount</h6>

            <h6 class="text-success"
                id="discount">

                - ₹0

            </h6>

        </div>

        <!-- GST -->
        <div class="d-flex justify-content-between mb-3">

            <h6>GST (18%)</h6>

            <h6 id="gst">

                ₹0

            </h6>

        </div>

        <hr>

        <!-- GRAND TOTAL -->
        <div class="d-flex justify-content-between mb-4">

            <h5 class="fw-bold">

                Grand Total

            </h5>

            <h5 class="fw-bold text-primary"
                id="grand-total">

                ₹0

            </h5>

        </div>

            <!-- PLACE ORDER -->
        <button type="button"
        class="btn btn-primary rounded-pill py-3 fw-bold place-btn w-100"
        onclick="showPaymentSection()">

        <i class="bi bi-lock-fill"></i>
        Continue To Payment

        </button>

        <!-- TRUST -->
        <div class="trust-box p-3 mt-4">

            <p class="mb-2">

                <i class="bi bi-shield-check text-success"></i>
                Secure Checkout

            </p>

            <p class="mb-2">

                <i class="bi bi-lightning-charge text-warning"></i>
                Instant Digital Delivery

            </p>

            <p class="mb-0">

                <i class="bi bi-patch-check text-primary"></i>
                Genuine Software Guarantee

            </p>

        </div>

    </div>

</div>

</div>

<!-- HIDDEN CART DATA -->
<input type="hidden"
       name="cart_data"
       id="cart-data">

</form>



<!-- JAVASCRIPT -->

<script>

/* LOAD CART */
let cart =
    JSON.parse(localStorage.getItem("cart")) || [];


/* SAVE CART */
function saveCart(){

    localStorage.setItem(
        "cart",
        JSON.stringify(cart)
    );

}


/* UPDATE CART DATA */
function updateCartData(){

    document.getElementById("cart-data").value =
    JSON.stringify(cart);

}


/* RENDER PRODUCTS */
function renderCheckout(){

    const container =
        document.getElementById("checkout-products");

    container.innerHTML = "";


    if(cart.length === 0){

    container.innerHTML = `

    <div class="card border-0 shadow rounded-4 p-5 text-center">

        <h3 class="fw-bold mb-3">

            Your Cart Is Empty

        </h3>

        <p class="text-muted mb-4">

            Add software products to continue shopping.

        </p>

        <a href="Product.php"
           class="btn btn-primary rounded-pill px-4 py-2">

            <i class="bi bi-arrow-left"></i>
            Continue Shopping

        </a>

    </div>

    `;

    updateSummary();

    return;
}


cart.forEach((item,index)=>{

container.innerHTML += `

<div class="d-flex align-items-center mb-4">

    <img src="${item.image}"
         class="product-img me-3">

    <div class="flex-grow-1">

        <h6 class="fw-bold mb-1">

            ${item.name}

        </h6>

        <small class="text-muted">

            ₹${item.price.toLocaleString()}

        </small>


        <div class="d-flex align-items-center gap-2 mt-2">

            <button type="button"
            class="btn btn-outline-dark btn-sm qty-btn"
            onclick="decreaseQty(${index})">

                -

            </button>

            <span class="fw-bold">

                ${item.quantity}

            </span>

            <button type="button"
            class="btn btn-outline-dark btn-sm qty-btn"
            onclick="increaseQty(${index})">

                +

            </button>

        </div>

    </div>

    <div class="text-end">

        <h6 class="fw-bold text-primary">

            ₹${(item.price * item.quantity).toLocaleString()}

        </h6>

        <button type="button"
        class="btn btn-danger btn-sm rounded-pill mt-2"
        onclick="removeItem(${index})">

            Remove

        </button>

    </div>

</div>

`;

});

updateSummary();

updateCartData();

}


/* UPDATE SUMMARY */
function updateSummary(){

    let totalItems = 0;

    let subtotal = 0;


    cart.forEach(item=>{

        totalItems += item.quantity;

        subtotal += item.price * item.quantity;

    });


    let discount =
        subtotal >= 5000 ? 1000 : 0;


    let gst =
        (subtotal - discount) * 0.18;


    let grandTotal =
        (subtotal - discount) + gst;



    document.getElementById("items-count").innerText =
        totalItems;

    document.getElementById("subtotal").innerText =
        `₹${subtotal.toLocaleString()}`;

    document.getElementById("discount").innerText =
        `- ₹${discount.toLocaleString()}`;

    document.getElementById("gst").innerText =
        `₹${gst.toLocaleString(undefined,{
            maximumFractionDigits:0
        })}`;

    document.getElementById("grand-total").innerText =
        `₹${grandTotal.toLocaleString(undefined,{
            maximumFractionDigits:0
        })}`;

}


/* INCREASE QTY */
function increaseQty(index){

    cart[index].quantity++;

    saveCart();

    renderCheckout();

}


/* DECREASE QTY */
function decreaseQty(index){

    if(cart[index].quantity > 1){

        cart[index].quantity--;

    } else {

        removeItem(index);

    }

    saveCart();

    renderCheckout();

}


/* REMOVE ITEM */
function removeItem(index){

    cart.splice(index,1);

    saveCart();

    renderCheckout();

}


/* SHOW PAYMENT SECTION */
function showPaymentSection(){

    let name =
        document.getElementById("name").value;

    let email =
        document.getElementById("email").value;

    let phone =
        document.getElementById("phone").value;

    let country =
        document.getElementById("country").value;

    let state =
        document.getElementById("state").value;

    let city =
        document.getElementById("city").value;

    let street =
        document.getElementById("street").value;

    let flat =
        document.getElementById("flat").value;


    if(name === "" ||
       email === "" ||
       phone === "" ||
       country === "" ||
       state === "" ||
       city === "" ||
       street === "" ||
       flat === ""){

        alert("Please fill all billing details");

        return;
    }


   if(cart.length === 0){

    alert("Your cart is empty");

    updateCartData();

    return;
}


   let paymentSection =
document.getElementById("payment-section");

if(!paymentSection.classList.contains("d-none")){

    return;
}

paymentSection.classList.remove("d-none");

generateOrderId();

paymentSection.scrollIntoView({
    behavior: "smooth"
});

}


/* GENERATE ORDER ID */
function generateOrderId(){

    let random =
        Math.floor(Math.random() * 1000000);

    let orderId =
        "DIGIFIX-" + random;

    document.getElementById("order_custom_id").value =
        orderId;
}

generateOrderId();


/* INITIAL LOAD */
renderCheckout();

updateCartData();

</script>
</body>

</html>