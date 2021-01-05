<?php
    session_start();
    if(isset($_POST["nama_produk"])){
        include 'konek.php';

        $nama_produk = $_POST["nama_produk"];
        $keterangan = $_POST["keterangan"];
        $harga = $_POST["harga"];
        $jumlah = $_POST["jumlah"];
        $message = "";

        if  ($nama_produk==""){
            $message = "Nama Produk Harus Dimasukkan!";
        } else if ($keterangan==""){
            $message = "Keterangan Harus Dimasukkan!";
        } else if ($harga==""){
            $message = "Harga harus masukkan!";
        } else if ($jumlah==""){
            $message = "Jumlah harus masukkan!";
    } else {
        $connection->query("INSERT INTO produk VALUES (null,'".$nama_produk."','".$keterangan."','".$harga."','".$jumlah."')");
        
        $message  = "Success added new product!";
    }
    $_SESSION["message"] = $message;
}
header("location:create.php");
exit();

?>