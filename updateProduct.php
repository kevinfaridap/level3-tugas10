<?php
    session_start();
    if(isset($_POST["nama_produk"])){
        include 'konek.php';


        $productID = $_POST["id"];
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
       $connection->query("UPDATE produk SET nama_produk='".$nama_produk."', keterangan='".$keterangan."', harga='".$harga."',
       jumlah='".$jumlah."' WHERE productID=".$productID);

  
        $message  = "Success editted product!";
    }
    
    $_SESSION["message"] = $message;

    header("location:update.php?id=".$productID);
exit();
}
header("location:create.php");
exit();

?>