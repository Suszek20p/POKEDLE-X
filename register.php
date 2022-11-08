<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    
    <title>POKEDLE X</title>
  </head>

  <style>

    body
    {
        background-color: #bcfbffb2;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
    }

  </style>
    <body>   
    
    </body>
</html>
<?php

    require("dbconnection.php");

    $user_nickname = $_POST["nick"];
    $user_email = $_POST["email"];
    $user_password = $_POST["password"];
    $user_password2 = $_POST["password2"];
    $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);

    if ($user_password != $user_password2)
    {
        echo "HASŁO MUSI BYĆ TAKIE SAMO W OBU POLACH";
        header('Refresh: 3; url=register.html');
    }
    else
    {
        if(mysqli_query($db_conn, "INSERT INTO users (user_nickname, user_email, user_passwordhash) VALUES ('$user_nickname', '$user_email', '$user_password_hash')" ))
        {
            header("location:login.html");
        }else
        {
            echo "Nieoczekiwany błąd - użytkownik jużistnieje lub błąd serwera MySQL";
        }      
    }
    

   


?>