<?php

include "conn.php";

$error = "";

if(isset($_POST['login'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // EMPTY FIELD CHECK

    if(empty($email) || empty($password)){

        $error = "Please Fill All Fields";

    }else{

        // SELECT QUERY

        $stmt = $conn->prepare("SELECT * FROM admin_users WHERE email=? AND password=?");

        $stmt->bind_param("ss", $email, $password);

        $stmt->execute();

        $result = $stmt->get_result();

        // LOGIN SUCCESS

        if($result->num_rows > 0){

            session_regenerate_id(true);

            $_SESSION['admin'] = $email;

            header("Location: sidebar.php");
            exit();

        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <!-- BOOTSTRAP -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body
    style="
    background:#f4f6f9;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    "
>

    <!-- LOGIN BOX -->

    <div
        class="bg-white shadow rounded-4 p-5"
        style="width:420px;"
    >

        <!-- TITLE -->

        <h2 class="text-center fw-bold mb-4">

            Admin Login

        </h2>

        <!-- ERROR MESSAGE -->

        <?php if($error != ""){ ?>

            <div class="alert alert-danger">

                <?php echo $error; ?>

            </div>

        <?php } ?>

        <!-- LOGIN FORM -->

        <form method="POST">

            <!-- EMAIL -->

            <div class="mb-3">

                <label class="form-label">

                    Email

                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control p-3 rounded-3"
                    required
                >

            </div>

            <!-- PASSWORD -->

            <div class="mb-4">

                <label class="form-label">

                    Password

                </label>

                <input
                    type="password"
                    name="password"
                    class="form-control p-3 rounded-3"
                    required
                >

            </div>

            <!-- BUTTON -->

            <button
                type="submit"
                name="login"
                class="btn btn-dark w-100 p-3 rounded-3"
            >

                Login

            </button>

        </form>

    </div>

</body>
</html>