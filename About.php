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

    <!-- HERO CAROUSEL SECTION -->

    <section
        style="
        width:100%;
        overflow:hidden;
        "
    >

        <div
            id="carouselId"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
            data-bs-interval="4000"
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

            <div class="carousel-inner">

                <!-- SLIDE 1 -->

                <div class="carousel-item active">

                    <img
                        src="https://static.vecteezy.com/system/resources/thumbnails/023/649/106/small_2x/about-us-button-web-banner-templates-illustration-free-vector.jpg"

                        class="d-block w-100"

                        alt="First Slide"

                        style="
                        height:90vh;
                        object-fit:cover;
                        filter:brightness(60%);
                        "
                    >

                    <!-- TEXT -->

                    <div
                        style="
                        position:absolute;
                        top:50%;
                        left:8%;
                        transform:translateY(-50%);
                        max-width:650px;
                        color:white;
                        z-index:2;
                        "
                    >

                        <span
                            style="
                            font-size:18px;
                            letter-spacing:2px;
                            font-weight:600;
                            color:#ff5733;
                            text-transform:uppercase;
                            "
                        >

                            Welcome To DigiFix InfoTech

                        </span>

                        <h1
                            style="
                            font-size:68px;
                            font-weight:800;
                            line-height:1.2;
                            margin-top:20px;
                            "
                        >

                            Smart IT Solutions
                            For Modern Businesses

                        </h1>

                        <p
                            style="
                            font-size:22px;
                            line-height:1.8;
                            margin-top:25px;
                            color:#f1f1f1;
                            "
                        >

                            We build secure, scalable and
                            innovative software solutions
                            designed to transform businesses digitally.

                        </p>

                        <!-- BUTTONS -->

                        <div
                            style="
                            margin-top:35px;
                            display:flex;
                            gap:20px;
                            flex-wrap:wrap;
                            "
                        >



                        </div>

                    </div>

                </div>

                <!-- SLIDE 2 -->

                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070"

                        class="d-block w-100"

                        alt="Second Slide"

                        style="
                        height:90vh;
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
                        max-width:650px;
                        color:white;
                        z-index:2;
                        "
                    >

                        <span
                            style="
                            font-size:18px;
                            letter-spacing:2px;
                            font-weight:600;
                            color:#ff5733;
                            text-transform:uppercase;
                            "
                        >

                            Advanced Cyber Security

                        </span>

                        <h1
                            style="
                            font-size:68px;
                            font-weight:800;
                            line-height:1.2;
                            margin-top:20px;
                            "
                        >

                            Protecting Your
                            Digital Infrastructure

                        </h1>

                        <p
                            style="
                            font-size:22px;
                            line-height:1.8;
                            margin-top:25px;
                            color:#f1f1f1;
                            "
                        >

                            Enterprise-grade cybersecurity
                            services and smart monitoring
                            solutions for modern businesses.

                        </p>

                    </div>

                </div>

                <!-- SLIDE 3 -->

                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070"

                        class="d-block w-100"

                        alt="Third Slide"

                        style="
                        height:90vh;
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
                        max-width:650px;
                        color:white;
                        z-index:2;
                        "
                    >

                        <span
                            style="
                            font-size:18px;
                            letter-spacing:2px;
                            font-weight:600;
                            color:#ff5733;
                            text-transform:uppercase;
                            "
                        >

                            AI • Cloud • Automation

                        </span>

                        <h1
                            style="
                            font-size:68px;
                            font-weight:800;
                            line-height:1.2;
                            margin-top:20px;
                            "
                        >

                            Future Ready
                            Technology Services

                        </h1>

                        <p
                            style="
                            font-size:22px;
                            line-height:1.8;
                            margin-top:25px;
                            color:#f1f1f1;
                            "
                        >

                            Transform your operations with
                            AI-powered solutions, cloud systems,
                            and business automation.

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
                    padding:28px;
                    border-radius:50%;
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
                    padding:28px;
                    border-radius:50%;
                    "
                ></span>

            </button>

        </div>

    </section>

    <div
        class="container"
    >
        <!-- ABOUT COMPANY SECTION -->

<section
    style="
    width:100%;
    padding:100px 8%;
    background:#f8f9fa;
    overflow:hidden;
    "
>

    <div
        style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:90px;
        flex-wrap:wrap;
        "
    >

        <!-- LEFT CONTENT -->

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

                About DigiFix

            </span>

            <!-- HEADING -->

            <h1
                style="
                font-size:56px;
                font-weight:800;
                color:#111;
                line-height:1.2;
                margin-top:18px;
                margin-bottom:30px;
                "
            >

                Building Future-Ready
                Digital Experiences

            </h1>

            <!-- PARAGRAPH -->

            <p
                style="
                font-size:20px;
                line-height:2;
                color:#444;
                margin-bottom:28px;
                "
            >

                DigiFix InfoTech is a modern technology
                company focused on delivering innovative
                software, cybersecurity, cloud, and business
                automation solutions tailored for startups,
                enterprises, and growing organizations.

            </p>

            <p
                style="
                font-size:20px;
                line-height:2;
                color:#444;
                margin-bottom:40px;
                "
            >

                Our mission is to simplify technology,
                improve business efficiency, and create
                scalable digital systems that help
                businesses stay competitive in the
                fast-changing digital era.

            </p>

            <!-- STATS -->

            <div
                style="
                display:flex;
                gap:30px;
                flex-wrap:wrap;
                "
            >

                <!-- CARD -->

                <div
                    style="
                    padding:22px 28px;
                    background:white;
                    border-radius:18px;
                    box-shadow:0 10px 25px rgba(0,0,0,0.08);
                    min-width:180px;
                    "
                >

                    <h2
                        style="
                        margin:0;
                        font-size:42px;
                        color:#ff5733;
                        font-weight:800;
                        "
                    >

                        150+

                    </h2>

                    <p
                        style="
                        margin-top:10px;
                        font-size:18px;
                        color:#555;
                        "
                    >

                        Successful Projects

                    </p>

                </div>

                <!-- CARD -->

                <div
                    style="
                    padding:22px 28px;
                    background:white;
                    border-radius:18px;
                    box-shadow:0 10px 25px rgba(0,0,0,0.08);
                    min-width:180px;
                    "
                >

                    <h2
                        style="
                        margin:0;
                        font-size:42px;
                        color:#7b2cbf;
                        font-weight:800;
                        "
                    >

                        24/7

                    </h2>

                    <p
                        style="
                        margin-top:10px;
                        font-size:18px;
                        color:#555;
                        "
                    >

                        Technical Support

                    </p>

                </div>

            </div>

        </div>

        <!-- RIGHT IMAGES -->

        <div
            style="
            flex:1;
            min-width:320px;
            position:relative;
            "
        >

            <!-- TOP IMAGE -->

            <img
                src="https://images.stockcake.com/public/8/b/5/8b585c4c-5061-4faa-be1a-d771307bf0ab_large/business-meeting-discussion-stockcake.jpg"

                alt="DigiFix Team"

                style="
                width:100%;
                max-width:420px;
                height:330px;
                object-fit:cover;
                border-radius:12px;
                position:relative;
                z-index:2;
                box-shadow:0 15px 35px rgba(0,0,0,0.15);
                "
            >

            <!-- BOTTOM IMAGE -->

            <img
                src="https://upraise.io/wp-content/uploads/2019/11/How-To-Make-The-Most-Of-Business-Meetings-Banner.png"

                alt="Business Meeting"

                style="
                width:260px;
                height:240px;
                object-fit:cover;
                border-radius:12px;
                position:absolute;
                bottom:-70px;
                left:-35px;
                border:8px solid white;
                z-index:3;
                box-shadow:0 15px 35px rgba(0,0,0,0.15);
                "
            >

            <!-- PURPLE BOX -->

            <div
                style="
                width:120px;
                height:120px;
                background:#b784db;
                position:absolute;
                bottom:-40px;
                left:-60px;
                z-index:1;
                border-radius:10px;
                "
            ></div>

            <!-- ORANGE BAR -->

            <div
                style="
                width:170px;
                height:18px;
                background:#ff5733;
                position:absolute;
                top:-10px;
                right:40px;
                z-index:1;
                border-radius:20px;
                "
            ></div>

        </div>

    </div>

    <!-- PHILOSOPHY SECTION -->

    <div
        style="
        margin-top:130px;
        text-align:center;
        "
    >

        <span
            style="
            color:#7b2cbf;
            font-size:18px;
            font-weight:700;
            text-transform:uppercase;
            letter-spacing:1px;
            "
        >

            Our Vision

        </span>

        <h1
            style="
            font-size:52px;
            font-weight:800;
            color:#111;
            margin-top:15px;
            "
        >

            Technology That Works
            For People

        </h1>

        <p
            style="
            max-width:850px;
            margin:35px auto 0;
            font-size:21px;
            line-height:2;
            color:#444;
            "
        >

            At DigiFix InfoTech, we believe technology
            should simplify business operations,
            improve productivity, and create meaningful
            digital experiences. Our approach combines
            innovation, reliability, and smart execution
            to deliver solutions that create long-term value.

        </p>

        <!-- FEATURE BOXES -->

        <div
            style="
            display:flex;
            justify-content:center;
            gap:25px;
            flex-wrap:wrap;
            margin-top:50px;
            "
        >

            <!-- BOX -->

            <div
                style="
                width:240px;
                padding:30px 20px;
                background:white;
                border-radius:18px;
                box-shadow:0 10px 25px rgba(0,0,0,0.08);
                "
            >

                <h2
                    style="
                    font-size:48px;
                    margin:0;
                    color:#ff5733;
                    "
                >

                    ⚡

                </h2>

                <h3
                    style="
                    margin-top:18px;
                    font-size:24px;
                    color:#111;
                    "
                >

                    Innovation

                </h3>

                <p
                    style="
                    margin-top:12px;
                    font-size:17px;
                    color:#555;
                    line-height:1.8;
                    "
                >

                    Modern technology solutions built
                    for future business growth.

                </p>

            </div>

            <!-- BOX -->

            <div
                style="
                width:240px;
                padding:30px 20px;
                background:white;
                border-radius:18px;
                box-shadow:0 10px 25px rgba(0,0,0,0.08);
                "
            >

                <h2
                    style="
                    font-size:48px;
                    margin:0;
                    color:#7b2cbf;
                    "
                >

                    🔒

                </h2>

                <h3
                    style="
                    margin-top:18px;
                    font-size:24px;
                    color:#111;
                    "
                >

                    Security

                </h3>

                <p
                    style="
                    margin-top:12px;
                    font-size:17px;
                    color:#555;
                    line-height:1.8;
                    "
                >

                    Enterprise-grade protection and
                    cybersecurity-focused systems.

                </p>

            </div>

            <!-- BOX -->

            <div
                style="
                width:240px;
                padding:30px 20px;
                background:white;
                border-radius:18px;
                box-shadow:0 10px 25px rgba(0,0,0,0.08);
                "
            >

                <h2
                    style="
                    font-size:48px;
                    margin:0;
                    color:#ff5733;
                    "
                >

                    🚀

                </h2>

                <h3
                    style="
                    margin-top:18px;
                    font-size:24px;
                    color:#111;
                    "
                >

                    Scalability

                </h3>

                <p
                    style="
                    margin-top:12px;
                    font-size:17px;
                    color:#555;
                    line-height:1.8;
                    "
                >

                    Flexible and scalable digital
                    infrastructure for businesses.

                </p>

            </div>

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
