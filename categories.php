<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet">
    <link href="categories.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Camp</title>
  </head>
  <body> 
    <div class="container header-nav">
    <?php include 'navbar/navbar.php'; ?>
    </div>
    <div class="hero">
    <div class="container">
      <div class="container-fluid list">

        <a href="productlist.php?category=headset">
          <div class="card" style="width: 18rem;" >
            <img src="head.jpg" class="card-img-top" alt="headsets">
            <div class="card-body">
              <p class="card-text">Gaming Headsets</p>
            </div>
          </div>
        </a>

        <a href="productlist.php?category=laptop">
          <div class="card" style="width: 18rem;">
            <img src="laptop1.jpg" class="card-img-top" alt="laptop">
            <div class="card-body">
              <p class="card-text">Gaming Laptops</p>
            </div>
          </div>
        </a>

        <a href="productlist.php?category=monitor">
          <div class="card" style="width: 18rem;" >
            <img src="monitor.jpg" class="card-img-top" alt="monitor">
            <div class="card-body">
              <p class="card-text">Gaming Monitors</p>
            </div>
          </div>
        </a>

        <a href="productlist.php?category=mouse">
          <div class="card" style="width: 18rem;">
            <img src="mouse1.jpg" class="card-img-top" alt="mouse">
            <div class="card-body">
              <p class="card-text">Gaming Mice</p>
            </div>
          </div>
        </a>

        <a href="productlist.php?category=keyboard">
          <div class="card" style="width: 18rem;">
            <img src="key.jpg" class="card-img-top" alt="keyboard">
            <div class="card-body">
              <p class="card-text">Gaming Keyboard</p>
            </div>
          </div>
        </a>

        <a href="productlist.php?category=pc">
          <div class="card" style="width: 18rem;">
            <img src="Gaming-PCs.jpg" class="card-img-top" alt="pc">
            <div class="card-body">
              <p class="card-text">Gaming PCs</p>
            </div>
          </div>
        </a>
      </div>  

      <div id="productsContainer"></div>
    </div>
     
        
       
      <?php include 'footer/footer.php'; ?>
   
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

    
  </body>
</html>