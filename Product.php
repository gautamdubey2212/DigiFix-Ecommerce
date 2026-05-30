<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
        <style>

    /* NAVBAR */

    .navbar{

        background:white !important;

    }

    /* LOGO */

    .logo-text{

        color:#ff5733;

        font-size:28px;

        line-height:1;

    }

    .logo-subtext{

        color:#7b2cbf;

        font-size:18px;

        font-weight:600;

    }

    /* NAV LINKS */

    .nav-link{

        color:#222 !important;

        font-size:17px;

        font-weight:600;

        margin-left:15px;

        transition:0.3s;

        position:relative;

    }

    .nav-link:hover{

        color:#0d6efd !important;

    }

    /* UNDERLINE EFFECT */

    .nav-link::after{

        content:"";

        position:absolute;

        left:0;

        bottom:0;

        width:0;

        height:2px;

        background:#0d6efd;

        transition:0.3s;

    }

    .nav-link:hover::after{

        width:100%;

    }

    /* MOBILE */

    @media(max-width:991px){

        .navbar-nav{

            text-align:center;

            padding-top:20px;

        }

        .nav-link{

            margin:10px 0;

        }

    }

</style>
    
<header>

    <nav
        class="navbar navbar-expand-sm navbar-light bg-light shadow-sm py-3"
    >

        <div class="container">

            <!-- LOGO -->

            <a class="navbar-brand d-flex align-items-center" href="Home.php">

                <img
                    src="DFI Logo.png"
                    alt="DigiFix InfoTech"
                    width="150"
                    class="me-2"
                >

                <div>

                    <h4 class="m-0 fw-bold logo-text">
                        DigiFix
                    </h4>

                    <small class="logo-subtext">
                        InfoTech
                    </small>

                </div>

            </a>

            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">

                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                   <li class="nav-item">

                    <a 
                        class="nav-link active d-flex align-items-center gap-2"
                        href="Home.php"
                        aria-current="page"

                        style="
                        font-size:17px;
                        font-weight:600;
                        color:#1e1e1e;
                        transition:0.3s;
                        "

                        onmouseover="
                        this.style.color='#0d6efd';
                        this.style.transform='translateY(-1px)';
                        "

                        onmouseout="
                        this.style.color='#1e1e1e';
                        this.style.transform='translateY(0px)';
                        "
                    >

                        <i 
                            class="fa-solid fa-house"

                            style="
                            font-size:14px;
                            "
                        ></i>

                        <span>
                            Home
                        </span>

                        <span class="visually-hidden">(current)</span>

                    </a>

                </li>

                <!-- FONT AWESOME -->

                <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
                />

                    <li class="nav-item">

                    <a 
                        class="nav-link d-flex align-items-center gap-2"
                        href="About.php"

                        style="
                        font-size:17px;
                        font-weight:600;
                        color:#1e1e1e;
                        transition:0.3s;
                        "

                        onmouseover="
                        this.style.color='#0d6efd';
                        this.style.transform='translateY(-1px)';
                        "

                        onmouseout="
                        this.style.color='#1e1e1e';
                        this.style.transform='translateY(0px)';
                        "
                    >

                        <i class="fa-solid fa-circle-info" style="font-size:14px;"></i>

                        <span>
                            About Us
                        </span>

                    </a>

                </li>

                <li class="nav-item">

                    <a 
                        class="nav-link d-flex align-items-center gap-2"
                        href="Contact.php"

                        style="
                        font-size:17px;
                        font-weight:600;
                        color:#1e1e1e;
                        transition:0.3s;
                        "

                        onmouseover="
                        this.style.color='#0d6efd';
                        this.style.transform='translateY(-1px)';
                        "

                        onmouseout="
                        this.style.color='#1e1e1e';
                        this.style.transform='translateY(0px)';
                        "
                    >

                        <i class="fa-solid fa-phone" style="font-size:14px;"></i>

                        <span>
                            Contact Us
                        </span>

                    </a>

                </li>

                <li class="nav-item">

                    <a 
                        class="nav-link d-flex align-items-center gap-2"
                        href="Product.php"

                        style="
                        font-size:17px;
                        font-weight:600;
                        color:#1e1e1e;
                        transition:0.3s;
                        "

                        onmouseover="
                        this.style.color='#0d6efd';
                        this.style.transform='translateY(-1px)';
                        "

                        onmouseout="
                        this.style.color='#1e1e1e';
                        this.style.transform='translateY(0px)';
                        "
                    >

                        <i class="fa-solid fa-box-open" style="font-size:14px;"></i>

                        <span>
                            Product
                        </span>

                    </a>

                </li>

                <li class="nav-item">

                    <a 
                        class="nav-link d-flex align-items-center gap-2"
                        href="Services.php"

                        style="
                        font-size:17px;
                        font-weight:600;
                        color:#1e1e1e;
                        transition:0.3s;
                        "

                        onmouseover="
                        this.style.color='#0d6efd';
                        this.style.transform='translateY(-1px)';
                        "

                        onmouseout="
                        this.style.color='#1e1e1e';
                        this.style.transform='translateY(0px)';
                        "
                    >

                        <i class="fa-solid fa-gears" style="font-size:14px;"></i>

                        <span>
                            Services
                        </span>

                    </a>

                </li>

                </ul>



                <!-- FONT AWESOME -->

                <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
                />
            </div>

        </div>

    </nav>

</header>
        <main>
     <div class="container py-5">
    <div class="row justify-content-center g-4">

        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 col-12 d-flex">

            <div class="card shadow border-0 rounded-4 h-100 w-100">

                <img class="card-img-top rounded-top-4"
                    src="BI.png"
                    alt="Business App"
                    style="height: 400px; object-fit: cover;"
                />

                <div class="card-body d-flex flex-column text-center">

                    <h4 class="card-title fw-bold mb-3">
                        DigiFix Business App
                    </h4>

                    <p class="card-text text-muted flex-grow-1">
                        Professional business application for modern business solutions.
                    </p>

                    <h3 class="text-primary fw-bold mb-4">
                        ₹19,999.00
                    </h3>

                    <div class="d-flex gap-2 mt-auto">

                        <a href="#"
                        onclick="buyNow(
                        'DigiFix Business App',
                        19999,
                        'BI.png'
                        )"
                        class="btn btn-primary w-50 rounded-pill">

                            Buy Now

                        </a>

                       <a href="#"
                        onclick="addToCart(
                        'DigiFix Business App',
                        19999,
                        'BI.png'
                        )"
                        class="btn btn-outline-dark w-50 rounded-pill">

                            Add to Cart

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 col-12 d-flex">

            <div class="card shadow border-0 rounded-4 h-100 w-100">

                <img class="card-img-top rounded-top-4"
                    src="CM.png"
                    alt="Cloud Manager"
                    style="height: 400px; object-fit: cover;"
                />

                <div class="card-body d-flex flex-column text-center">

                    <h4 class="card-title fw-bold mb-3">
                        DigiFix Cloud Manager
                    </h4>

                    <p class="card-text text-muted flex-grow-1">
                        Advanced cloud management solution for secure storage and business access.
                    </p>

                    <h3 class="text-primary fw-bold mb-4">
                        ₹12,999.00
                    </h3>

                    <div class="d-flex gap-2 mt-auto">

                       <a href="#"
                        onclick="buyNow(
                        'DigiFix Cloud Manager',
                        12999,
                        'CM.png'
                        )"
                        class="btn btn-primary w-50 rounded-pill">

                            Buy Now

                        </a>

                       <a href="#"
                        onclick="addToCart(
                        'DigiFix Cloud Manager',
                        12999,
                        'CM.png'
                        )"
                        class="btn btn-outline-dark w-50 rounded-pill">

                            Add to Cart

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- Card 3 -->
<div class="col-lg-4 col-md-6 col-12 d-flex">

    <div class="card shadow border-0 rounded-4 h-100 w-100">

        <img class="card-img-top rounded-top-4"
            src="IOT.png"
            alt="IoT Security"
            style="height: 400px; object-fit: cover;"
        />

        <div class="card-body d-flex flex-column text-center">

            <h4 class="card-title fw-bold mb-3">
                DigiFix IoT Security
            </h4>

            <p class="card-text text-muted flex-grow-1">
                Smart IoT security solution for connected devices with real-time monitoring and protection.
            </p>

            <h3 class="text-primary fw-bold mb-4">
                ₹18,999.00
            </h3>

           <div class="d-flex gap-2 mt-auto">

                    <a href="#"
                    onclick="buyNow(
                    'DigiFix IoT Security',
                    18999,
                    'IOT.png'
                    )"
                    class="btn btn-primary w-50 rounded-pill">

                        Buy Now

                    </a>

                    <a href="#"
                    onclick="addToCart(
                    'DigiFix IoT Security',
                    18999,
                    'IOT.png'
                    )"
                    class="btn btn-outline-dark w-50 rounded-pill">

                        Add to Cart

                    </a>

                </div>
        </div>

    </div>
</div>

<!-- Card 4 -->
<div class="col-lg-4 col-md-6 col-12 d-flex">

    <div class="card shadow border-0 rounded-4 h-100 w-100">

        <img class="card-img-top rounded-top-4"
            src="SC.png"
            alt="Security Software"
            style="height: 400px; object-fit: cover;"
        />

        <div class="card-body d-flex flex-column text-center">

            <h4 class="card-title fw-bold mb-3">
                DigiFix Security Shield
            </h4>

            <p class="card-text text-muted flex-grow-1">
                Powerful cybersecurity solution for advanced protection, threat detection, and secure business operations.
            </p>

            <h3 class="text-primary fw-bold mb-4">
                ₹24,999.00
            </h3>

            <div class="d-flex gap-2 mt-auto">

                <a href="#"
                onclick="buyNow(
                'DigiFix Security Shield',
                24999,
                'SC.png'
                )"
                class="btn btn-primary w-50 rounded-pill">

                    Buy Now

                </a>

                <a href="#"
                    onclick="addToCart(
                    'DigiFix Security Shield',
                    24999,
                    'SC.png'
                    )"
                    class="btn btn-outline-dark w-50 rounded-pill">

                        Add to Cart

                    </a>

            </div>

        </div>

    </div>

</div>

<script src="cart.js"></script>


    </div>
</div>


        </main>

        <footer>
            <!-- FOOTER START -->

<footer class="footer-section">

    <div class="container">

        <div class="row gy-5">

            <!-- COMPANY INFO -->

            <div class="col-lg-6 col-md-12">

                <!-- LOGO -->

                <div class="d-flex align-items-center mb-4">

                    <img
                        src="DFI Logo.png"
                        alt="DigiFix Logo"
                        width="170"
                        class="me-2"
                    >

                    <div>

                        <h3 class="footer-logo-text m-0">
                            DigiFix
                        </h3>

                        <span class="footer-logo-sub">
                            InfoTech
                        </span>

                    </div>

                </div>

                <!-- ADDRESS -->

                <p class="footer-text">

                    Sadguru Tower, A/506,
                    Mumbradevi Colony,
                    Diva East,
                    Thane - 400612,
                    Maharashtra, India.

                </p>

                <!-- CONTACT -->

                <p class="footer-text">

                    <strong>Phone:</strong>
                    8828771598

                </p>

                <p class="footer-text">

                    <strong>Email:</strong>
                    digifixinfotechpvt@gmail.com

                </p>

            </div>

            <!-- QUICK LINKS -->

            <div class="col-lg-3 col-md-6">

                <h4 class="footer-heading">
                    Quick Links
                </h4>

                <ul class="footer-links">

                    <li><a href="Home.php">Home</a></li>

                    <li><a href="About.php">About Us</a></li>

                    <li><a href="Services.php">Services</a></li>

                    <li><a href="Product.php">Products</a></li>

                    <li><a href="Contact.php">Contact Us</a></li>

                </ul>

            </div>

            <!-- LEGAL -->

            <div class="col-lg-3 col-md-6">

                <h4 class="footer-heading">
                    Legal
                </h4>

                <ul class="footer-links">

                    <li>
                        <a href="PP.html">
                            Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="TC.html">
                            Terms & Conditions
                        </a>
                    </li>

                    <li>
                        <a href="RP.html">
                            Refund Policy
                        </a>
                    </li>

                    <li>
                        <a href="CP.html">
                            Cancellation Policy
                        </a>
                    </li>

                    <li>
                        <a href="DP.html">
                           Digital Delivery Policy
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

    <!-- COPYRIGHT -->

    <div class="footer-bottom">

        <p>

            Copyright © 2025 DigiFixInfo |
            Developed By DigiFix InfoTech

        </p>

    </div>

</footer>

<style>

    /* FOOTER */

    .footer-section{

        background:#f8f9fa;

        padding-top:70px;

        color:#111;

        font-family:Arial, Helvetica, sans-serif;

    }

    /* LOGO */

    .footer-logo-text{

        color:#ff5733;

        font-weight:700;

        font-size:32px;

        line-height:1;

    }

    .footer-logo-sub{

        color:#7b2cbf;

        font-size:20px;

        font-weight:600;

    }

    /* TEXT */

    .footer-text{

        font-size:19px;

        line-height:1.7;

        margin-bottom:10px;

    }

    /* HEADING */

    .footer-heading{

        font-size:25px;

        font-weight:700;

        margin-bottom:25px;

    }

    /* LINKS */

    .footer-links{

        list-style:none;

        padding:0;

    }

    .footer-links li{

        margin-bottom:15px;

    }

    .footer-links a{

        text-decoration:none;

        color:#111;

        font-size:18px;

        transition:0.3s;

    }

    .footer-links a:hover{

        color:#0d6efd;

        padding-left:5px;

    }

    /* COPYRIGHT */

    .footer-bottom{

        margin-top:60px;

        background:#ff4d4d;

        text-align:center;

        padding:22px;

    }

    .footer-bottom p{

        margin:0;

        font-size:18px;

        font-weight:600;

        color:black;

    }

    /* MOBILE */

    @media(max-width:991px){

        .footer-section{

            text-align:center;

        }

    }

</style>

<!-- FOOTER END -->
           
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
