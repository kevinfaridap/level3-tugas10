<?php
    session_start();

    if(!isset($_GET["id"])){
        header("location:view.php");
        exit();
    }
    include 'konek.php';
    $id = $_GET["id"];

    $getData = $connection->query("SELECT * FROM produk WHERE productID = ".$id );
    if($getData->num_rows==0){
        header("location:view.php");
        exit();
    }

    $getData = $getData->fetch_assoc();

    
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Kevin Farid Alpharisy | Update Page</title>
  </head>
  <body>

  <!-- AWAL NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" style="color:white;">Kevin Farid Alpharisy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link" href="index.php">Home </a>
        <a class="nav-item nav-link" href="create.php">Create</a>
        <a class="nav-item nav-link" href="view.php">View</a>
        </div>
    </div>
    </div>
    </nav>


<header class="laman-update">
  <div class="container">
      <div class="row">
          <div class="col text-center">
          <h1 class="judul-update"> Update Product</h1>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col d-flex justify-content-center">
          
                <form action="updateProduct.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$_GET["id"]?>">
                <table>
                    <tr>
                    <td> Nama Product</td> 
                    <td>:</td>
                    <td><input type="text" name="nama_produk" value="<?=$getData["nama_produk"]?>"></td>
                    </tr>
                    <tr>
                    <td> Keterangan</td>
                    <td>:</td>
                    <td><input type="text" name="keterangan" value="<?=$getData["keterangan"]?>"></td>
                    </tr>
                    <tr>
                    <td> Harga</td>
                    <td>:</td>
                    <td><input type="number" name="harga" value="<?=$getData["harga"]?>"></td>
                    </tr>
                    <tr>
                    <td> Jumlah</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah" value="<?=$getData["jumlah"]?>"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><button>Save Product</button></td>
                    </tr>
                    
                    <?php
                        if(isset($_SESSION["message"])){
                            echo $_SESSION["message"];
                            unset($_SESSION["message"]);
                        }
                    
                    ?>
                </table>
                </form>    
          </div>
      </div>
  </div>
  </header>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


