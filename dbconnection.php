<?php

    $db_conn;
    $db_host = "localhost";
    $db_name = "baza";
    $db_user = "root";
    $db_pass = "";
    $db_conn = mysqli_connect($db_host,$db_user,$db_pass)
    or die ("Odpowiedź: Błąd połączenia z serwerem $db_host");
    mysqli_select_db($db_conn, $db_name) or die("Trwa konserwacja bazy danych… Odśwież stronę za kilka sekund.");
?>