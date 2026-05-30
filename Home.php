<?php

include "DB.php";

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
<style>

    /* HERO SECTION */

    .hero-section{

        width:100%;

        overflow:hidden;

    }

    /* IMAGE */

    .carousel-item img{

        height:85vh;

        object-fit:cover;

    }

    /* DARK OVERLAY */

    .carousel-overlay{

        position:absolute;

        top:0;
        left:0;

        width:100%;
        height:100%;

        background:rgba(0,0,0,0.45);

    }

    /* CAPTION */

    .custom-caption{

        position:absolute;

        top:50%;

        left:10%;

        transform:translateY(-50%);

        text-align:left;

        max-width:650px;

        z-index:2;

    }

    /* HEADING */

    .custom-caption h1{

        font-size:65px;

        font-weight:800;

        color:white;

        margin-bottom:20px;

        line-height:1.2;

    }

    /* TEXT */

    .custom-caption p{

        font-size:22px;

        color:#f1f1f1;

        margin-bottom:30px;

        line-height:1.6;

    }

    /* BUTTON */

    .hero-btn{

        padding:14px 35px;

        border-radius:50px;

        background:linear-gradient(45deg,#ff5733,#7b2cbf);

        border:none;

        color:white;

        font-size:18px;

        font-weight:600;

        transition:0.3s;

    }

    .hero-btn:hover{

        transform:translateY(-3px);

        color:white;

        box-shadow:0 10px 20px rgba(0,0,0,0.3);

    }

    /* CONTROLS */

    .carousel-control-prev-icon,
    .carousel-control-next-icon{

        background-color:rgba(0,0,0,0.5);

        border-radius:50%;

        padding:25px;

    }

    /* INDICATORS */

    .carousel-indicators button{

        width:12px !important;

        height:12px !important;

        border-radius:50%;

        margin:0 7px;

    }

    /* MOBILE */

    @media(max-width:991px){

        .carousel-item img{

            height:70vh;

        }

        .custom-caption{

            left:5%;

            right:5%;

            max-width:100%;

        }

        .custom-caption h1{

            font-size:38px;

        }

        .custom-caption p{

            font-size:17px;

        }

        .hero-btn{

            padding:12px 28px;

            font-size:16px;

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

    <!-- HERO CAROUSEL -->

    <section class="hero-section">

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

            <!-- CAROUSEL ITEMS -->

            <div class="carousel-inner">

                <!-- SLIDE 1 -->

                <div class="carousel-item active">

                    <img
                        src="https://images.openai.com/static-rsc-4/5cjkQHuAhF5uJLkv2TP7kWsUGnFVReaWdV3RGzkwQt8RoAW__ZLC4eMBk9hPVESwC-3xxrxGyRc_NAln5W5fRYKetEU0Uoz_YeZBnvXcANIbc3SKjO-p_jk__JT3xc7Bo3m0lhTgtLdnbdeBD6WEseDbAeb4jqv0uwia5vf9LlTMJczQeVxk1oUyWwE2dh39?purpose=fullsize"
                        class="d-block w-100"
                        alt="Slide 1"
                    >

                    <!-- OVERLAY -->

                    <div class="carousel-overlay"></div>

                    <!-- CONTENT -->

                    <div class="carousel-caption custom-caption">

                        <h1>
                            Innovative IT Solutions
                        </h1>

                        <p>

                            Empowering businesses with secure,
                            scalable and modern technology.

                        </p>

                       

                    </div>

                </div>

                <!-- SLIDE 2 -->

                <div class="carousel-item">

                    <img
                        src="https://images.openai.com/static-rsc-4/TKcXhLiAFmzlzCuTGNJmY1ssjXleIMiQvSSMVrJ8r7NX9hybmIK9u9Bjw0cFcmSMBXHh7VbBCaIvHga9w0oZTjBgqhqXC7k_itrqjzFDqIqTYA_xlE9VS63Lg64hPOQBw9idOV7Lh3FGIsWE8mngq6F_BKaI9pu12iBpwEjOqK_o9ba-VrSswMGdPa-JpRKH?purpose=fullsize"
                        class="d-block w-100"
                        alt="Slide 2"
                    >

                    <div class="carousel-overlay"></div>

                    <div class="carousel-caption custom-caption">

                        <h1>
                            Advanced Cyber Security
                        </h1>

                        <p>

                            Protect your business with reliable
                            next-generation security solutions.

                        </p>

                        

                    </div>

                </div>

                <!-- SLIDE 3 -->

                <div class="carousel-item">

                    <img
                        src="https://www.addwebsolution.com/wp-content/uploads/2024/03/Different-Types-of-Mobile-Apps.jpeg"
                        class="d-block w-100"
                        alt="Slide 3"
                    >

                    <div class="carousel-overlay"></div>

                    <div class="carousel-caption custom-caption">

                        <h1>
                            Smart Business Automation
                        </h1>

                        <p>

                            Simplify operations and scale your
                            business with DigiFix InfoTech.

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

                <span class="carousel-control-prev-icon"></span>

            </button>

            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
            >

                <span class="carousel-control-next-icon"></span>

            </button>

        </div>

    </section>

    <div
        class="container"
    >
    <!-- ABOUT / COMPANY SECTION -->

<section
    style="
    width:100%;
    padding:90px 8%;
    background:#f8f9fa;
    overflow:hidden;
    "
>

    <div
        style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:80px;
        flex-wrap:wrap;
        "
    >

        <!-- LEFT IMAGES -->

        <div
            style="
            flex:1;
            min-width:320px;
            position:relative;
            "
        >

            <!-- IMAGE 1 -->

            <img
                src="https://cdn.onix-systems.com/uploads/p_G_Yi_NH_Hh_KM_2v_Yjaxsk_Sg_T05kajm_IF_Ts_N_68f41f8139.jpg"

                alt="IT Solutions"

                style="
                width:320px;
                height:390px;
                object-fit:cover;
                border-radius:6px;
                box-shadow:0 10px 25px rgba(0,0,0,0.15);
                "
            >

            <!-- IMAGE 2 -->

            <img
                src="https://cdn.prod.website-files.com/6320d50a472d7123344bfd02/63feb5d78544d856d7f2c310_lead-software-development-team.jpg"

                alt="Software Team"

                style="
                width:260px;
                height:300px;
                object-fit:cover;
                border-radius:6px;
                position:absolute;
                bottom:-60px;
                right:20px;
                border:8px solid white;
                box-shadow:0 10px 25px rgba(0,0,0,0.15);
                "
            >

            <!-- DECORATION BOX -->

            <div
                style="
                width:55px;
                height:55px;
                background:#ff5733;
                position:absolute;
                top:110px;
                right:-20px;
                "
            ></div>

            <div
                style="
                width:70px;
                height:70px;
                background:#ff5733;
                position:absolute;
                bottom:-75px;
                left:230px;
                "
            ></div>

        </div>

        <!-- RIGHT CONTENT -->

        <div
            style="
            flex:1;
            min-width:320px;
            "
        >

            <!-- HEADING -->

            <h1
                style="
                font-size:48px;
                font-weight:800;
                color:#111;
                margin-bottom:25px;
                line-height:1.3;
                "
            >

                Empowering Businesses
                Through Smart IT Solutions

            </h1>

            <!-- TEXT -->

            <p
                style="
                font-size:21px;
                color:#444;
                line-height:2;
                margin-bottom:30px;
                "
            >

                At DigiFix InfoTech, we provide advanced
                software solutions, cybersecurity services,
                cloud technologies, and digital systems
                designed to help businesses grow faster,
                operate smarter, and stay secure in today’s
                rapidly evolving digital world.

            </p>

            <p
                style="
                font-size:21px;
                color:#444;
                line-height:2;
                margin-bottom:40px;
                "
            >

                From enterprise software development and
                business automation to AI-powered platforms,
                cloud infrastructure, and IT consulting,
                DigiFix InfoTech delivers reliable and
                future-ready technology services tailored
                to your business needs.

            </p>

            <!-- BUTTON -->

            <a
                href="#"

                style="
                display:inline-flex;
                align-items:center;
                gap:15px;
                text-decoration:none;
                "
            >

            </a>

        </div>

    </div>

</section>
    </div>

    <div
        class="container"
    >
        <!-- WHAT WE DO SECTION -->

<section
    style="
    width:100%;
    padding:100px 8%;
    background:white;
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

        <!-- LEFT IMAGE SECTION -->

        <div
            style="
            flex:1;
            min-width:320px;
            position:relative;
            "
        >

            <!-- PURPLE BOX -->

            <div
                style="
                width:130px;
                height:130px;
                background:#b784db;
                position:absolute;
                top:-25px;
                left:-25px;
                z-index:0;
                "
            ></div>

            <!-- MAIN IMAGE -->

            <img
                src="https://media.licdn.com/dms/image/v2/C5612AQGSExSJzxH1UA/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1621824820477?e=2147483647&v=beta&t=BiPieJWGE6zrcZbtd1bHoEbcFszxOpI_l-ADLf7zaKs"

                alt="DigiFix Team"

                style="
                width:100%;
                max-width:420px;
                height:520px;
                object-fit:cover;
                position:relative;
                z-index:2;
                box-shadow:0 15px 35px rgba(0,0,0,0.15);
                "
            >

            <!-- ORANGE SIDE BOX -->

            <div
                style="
                width:60px;
                height:420px;
                background:#ff5c4d;
                position:absolute;
                top:50px;
                right:40px;
                z-index:1;
                "
            ></div>

            <!-- BOTTOM BOX -->

            <div
                style="
                width:380px;
                height:40px;
                background:#ff5c4d;
                position:absolute;
                bottom:-20px;
                left:30px;
                z-index:1;
                "
            ></div>

        </div>

        <!-- RIGHT CONTENT -->

        <div
            style="
            flex:1;
            min-width:320px;
            "
        >

            <!-- SMALL TITLE -->

            <span
                style="
                color:#ff5c4d;
                font-size:18px;
                font-weight:700;
                letter-spacing:1px;
                text-transform:uppercase;
                "
            >

                Our Expertise

            </span>

            <!-- MAIN HEADING -->

            <h1
                style="
                font-size:52px;
                font-weight:800;
                color:#111;
                margin-top:15px;
                margin-bottom:30px;
                line-height:1.2;
                "
            >

                Transforming Ideas
                Into Powerful Digital Solutions

            </h1>

            <!-- DESCRIPTION -->

            <p
                style="
                font-size:20px;
                color:#444;
                line-height:2;
                margin-bottom:35px;
                "
            >

                DigiFix InfoTech delivers innovative
                technology solutions designed to help
                businesses improve efficiency, strengthen
                security, and accelerate digital growth.

            </p>

            <!-- LIST -->

            <div
                style="
                display:flex;
                flex-direction:column;
                gap:18px;
                "
            >

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:15px;
                    "
                >

                    <span
                        style="
                        width:35px;
                        height:35px;
                        background:#ff5c4d;
                        color:white;
                        border-radius:50%;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-weight:bold;
                        "
                    >
                        ✓
                    </span>

                    <p
                        style="
                        margin:0;
                        font-size:19px;
                        color:#222;
                        line-height:1.7;
                        "
                    >

                        Custom Software & Web Application Development

                    </p>

                </div>

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:15px;
                    "
                >

                    <span
                        style="
                        width:35px;
                        height:35px;
                        background:#7b2cbf;
                        color:white;
                        border-radius:50%;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-weight:bold;
                        "
                    >
                        ✓
                    </span>

                    <p
                        style="
                        margin:0;
                        font-size:19px;
                        color:#222;
                        line-height:1.7;
                        "
                    >

                        Cybersecurity, Cloud & Data Protection Solutions

                    </p>

                </div>

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:15px;
                    "
                >

                    <span
                        style="
                        width:35px;
                        height:35px;
                        background:#ff5c4d;
                        color:white;
                        border-radius:50%;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-weight:bold;
                        "
                    >
                        ✓
                    </span>

                    <p
                        style="
                        margin:0;
                        font-size:19px;
                        color:#222;
                        line-height:1.7;
                        "
                    >

                        AI, IoT & Smart Business Automation Services

                    </p>

                </div>

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:15px;
                    "
                >

                    <span
                        style="
                        width:35px;
                        height:35px;
                        background:#7b2cbf;
                        color:white;
                        border-radius:50%;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-weight:bold;
                        "
                    >
                        ✓
                    </span>

                    <p
                        style="
                        margin:0;
                        font-size:19px;
                        color:#222;
                        line-height:1.7;
                        "
                    >

                        UI/UX Design & Enterprise Technology Consulting

                    </p>

                </div>

            </div>

            <!-- BUTTON -->

            <a
                href="Services.php"

                style="
                display:inline-block;
                margin-top:45px;
                padding:16px 40px;
                background:linear-gradient(45deg,#ff5c4d,#7b2cbf);
                color:white;
                text-decoration:none;
                border-radius:50px;
                font-size:18px;
                font-weight:600;
                transition:0.3s;
                box-shadow:0 10px 20px rgba(0,0,0,0.15);
                "
            >

                Explore Services

            </a>

        </div>

    </div>

</section>
    </div>


    <div
        class="container"
    >
    <!-- WHY CHOOSE US SECTION -->

<section
    style="
    width:100%;
    padding:110px 8%;
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

        <!-- LEFT IMAGE AREA -->

        <div
            style="
            flex:1;
            min-width:320px;
            position:relative;
            "
        >

            <!-- PURPLE SHAPE -->

            <div
                style="
                width:140px;
                height:140px;
                background:#b784db;
                position:absolute;
                top:-25px;
                left:-25px;
                z-index:0;
                border-radius:10px;
                "
            ></div>

            <!-- MAIN IMAGE -->

            <img
                src="https://t3.ftcdn.net/jpg/03/17/75/96/360_F_317759691_tOGvURIzTXP5pyHfy33I5cQazw8fxK0g.jpg"

                alt="Why DigiFix"

                style="
                width:100%;
                max-width:430px;
                height:530px;
                object-fit:cover;
                position:relative;
                z-index:2;
                border-radius:10px;
                box-shadow:0 15px 40px rgba(0,0,0,0.15);
                transition:0.4s;
                "
            >

            <!-- ORANGE DESIGN -->

            <div
                style="
                width:65px;
                height:430px;
                background:#ff5c4d;
                position:absolute;
                top:50px;
                right:30px;
                z-index:1;
                border-radius:10px;
                "
            ></div>

            <!-- BOTTOM BAR -->

            <div
                style="
                width:390px;
                height:45px;
                background:#ff5c4d;
                position:absolute;
                bottom:-20px;
                left:25px;
                z-index:1;
                border-radius:10px;
                "
            ></div>

        </div>

        <!-- RIGHT CONTENT -->

        <div
            style="
            flex:1;
            min-width:320px;
            "
        >

            <!-- SMALL TITLE -->

            <span
                style="
                color:#ff5c4d;
                font-size:18px;
                font-weight:700;
                text-transform:uppercase;
                letter-spacing:1px;
                "
            >

                Why Choose DigiFix

            </span>

            <!-- HEADING -->

            <h1
                style="
                font-size:54px;
                font-weight:800;
                color:#111;
                line-height:1.2;
                margin-top:15px;
                margin-bottom:30px;
                "
            >

                Smart Technology
                That Powers Business Growth

            </h1>

            <!-- TEXT -->

            <p
                style="
                font-size:20px;
                color:#444;
                line-height:2;
                margin-bottom:35px;
                "
            >

                DigiFix InfoTech combines innovation,
                security, and advanced digital expertise
                to deliver high-performance IT solutions
                that help businesses grow faster,
                improve productivity, and stay future-ready.

            </p>

            <!-- INTERACTIVE CARDS -->

            <div
                style="
                display:flex;
                flex-direction:column;
                gap:22px;
                "
            >

                <!-- CARD 1 -->

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:18px;
                    padding:22px;
                    background:white;
                    border-radius:15px;
                    box-shadow:0 10px 25px rgba(0,0,0,0.08);
                    transition:0.3s;
                    cursor:pointer;
                    "
                >

                    <!-- ICON -->

                    <div
                        style="
                        min-width:60px;
                        height:60px;
                        border-radius:50%;
                        background:#ff5c4d;
                        color:white;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-size:24px;
                        "
                    >

                        ⚡

                    </div>

                    <!-- TEXT -->

                    <div>

                        <h3
                            style="
                            margin:0;
                            font-size:24px;
                            font-weight:700;
                            color:#111;
                            "
                        >

                            Fast & Scalable Solutions

                        </h3>

                        <p
                            style="
                            margin-top:10px;
                            font-size:18px;
                            color:#555;
                            line-height:1.8;
                            "
                        >

                            We build modern digital systems
                            designed for speed, reliability,
                            and future scalability.

                        </p>

                    </div>

                </div>

                <!-- CARD 2 -->

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:18px;
                    padding:22px;
                    background:white;
                    border-radius:15px;
                    box-shadow:0 10px 25px rgba(0,0,0,0.08);
                    transition:0.3s;
                    cursor:pointer;
                    "
                >

                    <!-- ICON -->

                    <div
                        style="
                        min-width:60px;
                        height:60px;
                        border-radius:50%;
                        background:#7b2cbf;
                        color:white;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-size:24px;
                        "
                    >

                        🔒

                    </div>

                    <!-- TEXT -->

                    <div>

                        <h3
                            style="
                            margin:0;
                            font-size:24px;
                            font-weight:700;
                            color:#111;
                            "
                        >

                            Enterprise Level Security

                        </h3>

                        <p
                            style="
                            margin-top:10px;
                            font-size:18px;
                            color:#555;
                            line-height:1.8;
                            "
                        >

                            Advanced cybersecurity and
                            protection systems to keep
                            your business safe and secure.

                        </p>

                    </div>

                </div>

                <!-- CARD 3 -->

                <div
                    style="
                    display:flex;
                    align-items:flex-start;
                    gap:18px;
                    padding:22px;
                    background:white;
                    border-radius:15px;
                    box-shadow:0 10px 25px rgba(0,0,0,0.08);
                    transition:0.3s;
                    cursor:pointer;
                    "
                >

                    <!-- ICON -->

                    <div
                        style="
                        min-width:60px;
                        height:60px;
                        border-radius:50%;
                        background:#ff5c4d;
                        color:white;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        font-size:24px;
                        "
                    >

                        🚀

                    </div>

                    <!-- TEXT -->

                    <div>

                        <h3
                            style="
                            margin:0;
                            font-size:24px;
                            font-weight:700;
                            color:#111;
                            "
                        >

                            Innovation Driven Approach

                        </h3>

                        <p
                            style="
                            margin-top:10px;
                            font-size:18px;
                            color:#555;
                            line-height:1.8;
                            "
                        >

                            We use modern technologies like
                            AI, Cloud, IoT, and Automation
                            to transform businesses digitally.

                        </p>

                    </div>

                </div>

            </div>

          

           

        </div>

    </div>

</section>
    </div>
    
    
    


</main>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
/>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>
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
