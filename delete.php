<?php
    session_start();
    if(isset($_GET["id"])){
        include 'konek.php';

        $connection->query("DELETE FROM produk WHERE productID = ".$_GET["id"] );
    }
    header("location:view.php");
    exit();
?>