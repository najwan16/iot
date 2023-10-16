<?php
// session_start();

// if(isset($_SESSION["login"])){
//     header("location: index.php");
//     exit;
// }
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>Data Formulir</title>
</head>
<body>
  
        <form method="POST" action="">
            <label>Username : </label> 
            <input type="text" name="username"  id="username" required placeholder="Username">
            <br><br>

            <label>Password : </label> 
            <input type="password" name="password" id="password" required placeholder="Password">
            <br><br>
                      
            <button type="submit" name="login">Login</button>
               
         </form>
 
         <br><br> <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
</body>
 </html> 