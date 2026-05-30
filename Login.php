
<?php

include "DB.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    

    $sql = $conn->prepare("SELECT id, name, password FROM reg WHERE email = ?");

    $sql->bind_param("s", $email);

    $sql->execute();

    $result = $sql->get_result();

    

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        

        if (password_verify($password, $user["password"])) {

            $_SESSION["id"] = $user["id"];

            $_SESSION["name"] = $user["name"];

          

            header("Location: Home.php");

            exit();

        } 
        else {

            echo "Incorrect Password!";

        }

    } 
    else {

        echo "Email not found!";

    }
}

?>

<!doctype html>
<html lang="en">

<head>

    <title>Login Page</title>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />

    <style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    body{

        min-height:100vh;

        overflow:hidden;

        font-family:Arial, Helvetica, sans-serif;

        display:flex;

        justify-content:center;
        align-items:center;

        background:
        linear-gradient(
        135deg,
        #0f172a,
        #111827,
        #1e293b
        );

        position:relative;

    }

    /* BACKGROUND EFFECT */

    body::before{

        content:"";

        position:absolute;

        width:350px;
        height:350px;

        background:#7b2cbf;

        border-radius:50%;

        top:-120px;
        left:-120px;

        filter:blur(120px);

        opacity:0.45;

    }

    body::after{

        content:"";

        position:absolute;

        width:350px;
        height:350px;

        background:cyan;

        border-radius:50%;

        bottom:-120px;
        right:-120px;

        filter:blur(120px);

        opacity:0.35;

    }

    /* MAIN */

    main{

        width:100%;
        height:100vh;

        display:flex;

        justify-content:center;
        align-items:center;

        position:relative;

        z-index:2;

    }

    /* LOGIN BOX */

    .login-box{

        width:420px;

        padding:40px;

        border-radius:28px;

        background:rgba(255,255,255,0.08);

        backdrop-filter:blur(18px);

        border:1px solid rgba(255,255,255,0.12);

        box-shadow:
        0 10px 40px rgba(0,0,0,0.45);

        color:white;

        transition:0.3s;

    }

    .login-box:hover{

        transform:translateY(-3px);

        box-shadow:
        0 20px 50px rgba(0,0,0,0.5);

    }

    /* HEADING */

    h2{

        text-align:center;

        margin-bottom:10px;

        font-size:38px;

        font-weight:700;

        color:white;

        letter-spacing:1px;

    }

    /* SUBTITLE */

    .subtitle{

        text-align:center;

        color:#cbd5e1;

        margin-bottom:30px;

        font-size:15px;

    }

    /* INPUT */

    .form-control{

        height:55px;

        background:rgba(255,255,255,0.08) !important;

        border:1px solid rgba(255,255,255,0.1);

        border-radius:14px !important;

        color:white !important;

        font-size:15px;

        padding-left:15px;

    }

    .form-control:focus{

        box-shadow:none;

        border:1px solid cyan;

        background:rgba(255,255,255,0.12) !important;

    }

    .form-control::placeholder{

        color:#cbd5e1;

    }

    /* LABEL */

    .form-floating label{

        color:#cbd5e1;

        padding-left:15px;

    }

    /* BUTTON */

    .btn{

        width:100%;

        height:55px;

        border:none;

        border-radius:14px;

        background:
        linear-gradient(
        135deg,
        cyan,
        #7b2cbf
        ) !important;

        color:white !important;

        font-size:17px;

        font-weight:600;

        transition:0.3s;

        margin-top:10px;

    }

    .btn:hover{

        transform:translateY(-2px);

        box-shadow:
        0 10px 25px rgba(0,255,255,0.3);

    }

    /* REGISTER TEXT */

    .register-text{

        text-align:center;

        margin-top:22px;

        color:#cbd5e1;

        font-size:15px;

    }

    .register-text a{

        color:cyan;

        text-decoration:none;

        font-weight:600;

        transition:0.3s;

    }

    .register-text a:hover{

        color:white;

    }

    /* MOBILE */

    @media(max-width:500px){

        .login-box{

            width:92%;

            padding:30px;

        }

    }

</style>
</head>

<body>

    

    <main>

       <form action="" method="POST">

    <div class="login-box">

        <h2>Login</h2>

        <!-- EMAIL -->

        <div class="form-floating mb-3">

            <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                placeholder="Email"
                required
                autocomplete="email"
            />

            <label for="email">Email</label>

        </div>

       

        <div class="form-floating mb-3">

            <input
                type="password"
                class="form-control"
                name="password"
                id="password"
                placeholder="Password"
                required
                autocomplete="current-password"
            />

            <label for="password">Password</label>

        </div>

       

        <button
            type="submit"
            class="btn btn-primary"
        >
            Login
        </button>

    </div>
    <div class="text-center mt-3">

    <p style="color:white;">

        Don't have an account?

        <a 
            href="Register.php"
            style="
            color:cyan;
            text-decoration:none;
            font-weight:bold;
            "
        >
            Register Here
        </a>

    </p>

</div>

</form>

    </main>

</body>

</html>