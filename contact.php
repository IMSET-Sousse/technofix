<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="index.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<title>Contact form</title>
</head>
<body>
<div class="container header-nav">
        <nav class="navbar navbar-expand-lg navbar-light">
        <img src="logo1.png"  width="60" height="60">
             
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Login/Register</a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Page
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                            <li><a class="dropdown-item" href="https://www.reuters.com/technology/">News</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                          </ul>
                       </li>
                  </ul>
                
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
           
           </div>
        </nav>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h4>Get in touch</h4>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="forn-label">Name</1abel>
                    <input type="text" class="form-control" 1d="exampleFormControlInput1" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormcontrolInput1" placeholder="Enter your email">
                </div>
                <div classe="mb-3">
                    <Label for="exampleFormcontrolInput1" classe="form-label">Contact Number</label>
                    <input types="number" class="form-control" id ="exampleFormControlInput1" placeholder="Enter your number">
                </div>
                <div class="mb-3">
                    <label for= "exampleFormControlTextareal" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
                </div>
                <button class="btn btn-primary">Send</button>

                
            </div>
            <div class="col-md-5">
                <h4>Contact us</h4><hr>
            
            <div class="mt-5">
            <div class="d-flex">
                <i class="bi bi-geo-alt-fill"></i>
            <p>sousse.sahloul4</p>
            </div><hr>
            <div class="d-flex">
            <i class="bi bi-telephone-fill"></i>
            <p>Contact : - 52000333</p>
            </div><hr>
            <div class="d-flex">
            <i class="bi bi-envelope-fill"></i> 
            <p>Tshop@gmail.com</p>
            </div><hr>
            <div class="d-flex">
            <i class="b1 bi-browser-chrome"></i>
            <p>website: www.Tshop.com</p>
            </div>
            </div>
            </div>
            </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>