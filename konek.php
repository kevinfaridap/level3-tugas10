<?php
    $connection = new mysqli("localhost" ,"root", "", "arkademy");
    if (!$connection) {
       echo ("Koneksi Error!");
       exit();
    }

?>