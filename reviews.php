<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>reviewst</title>
    <style media="screen">
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
.checked {
  color: orange;
}
    </style>
</head>

<body>
<ul>
    <li><a href="login.php">login-register</a></li>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="services.php">services</a></li>
        <li><a href="reviews.php">reviews</a></li>
        <li><a href="#about">About</a></li>
      </ul>
      <br>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Photos</th>
      <th scope="col">ratings</th>
      <th scope="col">comments</th>
      <th scope="col">Recommendation</th>
    </tr>
  </thead>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <tr>
      <th scope="row"><img src="p1.jpeg" style="width:100px;height:100px;"></th>
      <td><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span></td>
      <td>One of the best repair shops in town fast and trusted. they fixed my phone in 2 days in top of that they got the best prices</td>
      <td>Yes i would recommend</td>
    </tr>
    <tr>
      <th scope="row"><img src="p2.jpeg" style="width:100px;height:100px;"></th>
      <td><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></td>
      <td>Good experience with this work shop fast workers best prices</td>
      <td>Yes i would recommend</td>
    </tr>
    <tr>
      <th scope="row"><img src="p3.png" style="width:100px;height:100px;"></th>
      <td><span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span></td>
      <td>one of the worst repair shops they didn't my phone after 2 weeks </td>
      <td>No i would not recommend</td>
    </tr>
    </tr>
    <tr>
      <th scope="row"><img src="p4.jpg" style="width:100px;height:100px;"></th>
      <td><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span></td>
      <td>Fixed My Phone But took them a long time</td>
      <td>No i would not recommend</td>
    </tr>
  </tbody>
</table>
</body>
</html>