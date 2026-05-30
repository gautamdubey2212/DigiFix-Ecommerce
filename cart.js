// ===============================
// DIGIFIX PROFESSIONAL CART SYSTEM
// ===============================

// CART ARRAY
let cart = JSON.parse(localStorage.getItem("cart")) || [];


// ===============================
// ADD TO CART FUNCTION
// ===============================

function addToCart(name, price, image) {

    let existingProduct = cart.find(item => item.name === name);

    if (existingProduct) {

        existingProduct.quantity += 1;

    } else {

        cart.push({
            name: name,
            price: price,
            image: image,
            quantity: 1
        });

    }

    saveCart();

    // CART PAGE OPEN
    window.location.href = "cart.html";
}


// ===============================
// SAVE CART
// ===============================

function saveCart() {

    localStorage.setItem("cart", JSON.stringify(cart));

}


// ===============================
// DISPLAY CART
// ===============================

function displayCart() {

    let cartContainer = document.getElementById("cart-items");

    let subtotal = 0;

    // EMPTY CART
    if (cart.length === 0) {

        cartContainer.innerHTML = `

            <div class="text-center py-5">

                <img src="empty-cart.png"
                     width="200"
                     class="mb-4">

                <h2 class="fw-bold">
                    Your Cart is Empty
                </h2>

                <a href="Product.php"
                class="btn btn-primary rounded-pill px-4">

                    Continue Shopping

                </a>

            </div>

        `;

        return;
    }


    cartContainer.innerHTML = "";


    // PRODUCTS LOOP
    cart.forEach((item, index) => {

        let totalPrice = item.price * item.quantity;

        subtotal += totalPrice;

        cartContainer.innerHTML += `

        <div class="card shadow border-0 rounded-4 mb-4 p-3">

            <div class="row align-items-center">

                <div class="col-lg-2 text-center">

                    <img src="${item.image}"
                         class="img-fluid rounded-4"
                         style="height:120px;
                                width:120px;
                                object-fit:cover;">

                </div>

                <div class="col-lg-4">

                    <h4 class="fw-bold">
                        ${item.name}
                    </h4>

                    <p class="text-muted mb-2">
                        Premium Software Solution
                    </p>

                    <button
                        class="btn btn-danger rounded-pill"
                        onclick="removeItem(${index})">

                        Remove

                    </button>

                </div>

                <div class="col-lg-3 text-center">

                    <div class="d-flex justify-content-center align-items-center gap-3">

                        <button
                            class="btn btn-primary rounded-circle"
                            style="width:40px;height:40px;"
                            onclick="decreaseQty(${index})">

                            -

                        </button>

                        <h5 class="mb-0">
                            ${item.quantity}
                        </h5>

                        <button
                            class="btn btn-primary rounded-circle"
                            style="width:40px;height:40px;"
                            onclick="increaseQty(${index})">

                            +

                        </button>

                    </div>

                </div>

                <div class="col-lg-3 text-center">

                    <h4 class="fw-bold text-primary">

                        ₹${totalPrice.toLocaleString()}

                    </h4>

                </div>

            </div>

        </div>

        `;
    });


    // GST
    let gst = subtotal * 0.18;

    // FINAL TOTAL
    let finalTotal = subtotal + gst;


    // UPDATE SUMMARY
    document.getElementById("subtotal").innerText =
        "₹" + subtotal.toLocaleString();

    document.getElementById("gst").innerText =
        "₹" + gst.toLocaleString();

    document.getElementById("total").innerText =
        "₹" + finalTotal.toLocaleString();
}



// ===============================
// INCREASE QUANTITY
// ===============================

function increaseQty(index) {

    cart[index].quantity++;

    saveCart();

    displayCart();

}



// ===============================
// DECREASE QUANTITY
// ===============================

function decreaseQty(index) {

    if (cart[index].quantity > 1) {

        cart[index].quantity--;

    } else {

        removeItem(index);

    }

    saveCart();

    displayCart();

}



// ===============================
// REMOVE PRODUCT
// ===============================

function removeItem(index) {

    cart.splice(index, 1);

    saveCart();

    displayCart();

}



// ===============================
// CLEAR ENTIRE CART
// ===============================

function clearCart() {

    localStorage.removeItem("cart");

    cart = [];

    displayCart();

}

// ===============================
// BUY NOW
// ===============================

function buyNow(name, price, image) {

    cart = [];

    cart.push({

        name: name,
        price: price,
        image: image,
        quantity: 1

    });

    saveCart();

    // DIRECT CHECKOUT
    window.location.href = "checkout.php";
}



// ===============================
// AUTO LOAD CART
// ===============================

displayCart();