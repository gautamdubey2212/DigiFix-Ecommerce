<?php

include "conn.php";

/* LOGIN CHECK */

if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Contact Messages</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

<style>

body{
    background:#f4f6f9;
    font-family:Arial,sans-serif;
}

.main-content{
    margin-left:100px;
    padding:40px;
}

.page-title{
    font-size:38px;
    font-weight:700;
    color:#111827;
}

.message-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
}

.table thead{
    background:#111827;
    color:white;
}

.table td{
    vertical-align:middle;
}

</style>

</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main-content">

    <!-- TOP -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="page-title">

            Contact Messages

        </h2>

        <a href="dashboard.php"
           class="btn btn-dark px-4 py-2 rounded-pill">

           Back Dashboard

        </a>

    </div>

    <!-- CARD -->

    <div class="card shadow message-card">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>

                        <tr>

                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $query =
                    "SELECT * FROM contact_messages
                     ORDER BY id DESC";

                    $result =
                    mysqli_query($conn, $query);

                    if(mysqli_num_rows($result) > 0){

                        while($row = mysqli_fetch_assoc($result)){

                    ?>

                    <tr>

                        <td>

                            <?php echo $row['id']; ?>

                        </td>

                        <td>

                            <?php echo $row['name']; ?>

                        </td>

                        <td>

                            <?php echo $row['email']; ?>

                        </td>

                        <td>

                            <?php echo $row['subject']; ?>

                        </td>

                        <td style="max-width:300px;">

                            <?php echo $row['message']; ?>

                        </td>

                        <td>

                            <?php echo $row['created_at']; ?>

                        </td>

                    </tr>

                    <?php
                        }
                    }else{
                    ?>

                    <tr>

                        <td colspan="6"
                            class="text-center text-danger">

                            No Messages Found

                        </td>

                    </tr>

                    <?php
                    }
                    ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>