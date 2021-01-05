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

    <title>Kevin Farid Alpharisy | View Page</title>

  </head>
  <body>
 
    <header class="laman-view">
      <div class="container">
        
        <div class="row">
          <div class="col-1 mt-5">
          <a href="index.php" class="tombol-back" > <img src="img/kembali.png" alt=""> </a>
          </div>
          <div class="col mt-5">
            <h2 class="judul-view">View Product</h2>
          </div>
        </div>

        <?php
                include 'konek.php';
                $getProduct = $connection->query("SELECT * FROM produk");
                while($fetchProduct = $getProduct->fetch_assoc()){
            ?>
  
      
        <div class="row mt-5">
          <div class="col-4 justify-content-center">
            <div class="card" style="">
            <div class="card-body">
              <h5 class="card-title isi-produk">              
                <h3 class="nama-produk"> <strong><?=$fetchProduct["nama_produk"]?> </strong> </h3> <br />
                <?=$fetchProduct["keterangan"]?> <br />
                Harga <?=number_format($fetchProduct["harga"])?> <br />
                Jumlah <?=number_format($fetchProduct["jumlah"])?> <br />
              </h5>


              <div class="tombol-view">
              <a href="update.php?id=<?=$fetchProduct["productID"]?>"><button>Update</button> </a>
              <a href="delete.php?id=<?=$fetchProduct["productID"]?>"><button>Delete</button> </a>
              </div>
          

              <!-- Bagian-Card-Bootstrap4 -->
              <!-- <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a> -->
            </div>
            </div>
          
          </div>
        </div>

        <?php
            }
        ?>
      </div>


    </header>





    





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




