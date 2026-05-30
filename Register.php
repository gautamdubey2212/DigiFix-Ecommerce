<?php

include "DB.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    

    if (empty($name) || empty($email) || empty($password)) {

        echo "All fields are required!";

    } 
    else {

       

        $check = $conn->prepare("SELECT * FROM reg WHERE email = ?");

        $check->bind_param("s", $email);

        $check->execute();

        $result = $check->get_result();

        if ($result->num_rows > 0) {

            echo "Email already exists!";

        } 
        else {

        

            $pass = password_hash($password, PASSWORD_BCRYPT);

           

            $sql = $conn->prepare("INSERT INTO reg(name,email,password) VALUES(?,?,?)");
            if(!$sql){
                die($conn->error);
            }

            $sql->bind_param('sss', $name, $email, $pass);

            if ($sql->execute()) {

                header("Location: Login.php");
                exit();

            } 
            else {

                echo "Registration Failed!";

            }
        }
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

    /* REGISTER BOX */

    .container{

        width:420px !important;

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

    .container:hover{

        transform:translateY(-3px);

        box-shadow:
        0 20px 50px rgba(0,0,0,0.5);

    }

    /* HEADING */

    h3{

        position:absolute;

        top:70px;

        color:white;

        font-size:38px;

        font-weight:700;

        letter-spacing:1px;

        text-align:center;

    }

    /* INPUTS */

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

    /* LOGIN TEXT */

    .login-text{

        text-align:center;

        margin-top:22px;

        color:#cbd5e1;

        font-size:15px;

    }

    .login-text a{

        color:cyan;

        text-decoration:none;

        font-weight:600;

        transition:0.3s;

    }

    .login-text a:hover{

        color:white;

    }

    /* MOBILE */

    @media(max-width:500px){

        .container{

            width:92% !important;

            padding:30px;

        }

        h3{

            font-size:30px;

            top:80px;

        }

    }

</style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
         


            <main>
            <h3>Register with Us!!!!</h3>
            <form action="" method="POST">
                <div
                    class="container"
                >
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id="name"
                            placeholder=""
                        />
                        <label for="name">Name</label>
                    </div>

                     <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="email"
                            id="email"
                            placeholder=""
                        />
                        <label for="email">Email</label>
                    </div>

                     <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="password"
                            id="password"
                            placeholder=""
                        />
                        <label for="password">Password</label>
                    </div>

                    

                     
                     
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                    
                </div>
                
            </form>
        </main>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
