<?php

    require("dbconnection.php");

    $user_fullname = mysqli_real_escape_string($db_conn, $_POST["nick"]);
    $user_email = mysqli_real_escape_string($db_conn, $_POST["email"]);
    $user_password = mysqli_real_escape_string($db_conn, $_POST["password"]);
    $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);


?>