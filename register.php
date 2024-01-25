<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="register.css" rel="stylesheet">
</head>
<body>  
  <div class="container login-layout">
    <form action="register.php" method="POST">
      <h1>Register Page</h1>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="usernameHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="usernameHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="usernameHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <button type="submit" class="login">Register</button>
      <center><p class="register-link"> Already have an account ? <a class="register" href="login.php"> Login now !</a></p></center>
    </form>
  </div>


</body>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include 'database/db.php'; // Database connection file

      // Retrieve form data and sanitize it
      $name = $conn->real_escape_string($_POST['name']);
      $username = $conn->real_escape_string($_POST['username']);
      $email = $conn->real_escape_string($_POST['email']);
      $password = $conn->real_escape_string($_POST['password']);

      // Hash the password
    

      // SQL Query to insert the user into the database
      $sql = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";

      // Execute the query and check if it's successful
      if ($conn->query($sql) === TRUE) {
        echo '<script>alert("User create successfully");</script>';
          // Redirect to login page
          header('Location: login.php');
          exit;
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
  }
  ?>
</html>