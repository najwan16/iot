<?php
include ('koneksi.php');
if(isset($_POST["login"])){ 
    $username = $_POST["username"];
    $password = $_POST["password"];

   $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' ");

   if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            //set session
            //$_SESSION["login"] = true;
            header("location:home.php");
            exit;
        }
   }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stail.css">
    <title>Document</title>
</head>
<body>
    <div class="container" onclick="onclick">
    <div class="top"></div>
    <div class="center">
    <h2>Sign In</h2>

  <form method="POST" action="">
    <input placeholder="Username" type="text" name="username"  id="username" required >
  
    <input placeholder="Password" type="password" name="password" id="password" required >

    <button type="submit" name="login">Login</button>
    </form>
    <br><br>
    <div class="links">
                    Don't have account? <a href="register.php">Create Account</a>
                </div>
    <h2>&nbsp;</h2>
    </div>
</div>
</body>
</html>