<?php
include "DB.php";

$message_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact_messages
            (name, email, subject, message)
            VALUES
            ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {

        $message_status = "Message Sent Successfully!";

    } else {

        $message_status = "Something Went Wrong!";

    }
}

?>

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

    <!-- CONTACT HERO SECTION -->

    <section
        style="
        width:100%;
        margin-top:20px;
        "
    >

        <div
            id="carouselId"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
            data-bs-interval="3500"
        >

            <!-- INDICATORS -->

            <div class="carousel-indicators">

                <button
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide-to="0"
                    class="active"
                ></button>

                <button
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide-to="1"
                ></button>

                <button
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide-to="2"
                ></button>

            </div>

            <!-- CAROUSEL INNER -->

            <div class="carousel-inner rounded-4 overflow-hidden shadow">

                <!-- SLIDE 1 -->

                <div class="carousel-item active">

                    <img
                        src="https://static.vecteezy.com/system/resources/thumbnails/050/703/718/small_2x/set-of-contact-us-button-hand-pointer-clicking-contact-us-web-buttons-png.png"

                        class="w-100 d-block"

                        alt="Contact Slide"

                        style="
                        height:420px;
                        object-fit:cover;
                        filter:brightness(65%);
                        "
                    >

                    <!-- CONTENT -->

                    <div
                        style="
                        position:absolute;
                        top:50%;
                        left:8%;
                        transform:translateY(-50%);
                        color:white;
                        max-width:500px;
                        "
                    >

                        <h1
                            style="
                            font-size:52px;
                            font-weight:700;
                            margin-bottom:20px;
                            "
                        >

                            Contact DigiFix
                            InfoTech

                        </h1>

                        <p
                            style="
                            font-size:19px;
                            line-height:1.8;
                            color:#f1f1f1;
                            "
                        >

                            Let’s connect and build
                            smart digital solutions together.

                        </p>

                        <a
                            href="#"

                            style="
                            display:inline-block;
                            margin-top:25px;
                            padding:12px 30px;
                            background:linear-gradient(45deg,#ff5733,#7b2cbf);
                            color:white;
                            text-decoration:none;
                            border-radius:40px;
                            font-weight:600;
                            "
                        >

                            Get In Touch

                        </a>

                    </div>

                </div>

                <!-- SLIDE 2 -->

                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=2070"

                        class="w-100 d-block"

                        alt="Second Slide"

                        style="
                        height:420px;
                        object-fit:cover;
                        filter:brightness(60%);
                        "
                    >

                    <div
                        style="
                        position:absolute;
                        top:50%;
                        left:8%;
                        transform:translateY(-50%);
                        color:white;
                        max-width:500px;
                        "
                    >

                        <h1
                            style="
                            font-size:52px;
                            font-weight:700;
                            margin-bottom:20px;
                            "
                        >

                            24/7 Technical
                            Support

                        </h1>

                        <p
                            style="
                            font-size:19px;
                            line-height:1.8;
                            color:#f1f1f1;
                            "
                        >

                            Reliable IT support and
                            assistance whenever you need it.

                        </p>

                    </div>

                </div>

                <!-- SLIDE 3 -->

                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071"

                        class="w-100 d-block"

                        alt="Third Slide"

                        style="
                        height:420px;
                        object-fit:cover;
                        filter:brightness(60%);
                        "
                    >

                    <div
                        style="
                        position:absolute;
                        top:50%;
                        left:8%;
                        transform:translateY(-50%);
                        color:white;
                        max-width:500px;
                        "
                    >

                        <h1
                            style="
                            font-size:52px;
                            font-weight:700;
                            margin-bottom:20px;
                            "
                        >

                            Grow With
                            Technology

                        </h1>

                        <p
                            style="
                            font-size:19px;
                            line-height:1.8;
                            color:#f1f1f1;
                            "
                        >

                            Smart software and business
                            solutions for modern companies.

                        </p>

                    </div>

                </div>

            </div>

            <!-- CONTROLS -->

            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
            >

                <span
                    class="carousel-control-prev-icon"
                    style="
                    background-color:rgba(0,0,0,0.5);
                    border-radius:50%;
                    padding:22px;
                    "
                ></span>

            </button>

            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
            >

                <span
                    class="carousel-control-next-icon"
                    style="
                    background-color:rgba(0,0,0,0.5);
                    border-radius:50%;
                    padding:22px;
                    "
                ></span>

            </button>

        </div>

    </section>

    <div
        class="container"
    >
        <!-- CONTACT SECTION -->

<section
    style="
    width:100%;
    padding:90px 8%;
    background:#f8f9fa;
    "
>

    <div
        style="
        display:flex;
        justify-content:space-between;
        gap:50px;
        flex-wrap:wrap;
        align-items:flex-start;
        "
    >

        <!-- LEFT SIDE -->

        <div
            style="
            flex:1;
            min-width:320px;
            "
        >

            <!-- SMALL TITLE -->

            <span
                style="
                color:#ff5733;
                font-size:18px;
                font-weight:700;
                letter-spacing:1px;
                text-transform:uppercase;
                "
            >

                Contact DigiFix

            </span>

            <!-- HEADING -->

            <h1
                style="
                font-size:52px;
                font-weight:800;
                color:#111;
                margin-top:15px;
                margin-bottom:20px;
                "
            >

                Get In Touch

            </h1>

            <!-- TEXT -->

            <p
                style="
                font-size:18px;
                color:#555;
                line-height:1.9;
                margin-bottom:40px;
                "
            >

                We'd love to hear from you.
                Contact DigiFix InfoTech for
                software solutions, cybersecurity,
                cloud services, and digital support.

            </p>

            <!-- CONTACT INFO -->

            <div
                style="
                display:flex;
                flex-direction:column;
                gap:30px;
                "
            >

                <!-- ADDRESS -->

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:20px;
                    "
                >

                    <div
                        style="
                        min-width:60px;
                        height:60px;
                        background:white;
                        border-radius:15px;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        box-shadow:0 8px 20px rgba(0,0,0,0.08);
                        font-size:24px;
                        "
                    >

                        📍

                    </div>

                    <div>

                        <h3
                            style="
                            margin:0;
                            font-size:22px;
                            color:#111;
                            "
                        >

                            Office Address

                        </h3>

                        <p
                            style="
                            margin-top:10px;
                            font-size:18px;
                            color:#555;
                            line-height:1.8;
                            "
                        >

                            Sadguru Tower,
                            A/506, Mumbradevi Colony,
                            Diva East, Thane - 400612,
                            Maharashtra, India.

                        </p>

                    </div>

                </div>

                <!-- PHONE -->

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:20px;
                    "
                >

                    <div
                        style="
                        min-width:60px;
                        height:60px;
                        background:white;
                        border-radius:15px;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        box-shadow:0 8px 20px rgba(0,0,0,0.08);
                        font-size:24px;
                        "
                    >

                        📞

                    </div>

                    <div>

                        <h3
                            style="
                            margin:0;
                            font-size:22px;
                            color:#111;
                            "
                        >

                            Call Us

                        </h3>

                        <p
                            style="
                            margin-top:10px;
                            font-size:18px;
                            color:#555;
                            "
                        >

                            +91 8828771598

                        </p>

                    </div>

                </div>

                <!-- EMAIL -->

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:20px;
                    "
                >

                    <div
                        style="
                        min-width:60px;
                        height:60px;
                        background:white;
                        border-radius:15px;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        box-shadow:0 8px 20px rgba(0,0,0,0.08);
                        font-size:24px;
                        "
                    >

                        ✉️

                    </div>

                    <div>

                        <h3
                            style="
                            margin:0;
                            font-size:22px;
                            color:#111;
                            "
                        >

                            Email Address

                        </h3>

                        <p
                            style="
                            margin-top:10px;
                            font-size:18px;
                            color:#555;
                            "
                        >

                            digifixinfotechpvt@gmail.com

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- FORM -->

    <form action="" method="POST">

        <!-- NAME -->

        <input
            type="text"
            name="name"
            placeholder="Your Name"
            required

            style="
            width:100%;
            padding:18px;
            margin-bottom:22px;
            border:none;
            border-radius:12px;
            background:#f3f3f3;
            font-size:17px;
            outline:none;
            "
        >

        <!-- EMAIL -->

        <input
            type="email"
            name="email"
            placeholder="Your Email"
            required

            style="
            width:100%;
            padding:18px;
            margin-bottom:22px;
            border:none;
            border-radius:12px;
            background:#f3f3f3;
            font-size:17px;
            outline:none;
            "
        >

        <!-- SUBJECT -->

        <input
            type="text"
            name="subject"
            placeholder="Subject"
            required

            style="
            width:100%;
            padding:18px;
            margin-bottom:22px;
            border:none;
            border-radius:12px;
            background:#f3f3f3;
            font-size:17px;
            outline:none;
            "
        >

        <!-- MESSAGE -->

        <textarea
            name="message"
            rows="6"
            placeholder="Write Your Message"
            required

            style="
            width:100%;
            padding:18px;
            margin-bottom:25px;
            border:none;
            border-radius:12px;
            background:#f3f3f3;
            font-size:17px;
            outline:none;
            resize:none;
            "
        ></textarea>

        <!-- BUTTON -->

        <button
            type="submit"

            style="
            width:100%;
            padding:18px;
            border:none;
            border-radius:50px;
            background:linear-gradient(45deg,#ff5733,#7b2cbf);
            color:white;
            font-size:18px;
            font-weight:600;
            cursor:pointer;
            box-shadow:0 10px 20px rgba(0,0,0,0.15);
            "
        >

            Send Message

        </button>

    </form>

</div>

    </div>

</section>
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
