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
    <link href="login.css" rel="stylesheet">
</head>
<body>  
  
  <div class="container login-layout">
    <form action="login.php" method="POST">
      <h1>Login Page</h1>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="usernameHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <button type="submit" class="login">Login</button>
      <center><p > Don't have an account ? <a  href="register.php"> Register now !</a></p></center>
    </form>
  </div>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database/db.php'; // Database connection file

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Start the session and set session variables
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to home page
        header("Location: index.php"); // Replace 'index.php' with the path to your home page
        exit();
    } else {
      echo '<script>alert("Invalid username or password");</script>';
    }
    $conn->close();
}
?>
</body>
</html>