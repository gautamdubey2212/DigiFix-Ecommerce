<?php

include "DB.php";

if(isset($_SESSION["id"]))
{
    header("Location: Home.php");
}
else
{
    header("Location: Home.php");
}

exit();

?>