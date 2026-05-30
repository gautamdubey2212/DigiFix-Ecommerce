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

    <!-- SERVICES HERO SECTION -->

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
                        src="https://akkanshasecurity.in/img/slides/services.jpg"

                        class="w-100 d-block"

                        alt="Services Slide"

                        style="
                        height:430px;
                        object-fit:cover;
                        filter:brightness(55%);
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
                        max-width:550px;
                        "
                    >

                        <span
                            style="
                            font-size:18px;
                            font-weight:600;
                            letter-spacing:2px;
                            color:#ff5733;
                            text-transform:uppercase;
                            "
                        >

                            DigiFix Services

                        </span>

                        <h1
                            style="
                            font-size:56px;
                            font-weight:800;
                            margin-top:18px;
                            margin-bottom:22px;
                            "
                        >

                            Smart Digital
                            Solutions

                        </h1>

                        <p
                            style="
                            font-size:20px;
                            line-height:1.9;
                            color:#f1f1f1;
                            "
                        >

                            Innovative IT services designed
                            to improve security, efficiency,
                            and business growth.

                        </p>

                        <!-- BUTTON -->

                        <a
                            href="#"

                            style="
                            display:inline-block;
                            margin-top:28px;
                            padding:14px 34px;
                            background:linear-gradient(45deg,#ff5733,#7b2cbf);
                            color:white;
                            text-decoration:none;
                            border-radius:40px;
                            font-size:17px;
                            font-weight:600;
                            "
                        >

                            Explore Services

                        </a>

                    </div>

                </div>

                <!-- SLIDE 2 -->

                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070"

                        class="w-100 d-block"

                        alt="Cyber Security"

                        style="
                        height:430px;
                        object-fit:cover;
                        filter:brightness(55%);
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
                        max-width:550px;
                        "
                    >

                        <span
                            style="
                            font-size:18px;
                            font-weight:600;
                            letter-spacing:2px;
                            color:#ff5733;
                            text-transform:uppercase;
                            "
                        >

                            Cyber Security

                        </span>

                        <h1
                            style="
                            font-size:56px;
                            font-weight:800;
                            margin-top:18px;
                            margin-bottom:22px;
                            "
                        >

                            Protect Your
                            Digital Business

                        </h1>

                        <p
                            style="
                            font-size:20px;
                            line-height:1.9;
                            color:#f1f1f1;
                            "
                        >

                            Advanced cybersecurity solutions
                            to secure your systems, data,
                            and business infrastructure.

                        </p>

                    </div>

                </div>

                <!-- SLIDE 3 -->

                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070"

                        class="w-100 d-block"

                        alt="Software Solutions"

                        style="
                        height:430px;
                        object-fit:cover;
                        filter:brightness(55%);
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
                        max-width:550px;
                        "
                    >

                        <span
                            style="
                            font-size:18px;
                            font-weight:600;
                            letter-spacing:2px;
                            color:#ff5733;
                            text-transform:uppercase;
                            "
                        >

                            Business Technology

                        </span>

                        <h1
                            style="
                            font-size:56px;
                            font-weight:800;
                            margin-top:18px;
                            margin-bottom:22px;
                            "
                        >

                            Modern Software
                            & Automation

                        </h1>

                        <p
                            style="
                            font-size:20px;
                            line-height:1.9;
                            color:#f1f1f1;
                            "
                        >

                            Custom software, cloud systems,
                            and automation tools for
                            scalable business growth.

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
        <!-- SERVICES SECTION -->

<section
    style="
    width:100%;
    padding:100px 8%;
    background:#f8f9fa;
    "
>

    <!-- HEADING -->

    <div
        style="
        text-align:center;
        margin-bottom:70px;
        "
    >

        <span
            style="
            color:#ff5733;
            font-size:18px;
            font-weight:700;
            letter-spacing:1px;
            text-transform:uppercase;
            "
        >

            Our Expertise

        </span>

        <h1
            style="
            font-size:56px;
            font-weight:800;
            color:#111;
            margin-top:18px;
            "
        >

            Innovative IT Services
            For Modern Businesses

        </h1>

        <p
            style="
            max-width:850px;
            margin:25px auto 0;
            font-size:20px;
            line-height:2;
            color:#555;
            "
        >

            DigiFix InfoTech provides advanced digital
            solutions designed to improve business
            performance, security, scalability,
            and operational efficiency.

        </p>

    </div>

    <!-- SERVICES GRID -->

    <div
        style="
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
        gap:35px;
        "
    >

        <!-- CARD 1 -->

        <div
            style="
            background:white;
            padding:40px 30px;
            border-radius:22px;
            text-align:center;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
            transition:0.3s;
            "
        >

            <!-- ICON -->

            <div
                style="
                width:90px;
                height:90px;
                margin:auto;
                border-radius:50%;
                background:linear-gradient(45deg,#ff5733,#7b2cbf);
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:42px;
                color:white;
                "
            >

                💻

            </div>

            <!-- TITLE -->

            <h2
                style="
                font-size:30px;
                margin-top:28px;
                margin-bottom:20px;
                color:#111;
                font-weight:700;
                "
            >

                IT Infrastructure

            </h2>

            <!-- TEXT -->

            <p
                style="
                font-size:18px;
                line-height:1.9;
                color:#555;
                "
            >

                Smart IT infrastructure solutions,
                system integration, cloud support,
                and managed business technology services.

            </p>

        </div>

        <!-- CARD 2 -->

        <div
            style="
            background:white;
            padding:40px 30px;
            border-radius:22px;
            text-align:center;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
            transition:0.3s;
            "
        >

            <!-- ICON -->

            <div
                style="
                width:90px;
                height:90px;
                margin:auto;
                border-radius:50%;
                background:linear-gradient(45deg,#7b2cbf,#ff5733);
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:42px;
                color:white;
                "
            >

                ⚙️

            </div>

            <!-- TITLE -->

            <h2
                style="
                font-size:30px;
                margin-top:28px;
                margin-bottom:20px;
                color:#111;
                font-weight:700;
                "
            >

                Software Development

            </h2>

            <!-- TEXT -->

            <p
                style="
                font-size:18px;
                line-height:1.9;
                color:#555;
                "
            >

                Custom web applications,
                enterprise software,
                business automation systems,
                and scalable digital platforms.

            </p>

        </div>

        <!-- CARD 3 -->

        <div
            style="
            background:white;
            padding:40px 30px;
            border-radius:22px;
            text-align:center;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
            transition:0.3s;
            "
        >

            <!-- ICON -->

            <div
                style="
                width:90px;
                height:90px;
                margin:auto;
                border-radius:50%;
                background:linear-gradient(45deg,#ff5733,#7b2cbf);
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:42px;
                color:white;
                "
            >

                🔒

            </div>

            <!-- TITLE -->

            <h2
                style="
                font-size:30px;
                margin-top:28px;
                margin-bottom:20px;
                color:#111;
                font-weight:700;
                "
            >

                Cyber Security

            </h2>

            <!-- TEXT -->

            <p
                style="
                font-size:18px;
                line-height:1.9;
                color:#555;
                "
            >

                Enterprise-grade security,
                vulnerability protection,
                monitoring systems,
                and advanced threat management.

            </p>

        </div>




           

    </div>

</section>
    </div>
    

    <div
        class="container"
    >
        <!-- ALL IT SERVICES SECTION -->

<section
    style="
    width:100%;
    height:500px;
    background-image:url('team-banner.jpg');
    background-size:cover;
    background-position:center;
    position:relative;
    display:flex;
    justify-content:center;
    align-items:flex-start;
    padding-top:40px;
    overflow:hidden;
    "
>

    <!-- DARK OVERLAY -->

    <div
        style="
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.25);
        "
    ></div>

    <!-- CONTENT BOX -->

    <div
        style="
        position:relative;
        z-index:2;
        width:55%;
        min-width:320px;
        background:linear-gradient(180deg,#f8c7d0,#ff2f68);
        padding:35px 45px;
        text-align:center;
        border-radius:4px;
        box-shadow:0 15px 30px rgba(0,0,0,0.2);
        "
    >

        <!-- HEADING -->

        <h1
            style="
            font-size:52px;
            font-weight:800;
            color:#071133;
            margin-bottom:20px;
            "
        >

            ALL IT SERVICES

        </h1>

        <!-- TEXT -->

        <p
            style="
            font-size:20px;
            line-height:2;
            color:#111;
            max-width:850px;
            margin:auto;
            "
        >

            At DigiFix InfoTech, we deliver end-to-end
            IT and digital services designed to help
            businesses grow faster, operate smarter,
            and stay secure in a competitive digital world.
            Our services are flexible, scalable, and
            customized to meet the unique needs of every client.

        </p>

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
