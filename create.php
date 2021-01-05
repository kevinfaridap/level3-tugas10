<?php
    session_start();
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


    <title>Kevin Farid Alpharisy | Create Page</title>
  </head>
  <body>

    

   <header class="main-create">
     <div class="container">

        <div class="row atur">
        <div class="col-1 mt-5 ">
            <a href="index.php" class="tombol-back" > <img src="img/kembali.png" alt=""> </a>    
        </div>
          <div class="col mt-5">
            <h1 class="display-3"> Buat Produk Anda Disini ! </h1>
          </div>
        </div>



       <div class="row justify-content-center ">
         <div class="col-8 isi-2 d-flex justify-content-center kotak-form" >

          <div class="card text-white bg-dark mb-3" style="">
            <div class="card-header">Create Product</div>
            <div class="card-body">

            <form action="addProduct.php" method="post" enctype="multipart/form-data">
          <table>
                  <tr>
                  <td> Nama Product</td> 
                  <td>:</td>
                  <td><input type="text" name="nama_produk"></td>
                  </tr>
                  <tr>
                  <td> Keterangan</td>
                  <td>:</td>
                  <td><input type="text" name="keterangan"></td>
                  </tr>
                  <tr>
                  <td> Harga</td>
                  <td>:</td>
                  <td><input type="number" name="harga"></td>
                  </tr>
                  <tr>
                  <td> Jumlah</td>
                  <td>:</td>
                  <td><input type="number" name="jumlah"></td>
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








