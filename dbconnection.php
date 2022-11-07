<?php

    $db_conn;
    $db_host = "localhost.mysql.db";
    $db_name = "baza";
    $db_user = "admin";
    $db_pass = "haslo";
    $db_conn = mysqli_connect("localhost","admin","haslo")
    or die ("Odpowiedź: Błąd połączenia z serwerem $db_host");
    mysqli_select_db($db_conn, $db_name) or die("Trwa konserwacja bazy danych… Odśwież stronę za kilka sekund.");
?>