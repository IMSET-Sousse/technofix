<!doctype html>
<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Camp</title>
  </head>
  <body> 
    <div class="container header-nav">
    <?php include 'navbar/navbar.php'; ?>
    </div>
    <div class="hero">
    <div class="container">
           <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                   <img src="https://i.postimg.cc/QthVGQ4R/pngfind-com-razer-mouse-png-4658872.png" class="img-hero d-block mx-lg-auto" alt="Bootstrap Themes" width="880" height="600" loading="lazy">
              </div>
          
              <div class="col-lg-6">
                
                  <h1 class="title">TShop Home Page</h1>
                  <p class="lead">Welcome to TShop, your one-stop destination for cutting-edge technology products and solutions! At Tshop, we're passionate about bringing the latest advancements in the tech world directly to you, making your online shopping experience seamless and enjoyable.

Explore a vast array of high-quality products from leading brands, carefully curated to cater to tech enthusiasts, professionals, and anyone who appreciates the power of innovation. Whether you're looking for the latest smartphones, state-of-the-art laptops, smart home devices, or innovative gadgets, we've got you covered.</p>
                  
            
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a class="btn btn-primary btn-lg px-4 me-md-2" href="categories.php">Shop Now</a>
                  </div>
                
            </div>
        </div>
    </div>
      
  
      <div class="container">
      <h1> Gallery </h1>
      <div class="row">
         <div class="col-sm-4">
       
       
           <img class="img-gal" src="monitor.jpg"
           alt="Gallery Image 1"/>
         </div>
        
   
         <div class="col-sm-4">
             <img class="img-gal" src="head.jpg"
             alt="Gallery Image 1"/>
         </div>
        
       
          <div class="col-sm-4">
             <img class="img-gal" src="mouse1.jpg"
             alt="Gallery Image 1"/>
            </div>
        
          
          <div class="col-sm-4">
             <img class="img-gal" src="laptop1.jpg"
             alt="Gallery Image 1"/>
            </div>
        
       
          <div class="col-sm-4">
             <img class="img-gal" src="Gaming-pcs.jpg"
             alt="Gallery Image 1"/>
            </div>
        
       
          <div class="col-sm-4">
             <img class="img-gal" src="key.jpg"
             alt="Gallery Image 1"/>
            </div>
  
        </div>
        </div>
      </div>

    <?php include 'footer/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>