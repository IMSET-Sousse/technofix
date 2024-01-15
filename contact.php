<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="./contact.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<title>Contact Us</title>
<style>
    ul {
  list-style-type: none;
  margin: 0px;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
div {
  border: 0px solid gray;
  padding: 8px;
}
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: lightblue;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
*{
padding: 0; 
margin: 0; 
box-sizing: border-box;
}

.container{ width: 60%;
     padding: 40px; 
     border-radius: 0; 
     position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%)
}
.row{
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}
col-md-7{
    padding: 20px;
}

    .col-md-5{
    background-color:rgb(53, 53, 247);
    padding: 20px;
    color:white;
}
.form-control{ 
    height: 52px;
     background:#fff;
color:#000;
font-size: 14px;
border-radius: 2px;
box-sizing: none !important ;
border: 1px solid rgba(0, 0, 0, 0.1);
}
    .bi{font size: 20px;
}
.d-flex p{
font-size: 18px; 
padding-left: 18px;
font-family: Verdana, Geneva, Tahoma, sans-serif;
}

@media only screen and(max-width:60px){
    .container~{
        width: 100%;
        position: absolute;
        left: 50%;
        top: 80%;
    }
}
</style>
</head>
<body>
<ul>
    <li><a href="login.php">login-register</a></li>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="services.php">services</a></li>
        <li><a href="reviews.php">reviews</a></li>
        <li><a href="contact.php">contact us</a></li>
      </ul>
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
            <p>technofix.gmail.com</p>
            </div><hr>
            <div class="d-flex">
            <i class="b1 bi-browser-chrome"></i>
            <p>website: www.technofix.com</p>
            </div>
            </div>
            </div>
            </div>
            </div>
           
           
    
            <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>