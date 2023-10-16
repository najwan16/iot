<?php
include 'koneksi.php';
//require 'funtion.php';

    if(isset($_POST["register"])){
 
        if(registrasi($_POST)>0){
            echo "<script>
                alert('user baru berhasil ditambahkan');
                </script>";
                header("location:login.php");

        }else{
            echo mysqli_error($koneksi);
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
    <h2>Create Account</h2>

  <form method="POST" action="">
    <input placeholder="Username" type="text" name="username"  id="username" required >
    <input placeholder="Email" type="email" name="email" id="email" required >
    <input placeholder="Password" type="password" name="password" id="password" required >
    <input placeholder="Konfirmasi Password" type="password" name="password2" id="password2" required >

    <button type="submit" name="register">Register</button>
    </form>
 <br>
    <div class="links">
                    Already Have an Account? <a href="login.php">Sign In</a>
                </div>
    <h2>&nbsp;</h2>
    </div>
</div>
</body>
</html>